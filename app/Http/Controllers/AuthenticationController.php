<?php

namespace App\Http\Controllers;
use App\Models\Register;
use Session;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{

    //    Registration of the users
   public function register(Request $request)
   {
       Register::signUp($request);
       return back()->with('msg','User Registered Successfully');
   }

   //    Sign Up the users
   public function signUp(Request $request)
   {
      $authData = Register::where('email',$request->email)->first();

      if($authData)
      {

          if(password_verify($request->password,$authData->password))
          {
              Session::put('user_id',$authData->id);
              Session::put('user_name',$authData->name);
              return redirect('/');

          }else{
              return back()->with('message','Invalid Password');
          }

      }
      else{
          return back()->with('message','Invalid Email');
      }
   }

   //Logout
    public function logout()
    {
        Session::forget('user_id');
        Session::forget('user_name');
        return redirect('/');
    }
}
