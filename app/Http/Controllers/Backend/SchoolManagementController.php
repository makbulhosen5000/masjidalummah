<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SchoolManagement;
use Illuminate\Http\Request;
use Session;
class SchoolManagementController extends Controller
{
     //__SchoolManagement view function is here__//
     public function index()
     {
         $schoolManagement=SchoolManagement::all();
         // $catCount=Category::count();
         return view('backend.school_management.view-school', compact('schoolManagement'));
     }
 
        //__SchoolManagement create function is here__//
       public function create()
       {
        return view('backend.school_management.create-school');
       }
 
      //__SchoolManagement store function is here__//
     public function store(Request $request)
     {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required|max:500',
            'first_day_fall' => 'required',
            'first_day_spring' => 'required',
            'late_registration_fall' => 'required',
            'late_registration_spring' => 'required',
            'last_day_fall' => 'required',
            'last_day_spring' => 'required',
        ]);
       $SchoolManagementStore=new SchoolManagement();
       $SchoolManagementStore->title=$request->title;
       $SchoolManagementStore->description=$request->description;
       $SchoolManagementStore->first_day_fall=$request->first_day_fall;
       $SchoolManagementStore->first_day_spring=$request->first_day_spring;
       $SchoolManagementStore->late_registration_fall=$request->late_registration_fall;    
       $SchoolManagementStore->late_registration_spring=$request->late_registration_spring;    
       $SchoolManagementStore->last_day_fall=$request->last_day_fall;    
       $SchoolManagementStore->last_day_spring=$request->last_day_spring;       
       $SchoolManagementStore->save();
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
     //____SchoolManagement edit function is here__//
     public function edit($id)
     {
         $editSchoolManagement=SchoolManagement::find($id);
         return view('backend.school_management.create-school', compact('editSchoolManagement'));
     }
 
      //__SchoolManagement update function is here__//
     public function update(Request $request, $id)
     {

       $SchoolManagementUpdate=SchoolManagement::find($id);
       $SchoolManagementUpdate->title=$request->title;
       $SchoolManagementUpdate->description=$request->description;
       $SchoolManagementUpdate->first_day_fall=$request->first_day_fall;
       $SchoolManagementUpdate->first_day_spring=$request->first_day_spring;
       $SchoolManagementUpdate->late_registration_fall=$request->late_registration_fall;    
       $SchoolManagementUpdate->late_registration_spring=$request->late_registration_spring;    
       $SchoolManagementUpdate->last_day_fall=$request->last_day_fall;    
       $SchoolManagementUpdate->last_day_spring=$request->last_day_spring;    
       $SchoolManagementUpdate->save();
       Session::flash('success','Data Updated successfully');
       return redirect()->back();
     }
 
     //__SchoolManagement delete function is here__//
     public function destroy($id)
     {
      $delete=SchoolManagement::find($id);
      $delete->delete();
      return redirect()->route('schools.view');
     }
}
