<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Category;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
class CampaignController extends Controller
{
    public function index(Request $request)
    {
        $campaign=Campaign::where('id','1')->first();
        $campaigns = Campaign::with('category')->where('user_id', Auth::id())->get();
        return view('campaignsAndLists', compact('campaign','campaigns', $campaigns));
    }
    public function create(Request $request){
        $categories = Category::all();
        return view('create-campaign',compact('categories'));
    }
    public function store(Request $request){
    $newCampaign = new Campaign();
    $newCampaign->user_id= Auth::user()->getId();
    $category=$request->category;
        if($category) {
            $category = implode(',', $category);
        }
        $request['category'] = $category;
        $newCampaign->category_id=$category;
        $newCampaign->fill($request->all());
        $newCampaign->save();
        if($request->hasfile('photo'))
        {

            foreach($request->file('photo') as $image)
            {
                $name=time().$image->getClientOriginalName();
                $image->move(public_path().'/img/', $name);
                $newCampaign->images = $name;
                $newCampaign->save();

            }
        }

    }
    public function statistics(){
        return view('statistics');
    }

}
