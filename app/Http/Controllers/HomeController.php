<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\SendEmailNotification;
use Illuminate\Http\Request;
use Notification;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('backend.layouts.admin-home');
    }

    public function SendEmail()
    {
        return view('backend.email.send-email');
    }

    public function SendNotification(Request $request)
    {
        $user = User::all();

        $details=[

            'greeting'=>$request->greeting,

            'body'=>$request->body,

            'actiontext'=>$request->actiontext,

            'actionurl'=>$request->url,

            'lastline'=>$request->lastline,
        ];

        Notification::send($user, new SendEmailNotification($details));
        
        Session::flash('success','Email Send Successfully');
        return redirect()->back();

    }

    
}