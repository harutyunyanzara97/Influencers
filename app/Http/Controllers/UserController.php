<?php

namespace App\Http\Controllers;

use App\Models\Tag_category;
use App\Models\User;
use Facebook\Facebook;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Rules\MatchOldPassword;
use Instagram\Instagram;

class UserController extends Controller
{
    public function profile()
    {
        $tag_categories=Tag_category::all();
        return view('account',compact('tag_categories'));
    }

    public function storeProfile(Request $request)
    {
        $user = User::where('id', Auth::user()->getId())->first();
        $request->validate(['name' => 'required', 'email' => 'required|email',]);
        $categories = $request->category;
        if ($categories) {
            $categories = implode(',', $categories);
        }
        $request['category'] = $categories;
        $user->fill($request->all());
        $user->save();
        if ($request->hasfile('photo')) {
            foreach ($request->file('photo') as $image) {
                $name = time() . $image->getClientOriginalName();
                $image->move(public_path() . '/img/', $name);
                $user->avatar_url = $name;
                $user->save();
            }
        }
        echo '<script type="text/javascript">'
        , 'history.go(-1);'
        , '</script>';
    }

    public function showChangePasswordForm()
    {
        return view('changePassword');
    }

    public function changePassword(Request $request)
    {

        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);
        echo '<script type="text/javascript">'
        , 'history.go(-2);'
        , '</script>';
    }

    public function contact()
    {
        return view('contact');
    }

    public function instagram()
    {
        $inst = new Instagram('2883480005030754', '89f7a8b00e4622c8d00d7db316b05781', 'http://localhost:8000/callbackInstagram', 'basic', '');
    }

    public function influencer()
    {
        //todo check the type is adverticer or influencer
        return view('influence-dashboard');
    }
    public function store(Request $request)
    {
        $user = new User();
        $valid=$request->validate(['name' => 'required|min:4|string', 'email' => 'required|email|unique:users', 'password' => 'required|min:6','phone'=>'numeric' ]);
        if ($valid->fails()) {
            return redirect()->back()
                ->withErrors($valid)
                ->withInput();
        }
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->type='influencer';
        $user->save();
        $redirect = redirect('/login');
        return $redirect->with(['message' => __('voyager::generic.successfully_updated') . " User", 'alert-type' => 'success', ]);
    }
    public function search()
    {
        $categories = Tag_category::all();
        return view('search-influencer', compact('categories'));


    }
}

