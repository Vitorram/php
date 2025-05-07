<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');      // resources/views/home.blade.php
    }

    public function about()
    {
        return view('about');     // resources/views/about.blade.php
    }

    public function contact()
    {
        return view('contact');   // resources/views/contact.blade.php
    }
}
