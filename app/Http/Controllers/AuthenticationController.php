<?php

namespace App\Http\Controllers;
use App\Models\Register;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
   public function register(Request $request)
   {
//       return $request;
       Register::signUp($request);
       return back()->with('msg','User Registered Successfully');
   }
}
