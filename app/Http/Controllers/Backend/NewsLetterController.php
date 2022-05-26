<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use App\Notifications\NewsNotify;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Session;

class NewsLetterController extends Controller
{
    //__Newsletter view function is here__//
    public function index()
    {
        $newsletter=Newsletter::latest()->get();
        // $catCount=Category::count();
        return view('backend.newsletter.subscriber-email-view', compact('newsletter'));
    }

     //__email store function is here__//
    public function SubscriberEmailStore(Request $request)
    {
       $validatedData = $request->validate([
           'email' => 'required|email|unique:newsletters',
       ]);
      $emailStore=new Newsletter();
      $emailStore->email=$request->email; 
      $emailStore->save();
      Session::flash('success','We got your mail successfully');
      return redirect()->back();
    }

    //__Newsletter delete function is here__//
    public function destroy($id)
    {
     $delete=Newsletter::findOrFail($id);
     $delete->delete();
     return redirect()->route('subscriber.email.view');
    }
}
