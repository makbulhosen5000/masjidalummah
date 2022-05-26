<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Prayer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Session;

class PrayerTimeController extends Controller
{
     //index function is here_//
    public function index()
    {
        $showPrayerTime = Prayer::all();
       return view('backend.prayer.prayer-view',compact('showPrayerTime'));
    //   $showPrayerTime = Http::get('http://api.aladhan.com/v1/hijriCalendar?latitude=51.508515&longitude=-0.1254872&method=2&month=4&year=2022')->status();
    //    return view('backend.prayer.prayer-view',['showPrayerTime'=>$showPrayerTime]);
    }

     //create function is here_//
    public function create()
    {
    
        return view('backend.prayer.create-prayer');
    }

     //_store function is here_//
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'short_title' => ['required','max:255'],
            'long_title' => 'required',
            'date' => 'required',
            'jummah' => 'required',
            'fajr' => 'required',
            'sunrise' => 'required',
            'dhuhr' => 'required',
            'asr' => 'required',
            'sunset' => 'required',
            'maghrib' => 'required',
            'ishaa' => 'required',
        ]);
       $storePrayerTime=new Prayer();
       $storePrayerTime->short_title=$request->short_title;
       $storePrayerTime->long_title=$request->long_title;
       $storePrayerTime->date=$request->date;
       $storePrayerTime->jummah=$request->jummah;
       $storePrayerTime->fajr=$request->fajr;
       $storePrayerTime->sunrise=$request->sunrise;
       $storePrayerTime->dhuhr=$request->dhuhr;
       $storePrayerTime->asr=$request->asr;
       $storePrayerTime->sunset=$request->sunset;
       $storePrayerTime->maghrib=$request->maghrib;
       $storePrayerTime->ishaa=$request->ishaa;
       $storePrayerTime->save();
       Session::flash('success','Prayer Time Created Successfully');
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
        $editPrayerTime=Prayer::find($id);
        return view('backend.prayer.edit-prayer',compact('editPrayerTime'));
    }

    //update function is here_//
    public function update(Request $request, $id)
    {
        $updatePrayerTime=Prayer::find($id);
        $updatePrayerTime->short_title=$request->short_title;
        $updatePrayerTime->long_title=$request->long_title;
        $updatePrayerTime->date=$request->date;
        $updatePrayerTime->jummah=$request->jummah;
        $updatePrayerTime->sunrise=$request->sunrise;
        $updatePrayerTime->asr=$request->asr;
        $updatePrayerTime->dhuhr=$request->dhuhr;
        $updatePrayerTime->sunset=$request->sunset;
        $updatePrayerTime->maghrib=$request->maghrib;
        $updatePrayerTime->ishaa=$request->ishaa;
        $updatePrayerTime->save();
        Session::flash('success','Prayer Time Updated successfully');
       return redirect()->back();
    }


    //_delete function is here_//
    public function destroy($id)
    {
        $destroyPrayerTime=Prayer::find($id);
        $destroyPrayerTime->delete();
        return redirect()->route('prayers.view');
    }
}
