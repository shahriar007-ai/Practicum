<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    public function showAdminLoginForm(){
       if(!auth()->check()){
            return view('admin.auth.login'); 
       }else{
           return redirect('/admin/dashboard');
       }
    }
    public function postAdminLogin(Request $request){
        $request->validate([
            // 'email' => 'required|string|email',
            'email' => 'required|string|email:rfc,dns',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if(Auth::user()->role == 2){
                Auth::logout();
                return redirect()->back()->with('error', 'You have entered invalid credentials');
            }else{
                return redirect()->route('admin.dashboard');
            }   
        }
        return redirect()->back()->with('error', 'You have entered invalid credentials');
    }
}
