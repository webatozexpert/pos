<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Customer;
use Auth;

class CustomerController extends Controller
{
    public function view(){
        $data['allData'] = Customer::all();
       
        return view('backend.customer.view-customer',$data);
    }
    public function add(){
        
        return view('backend.customer.add-customer');
    }
    public function store(Request $request){
        $this->validate($request,[
        	
            'name'=>'required',
            'mobile_no'=>'required',
            
            'address'=>'required',
            'image'=>'required',
        ]);
        $data = new Customer();
       
        $data ->name = $request->name;
        $data ->mobile_no = $request->mobile_no;
        $data ->email = $request->email;
        $data ->address = $request->address;
         $data->created_by = Auth::user()->id;
        if ($request->file('image')){
             $file = $request->file('image');
             $filename =date('YmdHi').$file->getClientOriginalName();
             $file->move(public_path('upload/customer_images'), $filename);
             $data['image']= $filename;
         }
        $data->save();
       
        return redirect()->route('customers.view')->with('success','Data Added successfull');
    }
    public function edit($id){
        $editData = Customer::find($id);
       return view('backend.customer.edit-customer',compact('editData'));
    }
    public function update(Request $request,$id){
          $this->validate($request,[
        	
            'name'=>'required',
            'mobile_no'=>'required',
            
            'address'=>'required',
            'image'=>'required',
        ]);
         $data = Customer::find($id);
    
         $data ->name = $request->name;
        $data ->mobile_no = $request->mobile_no;
        $data ->email = $request->email;
        $data ->address = $request->address;
         $data->updated_by = Auth::user()->id;
        if ($request->file('image')){
             $file = $request->file('image');
             @unlink(public_path('upload/customer_images/'.$data->image));
             $filename =date('YmdHi').$file->getClientOriginalName();
             $file->move(public_path('upload/customer_images'), $filename);
             $data['image']= $filename;
         }
        $data->save();
       
        return redirect()->route('customers.view')->with('success','Data Updated successfull');
    }
    public function delete($id){
        $customer = Customer::find($id);
        if(file_exists('public/upload/customer_images/' . $customer->image) AND!empty($customer->image)){
        unlink('public/upload/customer_images/'.$customer->image);
        }
        $customer -> delete();
         return redirect()->route('customers.view')->with('success','Data Delete successfull');
    }
}
