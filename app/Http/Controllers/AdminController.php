<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminController extends Controller
{
   public function showusers()
   {
    $user = User::all();
    return view('admin.users.home' , compact('user'));
   }
   public function adduser()
   {
    return view('admin.users.adduser');
   }
   public function add_user(Request $request)
   {
    $user=new user;
    $user->name=$request->name;
    $user->email=$request->email;
    $user->password = Hash::make($request->password);
    $user->usertype=$request->usertype;
    $user->save();
    return redirect('users');
   }
   public function delete_user($id)
   {
    $user = User::find($id);
    $user->delete();
    return redirect()->back();
   }
   public function update_user($id)
   {
    $user = User::find($id);
    return view('admin.users.edituser',compact('user'));
   }
   public function edit_user(Request $request,$id)
   {
    $data=user::find($id);
    $data->name=$request->name;
    $data->email=$request->email;
    $data->password = Hash::make($request->password);
    $data->usertype=$request->usertype;
    $data->save();
    return redirect('users');

   }
   
}
