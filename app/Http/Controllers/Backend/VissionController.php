<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\vission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VissionController extends Controller
{
    public function view(){
        $data['alldata']=vission::all();
        return view('Backend.Vission.vission-view',$data);
    }
    public function add(){
        return view('Backend.Vission.vission-add');
    }

    public function store(Request $request){

        $data=new vission();
        $data->created_by=Auth::user()->id;
        $data->title=$request->title;
        if($request->file('image')){
            $file=$request->file('image');
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/Vission_images '),$filename);
            $data['image']=$filename;
        }
        $data->save();
        return redirect()->route('vission.view')->with('success', 'Data Store Successfully.');
    }

    public function edit($id){
        $editdata=vission::find($id);
        return view('Backend.Vission.edit-vission',compact('editdata'));

    }
    public function update(Request $request, $id){
        $data=vission::find($id);
        $data->updated_by=Auth::user()->id;
        $data->title=$request->title;
        if($request->file('image')){
            $file=$request->file('image');
            @unlink(public_path('upload/Vission_images/'.$data->image));
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/Vission_images/'),$filename);
            $data['image']=$filename;
        }
        $data->save();
        return redirect()->route('vission.view')->with('success', 'Data Updated Successfully.');
    }

    public function delete($id){
        $data=vission::find($id);
        if(file_exists('upload/Vission_images' . $data->image)AND !empty($data->image)){
            unlink('upload/Vission_images/' . $data->image);
        }
        $data->delete();
        return redirect()->route('vission.view')->with('success', 'Data Deleted Successfully.');
    }
}
