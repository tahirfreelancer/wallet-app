<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Plans;

class Clients extends Controller
{
    public function clients_dashboard()
    {
        $title = 'Dashboard';
        if(auth()->user()->name!='admin'){
            $details = User::join('plans', 'users.plan_id', '=', 'plans.id')
                 ->where('users.id', '=', auth()->user()['id'])
                ->select('users.*', 'plans.*')
                ->get();
        }else{
            $details = User::join('plans', 'users.plan_id', '=', 'plans.id')
           ->select('users.*', 'plans.*')
           ->get();
        }
                return view('admin.dashboard', [
                    'title' => $title,
                    'details' => $details
                ]);
    }
    public function withdrawal_request()
    {
        $title = 'Dashboard';
        $details = User::join('plans', 'users.plan_id', '=', 'plans.id')
                 ->where('users.id', '=', auth()->user()['id'])
                ->select('users.*', 'plans.*')
                ->get();
                return view('admin.dashboard', [
                    'title' => $title,
                    'details' => $details
                ]);
    }
    public function withdrawal_history()
    {
        $title = 'Dashboard';
        if(auth()->name!='admin'){
            $details = User::join('plans', 'users.plan_id', '=', 'plans.id')
                ->where('users.id', '=', auth()->user()['id'])
                ->select('users.*', 'plans.*')
                ->get();
        }else{
            $details = User::join('plans', 'users.plan_id', '=', 'plans.id')
            ->select('users.*', 'plans.*')
            ->get();
        }
                return view('admin.dashboard', [
                    'title' => $title,
                    'details' => $details
                ]);
    }
}
