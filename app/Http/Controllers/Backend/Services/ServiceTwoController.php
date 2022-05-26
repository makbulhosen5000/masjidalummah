<?php

namespace App\Http\Controllers\Backend\Services;

use App\Http\Controllers\Controller;
use App\Models\Services\ServiceTwo;
use Illuminate\Http\Request;
use Session;
class ServiceTwoController extends Controller
{
     //__ServiceTwo view function is here__//
     public function index()
     {
         $serviceTwo=ServiceTwo::all();
         // $catCount=Category::count();
         return view('backend.services.service_two.view-service-two', compact('serviceTwo'));
     }
 
        //__ServiceTwo create function is here__//
       public function create()
       {
        return view('backend.Services.service_two.create-service-two');
       }
 
      //__ServiceTwo store function is here__//
     public function store(Request $request)
     {
        $validatedData = $request->validate([
            'title' => 'required',
            'short_desc' => 'required',
            'long_desc' => 'required',
            'image' => 'required',
        ]);
       $ServiceTwoStore=new ServiceTwo();
       $ServiceTwoStore->title=$request->title;
       $ServiceTwoStore->short_desc=$request->short_desc;
       $ServiceTwoStore->long_desc=$request->long_desc;
        if($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $newImage=time().'.'.$extension;
            $file->move('upload/user_image/',$newImage);
            $ServiceTwoStore->image=$newImage;
        }else{
            return $request;
            $ServiceTwoStore->image='';
        }
       $ServiceTwoStore->title=$request->title;
       $ServiceTwoStore->save();
       Session::flash('success','Service two Created successfully');
       return redirect()->back();
     }
 
     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
         //
     }
     //____ServiceTwo edit function is here__//
     public function edit($id)
     {
         $editServiceTwo=ServiceTwo::find($id);
           return view('backend.services.service_two.create-service-two',compact('editServiceTwo'));
     }
 
      //__ServiceTwo update function is here__//
     public function update(Request $request, $id)
     {
        $validatedData = $request->validate([
            'image' => 'required',
        ]);
       $ServiceTwoUpdate=ServiceTwo::find($id);
       $ServiceTwoUpdate->title=$request->title;
       $ServiceTwoUpdate->short_desc=$request->short_desc;
       $ServiceTwoUpdate->long_desc=$request->long_desc;
        if($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $newImage=time().'.'.$extension;
            $file->move('upload/user_image/',$newImage);
            $ServiceTwoUpdate->image=$newImage;
        }else{
            return $request;
            $ServiceTwoUpdate->image='';
        }
       $ServiceTwoUpdate->save();
       Session::flash('success','Service two Updated successfully');
       return redirect()->back();
     }
 
     //__ServiceTwo delete function is here__//
     public function destroy(Request $request,$id)
     {
        $ServiceTwo=ServiceTwo::find($request->id);
        if(file_exists('upload/user_image/'.$ServiceTwo->image)AND ! empty($ServiceTwo->image))
        {
         unlink('upload/user_image/'.$ServiceTwo->image);
        }
        $ServiceTwo->delete();
        return redirect()->route('servises.two.view');
     }
}
