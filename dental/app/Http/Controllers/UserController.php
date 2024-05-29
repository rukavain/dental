<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('request-appointment');
    }
    public function mainpage()
    {
        return view('homepage');
    }
}
