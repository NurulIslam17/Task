<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function crud()
    {
        return view('crud.add');
    }

    public function manage()
    {
        return view('crud.manage');
    }
}
