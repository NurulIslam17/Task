<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected static $register;
    use HasFactory;


    public static function signUp($request){
        self::$register = new Register();

        self::$register->name       = $request->name;
        self::$register->email      = $request->email;
        self::$register->password   = $request->password;

        self::$register->save();

    }



}
