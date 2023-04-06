<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    public function lockscreen()
    {
        $title = 'Admin Lockscreen';
        return view('admin.lockscreen',['title' => $title]);
    }
    public function dashboard()
    {
        $title = 'Dashboard';
        return view('admin.dashboard',['title' => $title]);
    }
    public function users()
    {
        $title = 'Users';
        return view('admin.users',['title' => $title]);
    }
    public function plans()
    {
        $title = 'Plans';
        return view('admin.plans',['title' => $title]);
    }
    public function runing()
    {
        $title = 'Runing';
        return view('admin.runing',['title' => $title]);
    }
    public function withdraw()
    {
        $title = 'Withdraw';
        return view('admin.withdraw',['title' => $title]);
    }
    public function history()
    {
        $title = 'History';
        return view('admin.history',['title' => $title]);
    }
}
