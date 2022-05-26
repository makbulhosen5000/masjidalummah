<?php

namespace App\Http\Controllers\Backend\Services;

use App\Http\Controllers\Controller;
use App\Models\Services\ServiceOne;
use Illuminate\Http\Request;
use Session;
class ServiceOneController extends Controller
{
     //__ServiceOne view function is here__//
     public function index()
     {
         $serviceOne=ServiceOne::all();
         // $catCount=Category::count();
         return view('backend.services.service_one.view-service-one', compact('serviceOne'));
     }
 
        //__ServiceOne create function is here__//
       public function create()
       {
        return view('backend.Services.service_one.create-service-one');
       }
 
      //__ServiceOne store function is here__//
     public function store(Request $request)
     {
        $validatedData = $request->validate([
            'title' => 'required',
            'short_desc' => 'required',
            'long_desc' => 'required',
            'image' => 'required',
        ]);
       $serviceOneStore=new ServiceOne();
       $serviceOneStore->title=$request->title;
       $serviceOneStore->short_desc=$request->short_desc;
       $serviceOneStore->long_desc=$request->long_desc;
        if($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $newImage=time().'.'.$extension;
            $file->move('upload/user_image/',$newImage);
            $serviceOneStore->image=$newImage;
        }else{
            return $request;
            $serviceOneStore->image='';
        }
       $serviceOneStore->save();
       Session::flash('success','Service One Created successfully');
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
     //____ServiceOne edit function is here__//
     public function edit($id)
     {
         $editServiceOne=ServiceOne::find($id);
           return view('backend.services.service_one.create-service-one',compact('editServiceOne'));
     }
 
      //__ServiceOne update function is here__//
     public function update(Request $request, $id)
     {
        $validatedData = $request->validate([
            'image' => 'required',
        ]);
       $serviceOneUpdate=ServiceOne::find($id);
       $serviceOneUpdate->title=$request->title;
       $serviceOneUpdate->short_desc=$request->short_desc;
       $serviceOneUpdate->long_desc=$request->long_desc;
        if($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $newImage=time().'.'.$extension;
            $file->move('upload/user_image/',$newImage);
            $serviceOneUpdate->image=$newImage;
        }else{
            return $request;
            $serviceOneUpdate->image='';
        }
       $serviceOneUpdate->save();
       Session::flash('success','Service One Updated successfully');
       return redirect()->back();
     }
 
     //__ServiceOne delete function is here__//
     public function destroy(Request $request,$id)
     {
        $serviceOne=ServiceOne::find($request->id);
        if(file_exists('upload/user_image/'.$serviceOne->image)AND ! empty($serviceOne->image))
        {
         unlink('upload/user_image/'.$serviceOne->image);
        }
        $serviceOne->delete();
        return redirect()->route('servises.one.view');
     }
}
