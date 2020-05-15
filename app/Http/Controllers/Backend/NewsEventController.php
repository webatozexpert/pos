<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\NewsEvent;

class NewsEventController extends Controller
{
     public function view(){
        
        $data['allData'] = NewsEvent::all();
       
        return view('backend.news_event.view-news-event',$data);
    }
    public function add(){
        
        return view('backend.news_event.add-news-event');
    }
    public function store(Request $request){
        $this->validate($request,[
        	'date'=>'required',
            'short_title'=>'required',
            'long_title'=>'required',
            'image'=>'required',
        ]);
        $data = new NewsEvent();
        $data ->date = date('Y-m-d',strtotime($request->date));
        $data ->short_title = $request->short_title;
        $data ->long_title = $request->long_title;
         $data->created_by = Auth::user()->id;
        if ($request->file('image')){
             $file = $request->file('image');
             $filename =date('YmdHi').$file->getClientOriginalName();
             $file->move(public_path('upload/news_images'), $filename);
             $data['image']= $filename;
         }
        $data->save();
       
        return redirect()->route('news_events.view')->with('success','Data Added successfull');
    }
    public function edit($id){
        $editData = NewsEvent::find($id);
       return view('backend.news_event.edit-news_event',compact('editData'));
    }
    public function update(Request $request,$id){
         $this->validate($request,[
            'date'=>'required',
            'short_title'=>'required',
            'long_title'=>'required',
            'image'=>'required',
        ]);
         $data = NewsEvent::find($id);
         $data ->date = date('Y-m-d',strtotime($request->date));
         $data ->short_title = $request->short_title;
        $data ->long_title = $request->long_title;
         $data->updated_by = Auth::user()->id;
        if ($request->file('image')){
             $file = $request->file('image');
             @unlink(public_path('upload/news_images/'.$data->image));
             $filename =date('YmdHi').$file->getClientOriginalName();
             $file->move(public_path('upload/news_images'), $filename);
             $data['image']= $filename;
         }
        $data->save();
       
        return redirect()->route('news_events.view')->with('success','Data Updated successfull');
    }
    public function delete($id){
        $news = NewsEvent::find($id);
        if(file_exists('public/upload/news_image/' . $news->image) AND!empty($news->image)){
        unlink('public/upload/news_images/'.$news->image);
        }
        $news -> delete();
         return redirect()->route('news_events.view')->with('success','Data Delete successfull');
    }
}
