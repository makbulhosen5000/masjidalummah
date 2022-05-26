<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CountDownTimer;
use Illuminate\Http\Request;
use Session;
class CountDownTimerController extends Controller
{
     //__category view function is here__//
     public function index()
     {
         $timers=CountDownTimer::all();
         $timerCount=CountDownTimer::count();
         return view('backend.timer.view-timer', compact('timers','timerCount'));
     }
 
        //__category create function is here__//
       public function create()
       {
           return view('backend.timer.create-timer');
       }
 
      //__category store function is here__//
     public function store(Request $request)
     {
         $validatedData = $request->validate([
             'date_time' => 'required',
 
         ]);
        $timer_id ='1';
        $timerStore = CountdownTimer::findOrNew($timer_id);
        $timerStore->title = $request->title;
        $timerStore->launch_date = $request->date_time;
        $timerStore->status = $request->timer_status;
        $timerStore->save();
        Session::flash('success','Timer Created successfully');
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
         $editTimer=CountDownTimer::find($id);
         return view('backend.timer.create-timer',compact('editTimer'));
     } 
      //__category update function is here__//
     public function update(Request $request, $id)
     {
       $validatedData = $request->validate([
            'date_time' => 'required',
        ]);
       $timerUpdate = CountdownTimer::find($id);
       $timerUpdate->title = $request->title;
       $timerUpdate->launch_date = $request->date_time;
       $timerUpdate->status = $request->timer_status;
       $timerUpdate->save();
       Session::flash('success','Timer Updated successfully');
       return redirect()->back();
     }
 
     //__category delete function is here__//
     public function destroy($id)
     {
        $deleteTimer=CountdownTimer::find($id);
        $deleteTimer->delete();
       return redirect()->route('timers.view');
     }
}
