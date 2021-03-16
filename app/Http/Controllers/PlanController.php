<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use App\Models\Plan;
use Illuminate\Support\Facades\Auth;

class PlanController extends Controller
{

    public function index()
    {
        $plans = Plan::all();
        $cards=Card::where('user_id',Auth::id())->get();
        return view('plans.index', compact('plans','cards'));
    }
    public function show(Plan $plan, Request $request)
    {
        $cards=Card::where('user_id',Auth::id())->get();
        return view('plans.show', compact('plan','cards'));
    }
    public function billing(Request $request)
    {
        $cards=Card::where('user_id',Auth::id())->get();
        return view('billing_details',compact('cards'));
    }
}
