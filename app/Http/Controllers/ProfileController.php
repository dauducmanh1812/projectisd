<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // if (Auth::check())
        // {
        //     $user_id = Auth::user()->id;
        //     return view('user.profile.index')->with($user_id);
        // }
        // $arr['profile'] = User::all();
        // return view('user.profile.index')->with($arr);

        $user = Auth::user();
        return view('user.profile.index', compact('user'));
    }
    
    public function clientProfileIndex()
    {
        $user = Auth::user();
        return view('client.profile.index', compact('user'));
    }

    public function detail($id)
    {
        $profile = User::find($id);
        echo $profile->name;
    }

}
