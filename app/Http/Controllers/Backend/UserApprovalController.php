<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserApprovalController extends Controller
{
    //User Pending function is here......................................
    public function UserPending()
    {
        $users=User::where('is_approved',false)->get();
        return view('backend.user.pending-user',compact('users') );
    }
 
     //Pending Approve function is here......................................
     public function PendingApprove($id)
     {
         $userApprove = User::find($id);
 
         if($userApprove->is_approved==false)
         {
             $userApprove->is_approved=true;
             $userApprove->save();
         }
         else{
             Session::flash('success','This User already Approved');
         }
         return redirect()->back();
     }
}
