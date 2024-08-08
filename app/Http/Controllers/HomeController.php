<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // //
    // // public function welcome(){
    // //     return ('welcome');
    // // }
    // public function welcome(){
    //     return view('welcome');
    // }
    // public function index(){
    //     return view('home');
    // }
    // // public function view(){
    // //     return view("home");
    // // }
    public function welcome()
    {
        return view('welcome');
    }

    public function index()
    {
        return view('home');
    }
}
