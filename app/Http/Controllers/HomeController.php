<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller{
    public function index(){
        return view('welcome');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/')->with('success', 'You have been logged out!');
    }
}
