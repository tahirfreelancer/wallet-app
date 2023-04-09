<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plans;

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
        $plans = Plans::all();
        return view('accounts', [
            'title' => $title,
            'plans' => $plans
        ]);
    }
    public function about()
    {
        $title = 'About Us';
        return view('about',['title' => $title]);
    }
    public function plans()
    {
        $title = 'Our Plans';
        $plans = Plans::all();
        return view('plans', [
            'title' => $title,
            'plans' => $plans
        ]);
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
    public function myassets()
    {
        $title = 'My Assets';
        return view('myassets',['title' => $title]);
    }
}
