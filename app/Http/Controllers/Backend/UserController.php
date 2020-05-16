<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function view(){
        $data['allData'] = User::all();
       
        return view('backend.user.view-user',$data);
    }
    public function add(){
        
        return view('backend.user.add-user');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required|unique:users,name',
            'email'=>'required|unique:users,email',
            'password'=>'required|unique:users,password',
        ]);
        $data = new User();
        $data->usertype = $request->usertype;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
       
        return redirect()->route('users.view')->with('success','Data Added successfull');
    }
    public function edit($id){
        $editData = User::find($id);
       return view('backend.user.edit-user',compact('editData'));
    }
    public function update(Request $request,$id){
        $data = User::find($id);
        $data->usertype = $request->usertype;
        $data->name = $request->name;
        $data->email = $request->email;
       
        $data->save();
        return redirect()->route('users.view')->with('success','Data Update successfull');
    }
    public function delete($id){
        $user = User::find($id);
        if(file_exists('public/upload/user_images/' . $user->image) AND!empty($user->image)){
        unlink('public/upload/user_images/'.$user->image);
        }
        $user -> delete();
         return redirect()->route('users.view')->with('success','Data Delete successfull');
    }
}
