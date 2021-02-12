<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function view(){
        $data['alldata']=News::all();
        return view('Backend.NewsEvent.news-view',$data);
    }
    public function add(){
        return view('Backend.NewsEvent.news-add');
    }

    public function store(Request $request){

        $data=new News();
        $data->created_by=Auth::user()->id;
        $data->date=date('Y-m-d',strtotime($request->date));
        $data->short_title=$request->short_title;
        $data->long_title=$request->long_title;
        if($request->file('image')){
            $file=$request->file('image');
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/News_images '),$filename);
            $data['image']=$filename;
        }
        $data->save();
        return redirect()->route('newsevent.view')->with('success', 'Data Store Successfully.');
    }

    public function edit($id){
        $editdata=News::find($id);
        return view('Backend.NewsEvent.edit-news',compact('editdata'));

    }
    public function update(Request $request, $id){
        $data=News::find($id);
        $data->updated_by=Auth::user()->id;
        $data->date=date('Y-m-d',strtotime($request->date));
        $data->short_title=$request->short_title;
        $data->long_title=$request->long_title;
        if($request->file('image')){
            $file=$request->file('image');
            @unlink(public_path('upload/News_images/'.$data->image));
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/News_images/'),$filename);
            $data['image']=$filename;
        }
        $data->save();
        return redirect()->route('newsevent.view')->with('success', 'Data Updated Successfully.');
    }

    public function delete($id){
        $data=News::find($id);
        if(file_exists('upload/News_images' . $data->image)AND !empty($data->image)){
            unlink('upload/News_images/' . $data->image);
        }
        $data->delete();
        return redirect()->route('newsevent.view')->with('success', 'Data Deleted Successfully.');
    }
}
