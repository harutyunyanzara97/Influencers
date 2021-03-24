<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect;
class CampaignController extends Controller
{
    public function index(Request $request)
    {
        $campaigns = Campaign::where('user_id', Auth::user()->getId())->get();
        return view('campaignsAndLists', compact('campaigns', $campaigns));
    }
    public function create(Request $request){
        $campaign = new Campaign();
        $categories = Category::all();
        return view('create-campaign',compact('campaign','categories'));
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
        echo '<script type="text/javascript">'
        , 'history.go(-2);'
        , '</script>';
    }
    public function statistics(){
        return view('statistics');
    }
}
