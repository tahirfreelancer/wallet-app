<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Plans;

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
        $users=  User::all();
        return view('admin.users', [
            'title' => $title,
            'users' => $users
        ]);
    }
    public function dasboardplans()
    {
        $title = 'Plans';
        $plans = Plans::all();
        return view('admin.plans', [
            'title' => $title,
            'plans' => $plans
        ]);
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
    public function SavePlan(Request $request){
        if($request->id==''){
            Plans::create([
                'name' => $request->plan_name,
                'amount' => $request->amount,
                'gram' => $request->grams,
                'estimated_profit' => $request->estimated_profit,
                'daily_perecntage' => $request->percentage,
                'bonus' =>$request->bonus,
                'community_bonus' => $request->community_bonus
            ]);
            return redirect()->route('dasboardplans')
                ->withSuccess('Plan Created successfully!');
        }else{
            $plans = Plans::find($request->id);
            $plans->name = $request->input('plan_name');
            $plans->amount = $request->input('amount');
            $plans->gram = $request->input('grams');
            $plans->estimated_profit = $request->input('estimated_profit');
            $plans->daily_perecntage = $request->input('percentage');
            $plans->bonus = $request->input('bonus');
            $plans->community_bonus = $request->input('community_bonus');
            $plans->save();
            return redirect()->route('dasboardplans')
            ->withSuccess('Plan Updated successfully!');
        }
        
    }
    public function delete_plan()
    {
        $plans = Plans::findOrFail($_REQUEST['plan_id']); // Find the user by ID
        $plans->delete(); // Delete the user
        return redirect()->route('dasboardplans')
            ->with('success', 'Plan has been deleted successfully.'); // Redirect to the users index page with a success message
    }
    public function delete_user()
    {
        $user = User::findOrFail($_REQUEST['user_id']); // Find the user by ID
        $user->delete(); // Delete the user
        return redirect()->route('users')
            ->with('success', 'User account has been deleted successfully.'); // Redirect to the users index page with a success message
    }
}
