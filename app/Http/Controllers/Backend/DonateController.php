<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Donate;
use Illuminate\Http\Request;
use Session;
use Validator;
class DonateController extends Controller
{
    
     //index function is here_//
     public function index()
     {
         $showDonate=Donate::all();
        return view('backend.donate.donate-view', compact('showDonate'));
     }
 
      //create function is here_//
     public function create()
     {
         return view('backend.donate.create-donate');
     }
 
      //_store function is here_//
     public function store(Request $request)
     {

            $validatedData = $request->validate([
             'age' => ['required'],
             'first_name' => 'required',
             'middle_name' => 'required',
             'family_name' => 'required',
             'state' => 'required',
             'post_code' => 'required',
             'email' => 'required',
             'home_phone_num' => 'required',
             'mobile_phone_num' => 'required',
             'work_phone_num' => 'required',
             'applicant_signature' => 'required',
             'applicant_date' => 'required',
             'nominator_full_name' => 'required',
         ]);
        $storeDonator=new Donate();
        $storeDonator->age=$request->age;
        $storeDonator->title=$request->title;
        $storeDonator->first_name=$request->first_name;
        $storeDonator->middle_name=$request->middle_name;
        $storeDonator->family_name=$request->family_name;
        $storeDonator->num_street_name=$request->num_street_name;
        $storeDonator->suburb=$request->suburb;
        $storeDonator->state=$request->state;
        $storeDonator->post_code=$request->post_code;
        $storeDonator->email=$request->email;
        $storeDonator->home_phone_num=$request->home_phone_num;
        $storeDonator->mobile_phone_num=$request->mobile_phone_num;
        $storeDonator->work_phone_num=$request->work_phone_num;
        $storeDonator->applicant_signature=$request->applicant_signature;
        $storeDonator->applicant_date=$request->applicant_date;
        $storeDonator->nominator_full_name=$request->nominator_full_name;
        $storeDonator->nominator_membership_no=$request->nominator_membership_no;
        $storeDonator->nominator_signature=$request->nominator_signature;
        $storeDonator->nominator_date=$request->nominator_date;
        $storeDonator->seconder_full_name=$request->seconder_full_name;
        $storeDonator->seconder_membership_no=$request->seconder_membership_no;
        $storeDonator->seconder_signature=$request->seconder_signature;
        $storeDonator->seconder_date=$request->seconder_date;
        $storeDonator->save();
        Session::flash('success','Donator Registration Created Successfully');
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
 
     //_edit function is here_//
     public function edit($id)
     {
         $editDonate=Donate::find($id);
         return view('backend.donate.edit-donate',compact('editDonate'));
     }
 
     //update function is here_//
     public function update(Request $request, $id)
     {
         $updateDonate=Donate::find($id);
         $updateDonate->age=$request->age;
         $updateDonate->title=$request->title;
         $updateDonate->first_name=$request->first_name;
         $updateDonate->middle_name=$request->middle_name;
         $updateDonate->family_name=$request->family_name;
         $updateDonate->num_street_name=$request->num_street_name;
         $updateDonate->suburb=$request->suburb;
         $updateDonate->state=$request->state;
         $updateDonate->post_code=$request->post_code;
         $updateDonate->email=$request->email;
         $updateDonate->home_phone_num=$request->home_phone_num;
         $updateDonate->mobile_phone_num=$request->mobile_phone_num;
         $updateDonate->work_phone_num=$request->work_phone_num;
         $updateDonate->applicant_signature=$request->applicant_signature;
         $updateDonate->applicant_date=$request->applicant_date;
         $updateDonate->nominator_full_name=$request->nominator_full_name;
         $updateDonate->nominator_membership_no=$request->nominator_membership_no;
         $updateDonate->nominator_signature=$request->nominator_signature;
         $updateDonate->nominator_date=$request->nominator_date;
         $updateDonate->seconder_full_name=$request->seconder_full_name;
         $updateDonate->seconder_membership_no=$request->seconder_membership_no;
         $updateDonate->seconder_signature=$request->seconder_signature;
         $updateDonate->seconder_date=$request->seconder_date;
         $updateDonate->save();
         Session::flash('success','Donator Registration Updated Successfully');
         return redirect()->back();
     }
 
 
     //_delete function is here_//
     public function destroy($id)
     {
         $destroyDonator=Donate::find($id);
         $destroyDonator->delete();
         return redirect()->route('donates.view');
     }
}
