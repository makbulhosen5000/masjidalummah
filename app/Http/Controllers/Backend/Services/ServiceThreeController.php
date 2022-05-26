<?php

namespace App\Http\Controllers\Backend\Services;

use App\Http\Controllers\Controller;
use App\Models\Services\ServiceThree;
use Illuminate\Http\Request;
use Session;
class ServiceThreeController extends Controller
{
    //__serviceThree view function is here__//
    public function index()
    {
        $serviceThree=ServiceThree::all();
        // $catCount=Category::count();
        return view('backend.services.service_three.view-service-three', compact('serviceThree'));
    }

       //__serviceThree create function is here__//
      public function create()
      {
       return view('backend.services.service_three.create-service-three');
      }

     //__serviceThree store function is here__//
    public function store(Request $request)
    {
       $validatedData = $request->validate([
           'title' => 'required',
           'short_desc' => 'required',
           'long_desc' => 'required',
           'image' => 'required',
       ]);
      $serviceThreeStore=new serviceThree();
      $serviceThreeStore->title=$request->title;
      $serviceThreeStore->short_desc=$request->short_desc;
      $serviceThreeStore->long_desc=$request->long_desc;
       if($request->hasFile('image')){
           $file=$request->file('image');
           $extension=$file->getClientOriginalExtension();
           $newImage=time().'.'.$extension;
           $file->move('upload/user_image/',$newImage);
           $serviceThreeStore->image=$newImage;
       }else{
           return $request;
           $serviceThreeStore->image='';
       }
      $serviceThreeStore->save();
      Session::flash('success','Service three Created successfully');
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
    //____serviceThree edit function is here__//
    public function edit($id)
    {
        $editserviceThree=serviceThree::find($id);
          return view('backend.services.service_three.create-service-three',compact('editserviceThree'));
    }

     //__serviceThree update function is here__//
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'required',
        ]);
      $serviceThreeUpdate=serviceThree::find($id);
      $serviceThreeUpdate->title=$request->title;
      $serviceThreeUpdate->short_desc=$request->short_desc;
      $serviceThreeUpdate->long_desc=$request->long_desc;
       if($request->hasFile('image')){
           $file=$request->file('image');
           $extension=$file->getClientOriginalExtension();
           $newImage=time().'.'.$extension;
           $file->move('upload/user_image/',$newImage);
           $serviceThreeUpdate->image=$newImage;
       }else{
           return $request;
           $serviceThreeUpdate->image='';
       }
      $serviceThreeUpdate->title=$request->title;
      $serviceThreeUpdate->save();
      Session::flash('success','Service three Updated successfully');
      return redirect()->back();
    }

    //__serviceThree delete function is here__//
    public function destroy(Request $request,$id)
    {
       $serviceThree=serviceThree::find($request->id);
       if(file_exists('upload/user_image/'.$serviceThree->image)AND ! empty($serviceThree->image))
       {
        unlink('upload/user_image/'.$serviceThree->image);
       }
       $serviceThree->delete();
       return redirect()->route('servises.three.view');
    }
}
