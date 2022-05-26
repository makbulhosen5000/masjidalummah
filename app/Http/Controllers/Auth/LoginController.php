<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;


class LoginController extends Controller
{
    // public function login(Request $request){

    //     $this->validate($request,[
    //         'email' => 'required',
    //         'password' => 'required',
    //     ]);
    //     $email = $request->email;
    //     $password = $request->password;
    //     $valid_data = User::where('email',$email)->first();
    //     $password_check = password_verify($password, @$valid_data->password);
    //     if($password_check == false){
    //         return redirect()->back()->with('message','Email or Password does not match');
    //     }
    //     if($valid_data->status == '0'){
    //         return redirect()->back()->with('message','Sorry ! your are not verified yet');
    //     }
    //     if(Auth::attempt(['email' => $email, 'password' => $password])){
    //         return redirect()->route('login');
    //     }
    // }

    use AuthenticatesUsers;


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
