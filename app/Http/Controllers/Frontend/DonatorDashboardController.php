<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Logo;
use App\Models\User;
use Illuminate\Http\Request;
use Session;

class DonatorDashboardController extends Controller
{
   
   public function DonatorDashboard(){
      return view('frontend.singlePages.donator-dashboard');
   }
   
    
}
