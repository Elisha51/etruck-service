<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class WebsiteController extends Controller
{
    public function index(){
        return view('web.pages.index');
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('admin.pages.index');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
       
    }

    public function loginPage(){
        if(Auth::check()){
            return view('admin.pages.index');
        }
        return view('admin.pages.login');
    }

    public function registerPage(){
        if(Auth::check()){
            return view('admin.pages.index');
        }
        return view('admin.pages.register');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('home')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function register(Request $request){
        $request->validate([
            'role' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'contact' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6'
        ]);


        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->contact = $request->contact;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect("home")->withSuccess('You have signed-up');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
