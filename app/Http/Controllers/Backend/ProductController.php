<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Supplier;
use App\Model\unit;
use App\Model\Category;
use Auth;

class ProductController extends Controller
{
    public function view(){
        $data['allData'] = Product::all();
       
        return view('backend.product.view-product',$data);
    }
    public function add(){
        $data['suppliers'] = Supplier::all();
        $data['units'] = Unit::all();
        $data['categories'] = Category::all();
        return view('backend.product.add-product',$data);
    }
    public function store(Request $request){
        $this->validate($request,[
        	
            'supplier_id'=>'required',
            'category_id'=>'required',
            'name'=>'required',
            'unit_id'=>'required',
            'quantity'=>'required',
           
        ]);
        $data = new Product();
        $data ->supplier_id = $request->supplier_id;
        $data ->category_id = $request->category_id;
        $data ->name = $request->name;
       
        $data ->unit_id = $request->unit_id;
        $data ->quantity = $request->quantity;
         $data->created_by = Auth::user()->id;
        if ($request->file('image')){
             $file = $request->file('image');
             $filename =date('YmdHi').$file->getClientOriginalName();
             $file->move(public_path('upload/product_images'), $filename);
             $data['image']= $filename;
         }
        $data->save();
       
        return redirect()->route('products.view')->with('success','Data Added successfull');
    }
    public function edit($id){
        $data['editData'] = Product::find($id);
         $data['suppliers'] = Supplier::all();
        $data['units'] = Unit::all();
        $data['categories'] = Category::all();
       return view('backend.product.edit-product',$data);
    }
    public function update(Request $request,$id){
          $this->validate($request,[
            
            'supplier_id'=>'required',
            'category_id'=>'required',
            'name'=>'required',
            'unit_id'=>'required',
            'quantity'=>'required',
           
        ]);
         $data = Product::find($id);
    
          $data ->supplier_id = $request->supplier_id;
        $data ->category_id = $request->category_id;
        $data ->name = $request->name;
       
        $data ->unit_id = $request->unit_id;
        $data ->quantity = $request->quantity;
         $data->updated_by = Auth::user()->id;
        if ($request->file('image')){
             $file = $request->file('image');
             @unlink(public_path('upload/product_images/'.$data->image));
             $filename =date('YmdHi').$file->getClientOriginalName();
             $file->move(public_path('upload/product_images'), $filename);
             $data['image']= $filename;
         }
        $data->save();
       
        return redirect()->route('products.view')->with('success','Data Updated successfull');
    }
    public function delete($id){
        $product = Product::find($id);
        if(file_exists('public/upload/product_images/' . $product->image) AND!empty($product->image)){
        unlink('public/upload/product_images/'.$product->image);
        }
        $product -> delete();
         return redirect()->route('products.view')->with('success','Data Delete successfull');
    }
}
