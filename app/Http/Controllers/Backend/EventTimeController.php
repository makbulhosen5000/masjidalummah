<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\EventTime;
use Illuminate\Http\Request;
use Auth; 
use Session;

class EventTimeController extends Controller
{
      //__EvenTime view function is here__//
      public function index()
      {
          $eventTimes=EventTime::all();
          // $catCount=Category::count();
          return view('backend.eventime.view-eventime', compact('eventTimes'));
      }
  
         //__EvenTime create function is here__//
        public function create()
        {
            return view('backend.eventime.create-eventime');
        }
  
       //__EvenTime store function is here__//
      public function store(Request $request)
      {
          $validatedData = $request->validate([
              'title' => 'required|max:30',
              'date' => 'required',
  
          ]);
         $storeEvenTime=new EventTime();
         $storeEvenTime->title=$request->title;
         $storeEvenTime->date=$request->date;
         $storeEvenTime->save();
         Session::flash('success','EvenTime Created successfully');
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
      //____EvenTime edit function is here__//
      public function edit($id)
      {
          $editEvenTime=EventTime::find($id);
          return view('backend.eventime.create-eventime',compact('editEvenTime'));
      }
  
       //__EvenTime update function is here__//
      public function update(Request $request, $id)
      
      {
        $validatedData = $request->validate([
            'title' => 'required|max:45',
        ]);
          $updateCategory=EventTime::find($id);
          $updateCategory->title=$request->title;
          $updateCategory->date=$request->date;
          $updateCategory->save();
          Session::flash('success','Eventime Updated successfully');
         return redirect()->back();
      }
  
      //__EvenTime delete function is here__//
      public function destroy($id)
      {
         $deleteBrand=EventTime::find($id);
         $deleteBrand->delete();
        return redirect()->route('eventimes.view');
      }
}
