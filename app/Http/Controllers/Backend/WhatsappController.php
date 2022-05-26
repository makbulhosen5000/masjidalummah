<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Whatsapp;
use Illuminate\Http\Request;
use Session;

class WhatsappController extends Controller
{
    //__whatsapp view function is here__//
    public function index()
    {
        $whatsapp=Whatsapp::all();
        // $catCount=Category::count();
        return view('backend.whatsapp.whatsapp-view', compact('whatsapp'));
    }
       //__whatsapp create function is here__//
       public function create()
       {
           return view('backend.whatsapp.whatsapp-create');
       }

     //__whatsapp store function is here__//
    public function Store(Request $request)
    {
       $validatedData = $request->validate([
           'whatsapp' => 'required',
       ]);
      $whatsappStore=new Whatsapp();
      $whatsappStore->whatsapp=$request->whatsapp; 
      $whatsappStore->save();
      Session::flash('success','Whatsapp Added successfully');
      return redirect()->back();
    }

    //edit function is here.......................
    public function edit($id)
    {
        $editWhatsapp=Whatsapp::find($id);
        return view('backend.whatsapp.whatsapp-create',compact('editWhatsapp'));
    }

    //update function is here.......................
    public function update(Request $request, $id)
    {
        $update=Whatsapp::find($id);
        $update->whatsapp=$request->whatsapp; 
        $update->save();
        Session::flash('success','WhatsApp Link Updated successfully');
       return redirect()->back();
    }

    //__whatsapp delete function is here__//
    public function destroy($id)
    {
     $delete=Whatsapp::find($id);
     $delete->delete();
     return redirect()->route('whatsapp.view');
    }

}
