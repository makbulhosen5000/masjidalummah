<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Logo;
use App\Models\Slider;
use App\Models\Contact;
use App\Models\Newsevent;
use App\Models\Service;
use App\Models\About;
use App\Models\ContactUs;
use App\Models\CountDownTimer;
use App\Models\Donate;
use App\Models\EventTime;
use App\Models\Phylosophy\Community;
use App\Models\Phylosophy\Knowladge;
use App\Models\Phylosophy\PhylosophyService;
use App\Models\Phylosophy\Spirituality;
use App\Models\Prayer;
use App\Models\RecentNews\NewsFour;
use App\Models\RecentNews\NewsOne;
use App\Models\RecentNews\NewsThree;
use App\Models\RecentNews\NewsTwo;
use App\Models\SchoolManagement;
use App\Models\Services\ServiceOne;
use App\Models\Services\ServiceThree;
use App\Models\Services\ServiceTwo;
use App\Models\User;
use App\Models\Whatsapp;
use Mail;



class FrontendController extends Controller
{
    //all header function is here
    public function index()
    {
        $data['whatsapps']=Whatsapp::first();
        $data['timers']=CountDownTimer::first();
        $data['school']=SchoolManagement::first();
        $data['knowledge']=Knowladge::all();
        $data['spirituality']=Spirituality::all();
        $data['community']=Community::all();
        $data['phylosophyService']=PhylosophyService::all();
        $data['newsOne']=NewsOne::all();
        $data['newsTwo']=NewsTwo::all();
        $data['newsThree']=NewsThree::all();
        $data['newsFour']=NewsFour::all();
        $data['evenTimes']=EventTime::all();
        $data['prayers']=Prayer::all();
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['contacts']=Contact::all();
        $data['abouts']=About::first();
        $data['serviceOne']=ServiceOne::all();
        $data['serviceTwo']=ServiceTwo::all();
        $data['serviceThree']=ServiceThree::all();
        $data['newsevent']=Newsevent::orderBy('id','desc')->get();
        // return $data['sliders'];
        return view('frontend.layouts.home',$data);
    }
    //__ About Us Function__ //
    public function AboutUs()
    {
        $data['whatsapps']=Whatsapp::first();
        $data['prayers']=Prayer::all();
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['contacts']=Contact::all();
        $data['about_us']=About::first();
        return view('frontend.singlePages.aboutUs',$data);
    }
       //__ Contact Us Function__ //
    public function ContactUs(){
        $data['whatsapps']=Whatsapp::first();
        $data['prayers']=Prayer::all();
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['contacts']=Contact::all();
        return view('frontend.singlePages.contactUs',$data);
    }
       //__ Contact Us Store Function__ //
    public function ContactUsStore(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);
       $storeData=new ContactUs();
       $storeData->name=$request->name;
       $storeData->phone=$request->phone;
       $storeData->email=$request->email;
       $storeData->massage=$request->massage;
       $storeData->save();
       Session::flash('success','Massage Send Successfully');
       return redirect()->back();
       }
    //__ NewsEventDetails  Function__ //
   public function NewsEventDetails($id){
    $data['whatsapps']=Whatsapp::first();
      $data['prayers']=Prayer::all();
      $data['logo']=Logo::first();
      $data['sliders']=Slider::all();
      $data['contacts']=Contact::all();
      $data['newsevent']=Newsevent::find($id);
      return view('frontend.singlePages.newsevent-details',$data);
   }

   //__ ServiceOne Function__//
   public function ServiceOne(){
    $data['whatsapps']=Whatsapp::first();
    $data['serviceOne']=ServiceOne::all();
    $data['contacts']=Contact::all();
    $data['abouts']=About::first();
    $data['logo']=Logo::first();
    return view('frontend.singlePages.services.service-one',$data);
    }
    //__ ServiceTwo Function__//
   public function ServiceTwo(){
    $data['whatsapps']=Whatsapp::first();
    $data['serviceTwo']=ServiceTwo::all();
    $data['contacts']=Contact::all();
    $data['abouts']=About::first();
    $data['logo']=Logo::first();
    return view('frontend.singlePages.services.service-two',$data);
    }
    //__ ServiceThree Function__//
   public function ServiceThree(){
    $data['whatsapps']=Whatsapp::first();
    $data['serviceThree']=ServiceThree::all();
    $data['contacts']=Contact::all();
    $data['abouts']=About::first();
    $data['logo']=Logo::first();
    return view('frontend.singlePages.services.service-three',$data);
    }
  //__ News Function__//
  public function News(){
    $data['whatsapps']=Whatsapp::first();
    $data['newsOne']=NewsOne::all();
    $data['newsTwo']=NewsTwo::all();
    $data['newsTwo']=NewsTwo::all();
    $data['newsThree']=NewsThree::all();
    $data['newsFour']=NewsFour::all();
    $data['contacts']=Contact::all();
    $data['abouts']=About::first();
    $data['logo']=Logo::first();
    return view('frontend.singlePages.news.news',$data);
    }
    //__ NewsOne Function__//
   public function NewsOne(){
    $data['whatsapps']=Whatsapp::first();
    $data['newsOne']=NewsOne::all();
    $data['contacts']=Contact::all();
    $data['abouts']=About::first();
    $data['logo']=Logo::first();
    return view('frontend.singlePages.news.news-one',$data);
    }
        //__ NewsOne Function__//
   public function NewsTwo(){
    $data['whatsapps']=Whatsapp::first();
    $data['newsTwo']=NewsTwo::all();
    $data['contacts']=Contact::all();
    $data['abouts']=About::first();
    $data['logo']=Logo::first();
    return view('frontend.singlePages.news.news-two',$data);
    }
         //__ NewsThree Function__//
   public function NewsThree(){
    $data['whatsapps']=Whatsapp::first();
    $data['newsThree']=NewsThree::all();
    $data['contacts']=Contact::all();
    $data['abouts']=About::first();
    $data['logo']=Logo::first();
    return view('frontend.singlePages.news.news-three',$data);
    }
            //__ NewsFour Function__//
   public function NewsFour(){
    $data['whatsapps']=Whatsapp::first();
    $data['newsFour']=NewsFour::all();
    $data['contacts']=Contact::all();
    $data['abouts']=About::first();
    $data['logo']=Logo::first();
    return view('frontend.singlePages.news.news-four',$data);
    }
    
    //__ Philosophy Function__//
    public function Philosophy(){
    $data['contacts']=Contact::all();
    $data['knowledge']=Knowladge::all();
    $data['spirituality']=Spirituality::all();
    $data['community']=Community::all();
    $data['phylosophyService']=PhylosophyService::all();
    $data['whatsapps']=Whatsapp::first();
    $data['logo']=Logo::first();
    return view('frontend.singlePages.philosophy',$data);
    }

   //_ Donate function_//
   public function donate()
   {
    $data['whatsapps']=Whatsapp::first();
    $data['contacts']=Contact::all();
    $data['prayers']=Prayer::all();
    $data['logo']=Logo::first();
    $data['sliders']=Slider::all();
    return view('frontend.singlePages.donate-from',$data);
   }
    //_ Donate Store function_//
   public function  DonateStore(Request $request)
   {
      
    $validatedData = $request->validate([
        'age' => 'required',
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
   return redirect('login')->with('message',"Registration Done Successfully");      
   }

  
   
   

    


}
