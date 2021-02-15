<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;

class PlanController extends Controller
{

    public function index()
    {
        $plans = Plan::all();
        return view('plans.index', compact('plans'));
    }
    public function show(Plan $plan, Request $request)
    {
        return view('plans.show', compact('plan'));
    }
    public function billing(Request $request)
    {
        return view('billing_details');
    }
}
