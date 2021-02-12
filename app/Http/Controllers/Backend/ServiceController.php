<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function view(){
        $data['alldata']=Service::all();
        return view('Backend.Service.service-view',$data);
    }
    public function add(){
        return view('Backend.Service.service-add');
    }

    public function store(Request $request){

        $data=new Service();
        $data->created_by=Auth::user()->id;
        $data->short_title=$request->short_title;
        $data->long_title=$request->long_title;
        $data->save();
        return redirect()->route('services.view')->with('success', 'Data Store Successfully.');
    }

    public function edit($id){
        $editdata=Service::find($id);
        return view('Backend.Service.edit-service',compact('editdata'));

    }
    public function update(Request $request, $id){
        $data=Service::find($id);
        $data->updated_by=Auth::user()->id;
        $data->short_title=$request->short_title;
        $data->long_title=$request->long_title;
        $data->save();
        return redirect()->route('services.view')->with('success', 'Data Updated Successfully.');
    }

    public function delete($id){
        $data=Service::find($id);
        $data->delete();
        return redirect()->route('services.view')->with('success', 'Data Deleted Successfully.');
    }
}
