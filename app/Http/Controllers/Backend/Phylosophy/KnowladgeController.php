<?php

namespace App\Http\Controllers\Backend\Phylosophy;

use App\Http\Controllers\Controller;
use App\Models\Phylosophy\Knowladge;
use Illuminate\Http\Request;
use Session;

class KnowladgeController extends Controller
{
    //Knowlaoge view function is here__//
    public function index()
    {
        $knowladge=Knowladge::all();
        $knowladgeCount=Knowladge::count();
        return view('backend.phylosopy.knowladge.view-knowladge', compact('knowladge','knowladgeCount'));
    }

       //Knowlaoge create function is here__//
      public function create()
      {
       return view('backend.phylosopy.knowladge.create-knowladge');
      }

     //Knowlaoge store function is here__//
    public function store(Request $request)
    {
       $validatedData = $request->validate([
           'title' => 'required|max:300',
           'description' => 'required',
           'image' => 'required',
       ]);
      $storeData=new Knowladge();
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
    //Knowladge edit function is here__//
    public function edit($id)
    {
        $editData=Knowladge::find($id);
        return view('backend.phylosopy.knowladge.create-knowladge',compact('editData'));
    }

     //__Knowladge update function is here__//
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'required',
        ]);
      $updateData=Knowladge::find($id);
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

    //__ServiceOne delete function is here__//
    public function destroy(Request $request,$id)
    {
       $deleteData=Knowladge::find($request->id);
       if(file_exists('upload/user_image/'.$deleteData->image)AND ! empty($deleteData->image))
       {
        unlink('upload/user_image/'.$deleteData->image);
       }
       $deleteData->delete();
       return redirect()->route('knowladges.view');
    }
}
