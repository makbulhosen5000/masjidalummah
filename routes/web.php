<?php

use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\BankinfoController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\CountDownTimerController;
use App\Http\Controllers\Backend\LogoController;
use App\Http\Controllers\Backend\NewseventController;
use App\Http\Controllers\Backend\PrayerTimeController;
use App\Http\Controllers\Backend\DonateController;
use App\Http\Controllers\Backend\Email\UserEmailController;
use App\Http\Controllers\Backend\EventTimeController;
use App\Http\Controllers\Backend\NewsLetterController;
use App\Http\Controllers\Backend\Phylosophy\CommunityController;
use App\Http\Controllers\Backend\Phylosophy\KnowladgeController;
use App\Http\Controllers\Backend\Phylosophy\PhylosophyServiceController;
use App\Http\Controllers\Backend\Phylosophy\SpiritualityController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\RecentNews\RecentNewsFourController;
use App\Http\Controllers\Backend\RecentNews\RecentNewsOneController;
use App\Http\Controllers\Backend\RecentNews\RecentNewsThreeController;
use App\Http\Controllers\Backend\RecentNews\RecentNewsTwoController;
use App\Http\Controllers\Backend\SchoolManagementController;
use App\Http\Controllers\Backend\Services\ServiceOneController;
use App\Http\Controllers\Backend\Services\ServiceThreeController;
use App\Http\Controllers\Backend\Services\ServiceTwoController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\UserApprovalController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\UserPendingController;
use App\Http\Controllers\Backend\WhatsappController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\HomeController;
use App\Models\Prayer;
use App\Models\SchoolManagement;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Notifications\EmailNotification;
use Illuminate\Support\Facades\Notification;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can  web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/send-notification', function () {
//    $users = User::all();
//    foreach($users as $user){
//       Notification::send($users, new EmailNotification());
//    }

// });

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
// email notification to user
Route::post('send',[HomeController::class,'SendNotification']);

//all header(frontend page)routes start from here
Route::get('/',[FrontendController::class,'index']);
//__donate route for fronend page__//
Route::get('/donate',[FrontendController::class,'donate']);
Route::post('/donate-store',[FrontendController::class,'DonateStore'])->name('donate.store');
//__services route for frontend page__//
Route::get('/service/one',[FrontendController::class,'ServiceOne'])->name('service.one');
Route::get('/service/two',[FrontendController::class,'ServiceTwo'])->name('service.two');
Route::get('/service/three',[FrontendController::class,'ServiceThree'])->name('service.three');
//__news route for frontend page__//
Route::get('/news',[FrontendController::class,'News'])->name('news');
Route::get('/news/one',[FrontendController::class,'NewsOne'])->name('news.one');
Route::get('/news/two',[FrontendController::class,'NewsTwo'])->name('news.two');
Route::get('/news/three',[FrontendController::class,'NewsThree'])->name('news.three');
Route::get('/news/four',[FrontendController::class,'NewsFour'])->name('news.four');
//__Philosophy route for frontend page__//
Route::get('/philosophy',[FrontendController::class,'Philosophy'])->name('philosophy');
Route::get('aboutUs',[FrontendController::class,'AboutUs'])->name('aboutUs');
Route::get('contactUs',[FrontendController::class,'contactUs'])->name('contactUs');
Route::get('newsevent.details/{id}',[FrontendController::class,'NewsEventDetails'])->name('newsevent.details');
Route::post('Contact/store',[FrontendController::class,'ContactUsStore'])->name('contact.store');

