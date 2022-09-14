<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        return view('web.pages.index');
    }

    public function dashboard()
    {
        return view('admin.pages.index');
    }

    public function loginPage(){
        return view('admin.pages.login');
    }

    public function registerPage(){
        return view('admin.pages.register');
    }
}
