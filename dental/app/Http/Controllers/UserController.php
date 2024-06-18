<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('client.request-appointment');
    }
    public function mainpage()
    {
        return view('client.homepage');
    }
    public function login()
    {
        return view('account.login');
    }
    public function register()
    {
        return view('account.register');
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function overview()
    {
        return view('admin.content.overview');
    }
    public function patients()
    {
        return view('admin.content.patients');
    }
}
