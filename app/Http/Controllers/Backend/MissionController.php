<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Mission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MissionController extends Controller
{
    public function view(){
        $data['alldata']=Mission::all();
        return view('Backend.Mission.mission-view',$data);
    }
    public function add(){
        return view('Backend.Mission.mission-add');
    }

    public function store(Request $request){

        $data=new Mission();
        $data->created_by=Auth::user()->id;
        $data->title=$request->title;
        if($request->file('image')){
            $file=$request->file('image');
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/Mission_images '),$filename);
            $data['image']=$filename;
        }
        $data->save();
        return redirect()->route('mission.view')->with('success', 'Data Store Successfully.');
    }

    public function edit($id){
        $editdata=Mission::find($id);
        return view('Backend.Mission.edit-mission',compact('editdata'));

    }
    public function update(Request $request, $id){
        $data=Mission::find($id);
        $data->updated_by=Auth::user()->id;
        $data->title=$request->title;
        if($request->file('image')){
            $file=$request->file('image');
            @unlink(public_path('upload/Mission_images/'.$data->image));
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/Mission_images/'),$filename);
            $data['image']=$filename;
        }
        $data->save();
        return redirect()->route('mission.view')->with('success', 'Data Updated Successfully.');
    }

    public function delete($id){
        $data=Mission::find($id);
        if(file_exists('upload/Mission_images' . $data->image)AND !empty($data->image)){
            unlink('upload/Mission_images/' . $data->image);
        }
        $data->delete();
        return redirect()->route('mission.view')->with('success', 'Data Deleted Successfully.');
    }
}
