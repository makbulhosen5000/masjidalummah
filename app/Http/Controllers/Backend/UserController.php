<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Auth;


class UserController extends Controller
{
    //view function is here......................................
    public function index()
    {
        $users = User::all();
        return view('backend.user.all-user', compact('users') );
    }

    //Create function is here......................................
    public function create()
    {
        return view('backend.user.create-user');
    }

    //Store function is here......................................
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'usertype' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|unique:users|max:255',
            'password' => 'required',
            'image' => 'required',

        ]);
       $userData=new User();
       $userData->usertype=$request->usertype;
       $userData->name=$request->name;
       $userData->phone=$request->phone;
       $userData->status=$request->status;
       $userData->is_approved=$request->is_approved;
       $userData->email=$request->email;
       $userData->password=bcrypt($request->password);
        if($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $newImage=time().'.'.$extension;
            $file->move('upload/user_images/',$newImage);
            $userData->image=$newImage;
        }else{
            return $request;
            $userData->image='';
        }
       $userData->save();
       Session::flash('success','User Created successfully');
       return redirect()->back();
    }

    public function show($id)
    {
        //
    }

    //Edit function is here......................................
    public function edit($id)
    {
        $data=User::find($id);
        return view('backend.user.edit-user',compact('data'));
    }

   //Update function is here......................................
    public function update(Request $request, $id)
    {

        $update=User::find($id);

        $update->usertype=$request->usertype;
        $update->name=$request->name;
        $update->phone=$request->phone;
        $update->status=$request->status;
        $update->is_approved=$request->is_approved;
        $update->email=$request->email;
        if($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $myImage=time().'.'.$extension;
            $file->move('upload/user_images/',$myImage);
            $update->image=$myImage;
        }
        $update->save();
        Session::flash('success','User Updated successfully');
       return redirect()->back();
    }

    //Delete function is here......................................
    public function destroy($id)
    {
        $data=User::find($id);
        $data->delete();
       return redirect()->route('users.all');
    }

    public function approve($id) {
        $user = User::findOrFail($id);
        $user->is_approved = true;
        $user->save();
        return redirect()->back()->with('success', 'User approved');
    }
    public function reject($id) {
        $user = User::findOrFail($id);
        $user->is_approved = false;
        $user->save();
        return redirect()->back()->with('success', 'User rejected');
    }
 
}
