<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $home = Home::all();
        return view('index')
        ->with('title','Beranda')
        ->with('Home','$home');
    }
}
