<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\ContactUs;
use Session;
use Auth;


class ContactController extends Controller
{
    //view function is here......................................
    public function index()
    {
        $user=Contact::all();
        $contact=Contact::count();
        return view('backend.contact.contact-view', compact('user','contact'));
    }

      //Create function is here......................................
      public function create()
      {
          return view('backend.contact.create-contact');
      }

    //Store function is here..........................
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);
       $userData=new Contact();
       $userData->created_by=Auth::user()->id;
       $userData->address=$request->address;
       $userData->phone=$request->phone;
       $userData->email=$request->email;
       $userData->facebook=$request->facebook;
       $userData->twitter=$request->twitter;
       $userData->linkedin=$request->linkedin;
       $userData->instagram=$request->instagram;
       $userData->youtube=$request->youtube;
       $userData->created_by=$request->created_by;
       $userData->updated_by=$request->updated_by;
       $userData->save();
       Session::flash('success','Contact Created successfully');
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
    //edit function is here.......................
    public function edit($id)
    {
        $editData=Contact::find($id);
        return view('backend.contact.create-contact',compact('editData'));
    }

    //update function is here.......................
    public function update(Request $request, $id)
    {
        $update=Contact::find($id);
        $update->updated_by=Auth::user()->id;
        $update->address=$request->address;
        $update->phone=$request->phone;
        $update->email=$request->email;
        $update->facebook=$request->facebook;
        $update->twitter=$request->twitter;
        $update->linkedin=$request->linkedin;
        $update->instagram=$request->instagram;
        $update->youtube=$request->youtube;
        $update->created_by=$request->created_by;
        $update->updated_by=$request->updated_by;
        $update->save();
        Session::flash('success','Contact Updated successfully');
       return redirect()->back();
    }

    //delete function is here...........................
    public function destroy($id)
    {
        $contact=Contact::find($id);
        $contact->delete();
       return redirect()->route('contacts.view');
    }
    
    //__ contact us view function __//
    public function ContactUsView()
    {
        $contactUs=ContactUs::all();
        return view('backend.contact.contact-us-view', compact('contactUs'));
    }
      //__ contact us delete function __//
      public function ContactUsDestrory($id)
      {
          $deleteContactUs=ContactUs::find($id);
          $deleteContactUs->delete();
          return redirect()->route('contact.us.view');
      }
}
