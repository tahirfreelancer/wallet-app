<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        $title = 'Home';
        return view('home',['title' => $title]);
    }
    public function accounts()
    {
        $title = 'Register/Login';
        return view('accounts',['title' => $title]);
    }
    public function about()
    {
        $title = 'About Us';
        return view('about',['title' => $title]);
    }
    public function plans()
    {
        $title = 'Plans';
        return view('plans',['title' => $title]);
    }
    public function faq()
    {
        $title = 'FAQ';
        return view('faq',['title' => $title]);
    }
    public function contact()
    {
        $title = 'Contact Us';
        return view('contact',['title' => $title]);
    }
   
}
