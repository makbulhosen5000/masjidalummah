<?php

namespace App\Http\Controllers\Backend\Phylosophy;

use App\Http\Controllers\Controller;
use App\Models\Phylosophy\PhylosophyService;
use Illuminate\Http\Request;
use Session;

class PhylosophyServiceController extends Controller
{
     //PhylosophyService view function is here__//
     public function index()
     {
         $PhylosophyService=PhylosophyService::all();
         $PhylosophyServiceCount=PhylosophyService::count();
         return view('backend.phylosopy.PhylosophyService.view-phylosophyService', compact('PhylosophyService','PhylosophyServiceCount'));
     }
 
        //PhylosophyService create function is here__//
       public function create()
       {
        return view('backend.phylosopy.PhylosophyService.create-PhylosophyService');
       }
 
      //PhylosophyService store function is here__//
     public function store(Request $request)
     {
        $validatedData = $request->validate([
            'title' => 'required|max:300',
            'description' => 'required',
            'image' => 'required',
        ]);
       $storeData=new PhylosophyService();
       $storeData->title=$request->title;
       $storeData->description=$request->description;
        if($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $newImage=time().'.'.$extension;
            $file->move('upload/user_image/',$newImage);
            $storeData->image=$newImage;
        }else{
            return $request;
            $storeData->image='';
        }
       $storeData->save();
       Session::flash('success','Data Created successfully');
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
     //PhylosophyService edit function is here__//
     public function edit($id)
     {
         $editData=PhylosophyService::find($id);
         return view('backend.phylosopy.PhylosophyService.create-PhylosophyService',compact('editData'));
     }
 
      //__PhylosophyService update function is here__//
     public function update(Request $request, $id)
     {
        $validatedData = $request->validate([
            'image' => 'required',
        ]);
       $updateData=PhylosophyService::find($id);
       $updateData->title=$request->title;
       $updateData->description=$request->description;
        if($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $newImage=time().'.'.$extension;
            $file->move('upload/user_image/',$newImage);
            $updateData->image=$newImage;
        }else{
            return $request;
            $updateData->image='';
        }
       $updateData->save();
       Session::flash('success','Data Updated successfully');
       return redirect()->back();
     }
 
     //PhylosophyService delete function is here__//
     public function destroy(Request $request,$id)
     {
        $deleteData=PhylosophyService::find($request->id);
        if(file_exists('upload/user_image/'.$deleteData->image)AND ! empty($deleteData->image))
        {
         unlink('upload/user_image/'.$deleteData->image);
        }
        $deleteData->delete();
        return redirect()->route('phylosophy.services.view');
     }
}
