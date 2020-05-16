<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Supplier;
use Auth;

class SupplierController extends Controller
{
     public function view(){
        $data['allData'] = Supplier::all();
       
        return view('backend.supplier.view-supplier',$data);
    }
    public function add(){
        
        return view('backend.supplier.add-supplier');
    }
    public function store(Request $request){
        $this->validate($request,[
        	
            'name'=>'required',
            'mobile_no'=>'required',
           
            'address'=>'required',
            'image'=>'required',
        ]);
        $data = new Supplier();
       
        $data ->name = $request->name;
        $data ->mobile_no = $request->mobile_no;
        $data ->email = $request->email;
        $data ->address = $request->address;
         $data->created_by = Auth::user()->id;
        if ($request->file('image')){
             $file = $request->file('image');
             $filename =date('YmdHi').$file->getClientOriginalName();
             $file->move(public_path('upload/supplier_images'), $filename);
             $data['image']= $filename;
         }
        $data->save();
       
        return redirect()->route('suppliers.view')->with('success','Data Added successfull');
    }
    public function edit($id){
        $editData = Supplier::find($id);
       return view('backend.supplier.edit-supplier',compact('editData'));
    }
    public function update(Request $request,$id){
          $this->validate($request,[
        	
            'name'=>'required',
            'mobile_no'=>'required',
           
            'address'=>'required',
            'image'=>'required',
        ]);
         $data = Supplier::find($id);
    
         $data ->name = $request->name;
        $data ->mobile_no = $request->mobile_no;
        $data ->email = $request->email;
        $data ->address = $request->address;
         $data->updated_by = Auth::user()->id;
        if ($request->file('image')){
             $file = $request->file('image');
             @unlink(public_path('upload/supplier_images/'.$data->image));
             $filename =date('YmdHi').$file->getClientOriginalName();
             $file->move(public_path('upload/supplier_images'), $filename);
             $data['image']= $filename;
         }
        $data->save();
       
        return redirect()->route('suppliers.view')->with('success','Data Updated successfull');
    }
    public function delete($id){
        $supplier = Supplier::find($id);
        if(file_exists('public/upload/supplier_images/' . $supplier->image) AND!empty($supplier->image)){
        unlink('public/upload/supplier_images/'.$supplier->image);
        }
        $supplier -> delete();
         return redirect()->route('suppliers.view')->with('success','Data Delete successfull');
    }
}
