<?php

namespace App\Http\Controllers\Backend\Phylosophy;

use App\Http\Controllers\Controller;
use App\Models\Phylosophy\Spirituality;
use Illuminate\Http\Request;
use Session;

class SpiritualityController extends Controller
{
    //Spirituality view function is here__//
    public function index()
    {
        $Spirituality=Spirituality::all();
        $SpiritualityCount=Spirituality::count();
        return view('backend.phylosopy.spirituality.view-spirituality', compact('Spirituality','SpiritualityCount'));
    }

       //Spirituality create function is here__//
      public function create()
      {
       return view('backend.phylosopy.spirituality.create-spirituality');
      }

     //Spirituality store function is here__//
    public function store(Request $request)
    {
       $validatedData = $request->validate([
           'title' => 'required|max:300',
           'description' => 'required',
           'image' => 'required',
       ]);
      $storeData=new Spirituality();
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
    //Spirituality edit function is here__//
    public function edit($id)
    {
        $editData=Spirituality::find($id);
        return view('backend.phylosopy.spirituality.create-spirituality',compact('editData'));
    }

     //__Spirituality update function is here__//
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'required',
        ]);
      $updateData=Spirituality::find($id);
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

    //Spirituality delete function is here__//
    public function destroy(Request $request,$id)
    {
       $deleteData=Spirituality::find($request->id);
       if(file_exists('upload/user_image/'.$deleteData->image)AND ! empty($deleteData->image))
       {
        unlink('upload/user_image/'.$deleteData->image);
       }
       $deleteData->delete();
       return redirect()->route('spiritualities.view');
    }
}
