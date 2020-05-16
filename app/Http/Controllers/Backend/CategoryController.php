<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Category;
use Auth;

class CategoryController extends Controller
{
     public function view(){
        $data['allData'] = Category::all();
       
        return view('backend.category.view-category',$data);
    }
    public function add(){
        
        return view('backend.category.add-category');
    }
    public function store(Request $request){
        $this->validate($request,[
        	
            'name'=>'required',
           
        ]);
        $data = new Category();
       
        $data ->name = $request->name;
       
         $data->created_by = Auth::user()->id;
       
        $data->save();
       
        return redirect()->route('categories.view')->with('success','Data Added successfull');
    }
    public function edit($id){
        $editData = Category::find($id);
       return view('backend.category.edit-category',compact('editData'));
    }
    public function update(Request $request,$id){
          $this->validate($request,[
        	
            'name'=>'required',
        ]);
         $data = Category::find($id);
    
         $data ->name = $request->name;
         $data->updated_by = Auth::user()->id;
      
        $data->save();
       
        return redirect()->route('categories.view')->with('success','Data Updated successfull');
    }
    public function delete($id){
        $category = Category::find($id);
        
        $category -> delete();
         return redirect()->route('categories.view')->with('success','Data Delete successfull');
    }
}