//__Admin Dashboard__//
Route::group(['middleware' => ['test']], function () {
Route::prefix('users')->group(function () {
Route::get('/all',[UserController::class,'index'])->name('users.all');
Route::get('/create',[UserController::class,'create'])->name('users.create');
Route::post('/store',[UserController::class,'store'])->name('users.store');
Route::get('/edit/{id}',[UserController::class,'edit'])->name('users.edit');
Route::post('/update/{id}',[UserController::class,'update'])->name('users.update');
Route::get('/destroy/{id}',[UserController::class,'destroy'])->name('users.destroy');
Route::get('/status/approve/{id}',[UserController::class,'approve'])->name('user.status.approve');
Route::get('/status/reject/{id}',[UserController::class,'reject'])->name('user.status.reject');
// email notification to users
Route::get('/send/email',[HomeController::class,'SendEmail'])->name('users.send.email');

});

// Profile Routes start from here
Route::prefix('profile')->group(function () {
Route::get('/user',[UserController::class,'index'])->name('profile.user');
Route::post('/store',[UserController::class,'store'])->name('profile.store');
Route::get('/edit',[UserController::class,'edit'])->name('profile.edit');
Route::post('/update',[UserController::class,'update'])->name('profile.update');
Route::get('/change-password',[ProfileController::class,'ChangePassword'])->name('change.password');
Route::post('/update-password',[ProfileController::class,'UpdatePassword'])->name('update.password');

});



//Logo routes start from here
Route::prefix('logos')->group(function () {
Route::get('/view',[LogoController::class,'index'])->name('logos.view');
Route::get('/create',[LogoController::class,'create'])->name('logos.create');
Route::post('/store',[LogoController::class,'store'])->name('logos.store');
Route::get('/edit/{id}',[LogoController::class,'edit'])->name('logos.edit');
Route::post('/update/{id}',[LogoController::class,'update'])->name('logos.update');
Route::get('/destroy/{id}',[LogoController::class,'destroy'])->name('logos.destroy');
});

//Sliders routes start from here
Route::prefix('sliders')->group(function () {
Route::get('/view',[SliderController::class,'index'])->name('sliders.view');
Route::get('/create',[SliderController::class,'create'])->name('sliders.create');
Route::post('/store',[SliderController::class,'store'])->name('sliders.store');
Route::get('/edit/{id}',[SliderController::class,'edit'])->name('sliders.edit');
Route::post('/update/{id}',[SliderController::class,'update'])->name('sliders.update');
Route::get('/destroy/{id}',[SliderController::class,'destroy'])->name('sliders.destroy');
});

//event time routes start from here
Route::prefix('eventimes')->group(function () {
Route::get('/view',[EventTimeController::class,'index'])->name('eventimes.view');
Route::get('/create',[EventTimeController::class,'create'])->name('eventimes.create');
Route::post('/store',[EventTimeController::class,'store'])->name('eventimes.store');
Route::get('/edit/{id}',[EventTimeController::class,'edit'])->name('eventimes.edit');
Route::post('/update/{id}',[EventTimeController::class,'update'])->name('eventimes.update');
Route::get('/destroy/{id}',[EventTimeController::class,'destroy'])->name('eventimes.destroy');
});

//Count Down Timers routes start from here__//
Route::prefix('timers')->group(function () {
Route::get('/view',[CountDownTimerController::class,'index'])->name('timers.view');
Route::get('/create',[CountDownTimerController::class,'create'])->name('timers.create');
Route::post('/store',[CountDownTimerController::class,'store'])->name('timers.store');
Route::get('/edit/{id}',[CountDownTimerController::class,'edit'])->name('timers.edit');
Route::post('/update/{id}',[CountDownTimerController::class,'update'])->name('timers.update');
Route::get('/destroy/{id}',[CountDownTimerController::class,'destroy'])->name('timers.destroy');
});




//Newsevent routes start from here
Route::prefix('newsevents')->group(function () {
Route::get('/view',[NewseventController::class,'index'])->name('newsevents.view');
Route::get('/create',[NewseventController::class,'create'])->name('newsevents.create');
Route::post('/store',[NewseventController::class,'store'])->name('newsevents.store');
Route::get('/edit/{id}',[NewseventController::class,'edit'])->name('newsevents.edit');
Route::post('/update/{id}',[NewseventController::class,'update'])->name('newsevents.update');
Route::get('/destroy/{id}',[NewseventController::class,'destroy'])->name('newsevents.destroy');
});

//__Philosophy Manegement start__//

Route::prefix('phylosophy')->group(function () {
//__ knowladge routes __//
Route::get('/knowladge/view',[KnowladgeController::class,'index'])->name('knowladges.view');
Route::get('/knowladge/create',[KnowladgeController::class,'create'])->name('knowladges.create');
Route::post('/knowladge/store',[KnowladgeController::class,'store'])->name('knowladges.store');
Route::get('/knowladge/edit/{id}',[KnowladgeController::class,'edit'])->name('knowladges.edit');
Route::post('/knowladge/update/{id}',[KnowladgeController::class,'update'])->name('knowladges.update');
Route::get('/knowladge/destroy/{id}',[KnowladgeController::class,'destroy'])->name('knowladges.destroy');

//__ spirituality routes __//
Route::get('/spirituality/view',[SpiritualityController::class,'index'])->name('spiritualities.view');
Route::get('/spirituality/create',[SpiritualityController::class,'create'])->name('spiritualities.create');
Route::post('/spirituality/store',[SpiritualityController::class,'store'])->name('spiritualities.store');
Route::get('/spirituality/edit/{id}',[SpiritualityController::class,'edit'])->name('spiritualities.edit');
Route::post('/spirituality/update/{id}',[SpiritualityController::class,'update'])->name('spiritualities.update');
Route::get('/spirituality/destroy/{id}',[SpiritualityController::class,'destroy'])->name('spiritualities.destroy');
//__ community routes __//
Route::get('/community/view',[CommunityController::class,'index'])->name('communities.view');
Route::get('/community/create',[CommunityController::class,'create'])->name('communities.create');
Route::post('/community/store',[CommunityController::class,'store'])->name('communities.store');
Route::get('/community/edit/{id}',[CommunityController::class,'edit'])->name('communities.edit');
Route::post('/community/update/{id}',[CommunityController::class,'update'])->name('communities.update');
Route::get('/community/destroy/{id}',[CommunityController::class,'destroy'])->name('communities.destroy');

//__ phylosophy service routes __//
Route::get('/phylosophy/services/view',[PhylosophyServiceController::class,'index'])->name('phylosophy.services.view');
Route::get('/phylosophy/service/create',[PhylosophyServiceController::class,'create'])->name('phylosophy.services.create');
Route::post('/phylosophy/service/store',[PhylosophyServiceController::class,'store'])->name('phylosophy.services.store');
Route::get('/phylosophy/service/edit/{id}',[PhylosophyServiceController::class,'edit'])->name('phylosophy.services.edit');
Route::post('/phylosophy/service/update/{id}',[PhylosophyServiceController::class,'update'])->name('phylosophy.services.update');
Route::get('/phylosophy/service/destroy/{id}',[PhylosophyServiceController::class,'destroy'])->name('phylosophy.services.destroy');

});

//__Philosophy Manegement route end__//

//__Services Manegement start__//

Route::prefix('services')->group(function () {
//__ servise one routes __//
Route::get('/service/one/view',[ServiceOneController::class,'index'])->name('servises.one.view');
Route::get('/service/one/create',[ServiceOneController::class,'create'])->name('servises.one.create');
Route::post('/service/one/store',[ServiceOneController::class,'store'])->name('servises.one.store');
Route::get('/service/one/edit/{id}',[ServiceOneController::class,'edit'])->name('servises.one.edit');
Route::post('/service/one/update/{id}',[ServiceOneController::class,'update'])->name('servises.one.update');
Route::get('/destroy/{id}',[ServiceOneController::class,'destroy'])->name('servises.one.destroy');
//__service tow routes__//
Route::get('/service/two/view',[ServiceTwoController::class,'index'])->name('servises.two.view');
Route::get('/service/two/create',[ServiceTwoController::class,'create'])->name('servises.two.create');
Route::post('/service/two/store',[ServiceTwoController::class,'store'])->name('servises.two.store');
Route::get('/service/two/edit/{id}',[ServiceTwoController::class,'edit'])->name('servises.two.edit');
Route::post('/service/two/update/{id}',[ServiceTwoController::class,'update'])->name('servises.two.update');
Route::get('/service/two/destroy/{id}',[ServiceTwoController::class,'destroy'])->name('servises.two.destroy');
//__service three routes__//
Route::get('/service/three/view',[ServiceThreeController::class,'index'])->name('servises.three.view');
Route::get('/service/three/create',[ServiceThreeController::class,'create'])->name('servises.three.create');
Route::post('/service/three/store',[ServiceThreeController::class,'store'])->name('servises.three.store');
Route::get('/service/three/edit/{id}',[ServiceThreeController::class,'edit'])->name('servises.three.edit');
Route::post('/service/three/update/{id}',[ServiceThreeController::class,'update'])->name('servises.three.update');
Route::get('/service/three/destroy/{id}',[ServiceThreeController::class,'destroy'])->name('servises.three.destroy');
});
//__Services Manegement route end__//

   //School Management route//
Route::prefix('schools')->group(function () {
Route::get('/view',[SchoolManagementController::class,'index'])->name('schools.view');
Route::get('/create',[SchoolManagementController::class,'create'])->name('schools.create');
Route::post('/store',[SchoolManagementController::class,'store'])->name('schools.store');
Route::get('/edit/{id}',[SchoolManagementController::class,'edit'])->name('schools.edit');
Route::post('/update/{id}',[SchoolManagementController::class,'update'])->name('schools.update');
Route::get('/destroy/{id}',[SchoolManagementController::class,'destroy'])->name('schools.destroy');
});
    

//Recent New Manegement start__//

Route::prefix('news')->group(function () {
//__recent news one routes __//
Route::get('/news/one/view',[RecentNewsOneController::class,'index'])->name('news.one.view');
Route::get('/news/one/create',[RecentNewsOneController::class,'create'])->name('news.one.create');
Route::post('/news/one/store',[RecentNewsOneController::class,'store'])->name('news.one.store');
Route::get('/news/one/edit/{id}',[RecentNewsOneController::class,'edit'])->name('news.one.edit');
Route::post('/news/one/update/{id}',[RecentNewsOneController::class,'update'])->name('news.one.update');
Route::get('/news/one/destroy/{id}',[RecentNewsOneController::class,'destroy'])->name('news.one.destroy');
//__recent news tow routes__//
Route::get('/news/two/view',[RecentNewsTwoController::class,'index'])->name('news.two.view');
Route::get('/news/two/create',[RecentNewsTwoController::class,'create'])->name('news.two.create');
Route::post('/news/two/store',[RecentNewsTwoController::class,'store'])->name('news.two.store');
Route::get('/news/two/edit/{id}',[RecentNewsTwoController::class,'edit'])->name('news.two.edit');
Route::post('/news/two/update/{id}',[RecentNewsTwoController::class,'update'])->name('news.two.update');
Route::get('/news/two/destroy/{id}',[RecentNewsTwoController::class,'destroy'])->name('news.two.destroy');
//__recent news three routes__//
Route::get('/news/three/view',[RecentNewsThreeController::class,'index'])->name('news.three.view');
Route::get('/news/three/create',[RecentNewsThreeController::class,'create'])->name('news.three.create');
Route::post('/news/three/store',[RecentNewsThreeController::class,'store'])->name('news.three.store');
Route::get('/news/three/edit/{id}',[RecentNewsThreeController::class,'edit'])->name('news.three.edit');
Route::post('/news/three/update/{id}',[RecentNewsThreeController::class,'update'])->name('news.three.update');
Route::get('/news/three/destroy/{id}',[RecentNewsThreeController::class,'destroy'])->name('news.three.destroy');
    //__recent news three routes__//
Route::get('/news/four/view',[RecentNewsFourController::class,'index'])->name('news.four.view');
Route::get('/news/four/create',[RecentNewsFourController::class,'create'])->name('news.four.create');
Route::post('/news/four/store',[RecentNewsFourController::class,'store'])->name('news.four.store');
Route::get('/news/four/edit/{id}',[RecentNewsFourController::class,'edit'])->name('news.four.edit');
Route::post('/news/four/update/{id}',[RecentNewsFourController::class,'update'])->name('news.four.update');
Route::get('/news/four/destroy/{id}',[RecentNewsFourController::class,'destroy'])->name('news.four.destroy');
});
    
   //contacts route//
Route::prefix('contacts')->group(function () {
Route::get('/view',[ContactController::class,'index'])->name('contacts.view');
Route::get('/create',[ContactController::class,'create'])->name('contacts.create');
Route::post('/store',[ContactController::class,'store'])->name('contacts.store');
Route::get('/edit/{id}',[ContactController::class,'edit'])->name('contacts.edit');
Route::post('/update/{id}',[ContactController::class,'update'])->name('contacts.update');
Route::get('/destroy/{id}',[ContactController::class,'destroy'])->name('contacts.destroy');
// contact us routue for backend
Route::get('/contact/us/view',[ContactController::class,'ContactUsView'])->name('contact.us.view');
Route::get('/contact/us/destroy/{id}',[ContactController::class,'ContactUsDestrory'])->name('contact.us.destroy');
});

//about routes start from here
Route::prefix('about')->group(function () {
Route::get('/view',[AboutController::class,'index'])->name('about.view');
Route::get('/create',[AboutController::class,'create'])->name('about.create');
Route::post('/store',[AboutController::class,'store'])->name('about.store');
Route::get('/edit/{id}',[AboutController::class,'edit'])->name('about.edit');
Route::post('/update/{id}',[AboutController::class,'update'])->name('about.update');
Route::get('/destroy/{id}',[AboutController::class,'destroy'])->name('about.destroy');
});
//prayer time routes start from here
Route::prefix('prayers')->group(function () {
Route::get('/view',[PrayerTimeController::class,'index'])->name('prayers.view');
Route::get('/create',[PrayerTimeController::class,'create'])->name('prayers.create');
Route::post('/store',[PrayerTimeController::class,'store'])->name('prayers.store');
Route::get('/edit/{id}',[PrayerTimeController::class,'edit'])->name('prayers.edit');
Route::post('/update/{id}',[PrayerTimeController::class,'update'])->name('prayers.update');
Route::get('/destroy/{id}',[PrayerTimeController::class,'destroy'])->name('prayers.destroy');
});

//donates routes start from here
Route::prefix('donates')->group(function () {
Route::get('/view',[DonateController::class,'index'])->name('donates.view');
Route::get('/create',[DonateController::class,'create'])->name('donates.create');
Route::post('/store',[DonateController::class,'store'])->name('donates.store');
Route::get('/edit/{id}',[DonateController::class,'edit'])->name('donates.edit');
Route::post('/update/{id}',[DonateController::class,'update'])->name('donates.update');
Route::get('/destroy/{id}',[DonateController::class,'destroy'])->name('donates.destroy');
//__Bank information route__//
Route::get('/bank-view',[BankinfoController::class,'BankShow'])->name('banks.view');
Route::post('/store',[BankinfoController::class,'BankStore'])->name('banks.store');
});
//whatsapp routes start from here
Route::prefix('whatsapp')->group(function () {
Route::get('/view',[WhatsappController::class,'index'])->name('whatsapp.view');
Route::get('/create',[WhatsappController::class,'create'])->name('whatsapp.create');
Route::post('/store',[WhatsappController::class,'store'])->name('whatsapp.store');
Route::get('/edit/{id}',[WhatsappController::class,'edit'])->name('whatsapp.edit');
Route::post('/update/{id}',[WhatsappController::class,'update'])->name('whatsapp.update');
Route::get('/destroy/{id}',[WhatsappController::class,'destroy'])->name('whatsapp.destroy');
});


//User Email Subscriber route for NewsLetter
Route::prefix('newsletter')->group(function () {
Route::get('/subscriber/view',[NewsLetterController::class,'index'])->name('subscriber.email.view');
Route::get('/subscriber/destroy/{id}',[NewsLetterController::class,'destroy'])->name('subscriber.email.destroy');
});
});
Route::post('/subscriber-store',[NewsLetterController::class,'SubscriberEmailStore'])->name('subscriber.email.store');
// group middleware End here
