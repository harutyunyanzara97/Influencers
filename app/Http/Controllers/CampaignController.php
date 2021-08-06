<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
class CampaignController extends Controller
{
    public function index(Request $request)
    {
        $campaigns = Campaign::with('category')->where('user_id', Auth::id())->get();
        if($campaigns) {
            return view('campaignsAndLists', compact('campaigns', $campaigns));
        }else {
            return view('campaignsAndLists');

        }
    }
    public function create(Request $request){
        $campaign = new Campaign();
        $categories = Category::all();
        return view('create-campaign',compact('campaign','categories'));
    }
    public function store(Request $request){
        $campaign=$request->validate([
            'title' => 'required|string',
            'details' => 'required|string',
            'category' =>'required',
            'hashtags' => 'required|string',
            'per_post_rate' => 'required',
        ]);
        if($campaign) {
            $newCampaign = new Campaign();
            $newCampaign->user_id= Auth::id();
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

        echo '<script type="text/javascript">'
        , 'history.go(-2);'
        , '</script>';
    }
    public function statistics($id){
        $campaign=Campaign::findOrFail($id);
        return view('statistics',compact('campaign'));
    }

    public function favorite(){
        return view('lists');
    }
    public function delete($id) {
        Campaign::where("id", $id)->delete();

        return Redirect::back();
    }
}
