<?php

namespace App\Http\Controllers\Backend\Phylosophy;

use App\Http\Controllers\Controller;
use App\Models\Phylosophy\Community;
use Illuminate\Http\Request;
use Session;

class CommunityController extends Controller
{
    //Community view function is here__//
    public function index()
    {
        $Community=Community::all();
        $CommunityCount=Community::count();
        return view('backend.phylosopy.community.view-community', compact('Community','CommunityCount'));
    }

       //Community create function is here__//
      public function create()
      {
       return view('backend.phylosopy.community.create-community');
      }

     //Community store function is here__//
    public function store(Request $request)
    {
       $validatedData = $request->validate([
           'title' => 'required|max:300',
           'description' => 'required',
           'image' => 'required',
       ]);
      $storeData=new Community();
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
    //Community edit function is here__//
    public function edit($id)
    {
        $editData=Community::find($id);
        return view('backend.phylosopy.community.create-community',compact('editData'));
    }

     //__Community update function is here__//
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'required',
        ]);
      $updateData=Community::find($id);
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

    //Community delete function is here__//
    public function destroy(Request $request,$id)
    {
       $deleteData=Community::find($request->id);
       if(file_exists('upload/user_image/'.$deleteData->image)AND ! empty($deleteData->image))
       {
        unlink('upload/user_image/'.$deleteData->image);
       }
       $deleteData->delete();
       return redirect()->route('communities.view');
    }
}
