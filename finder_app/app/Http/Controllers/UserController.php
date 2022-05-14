<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Swipe;
class UserController extends Controller
{
    
    public function index()
    {   
        //すでにswipeしたユーザを省いて抽出
        $swipedUserIds = Swipe::where('from_user_id',\Auth::user()->id)->get()->pluck('to_user_id');

        $user = User::where('id','<>',\Auth::user()->id)->whereNotIn('id',$swipedUserIds)->first();
        return view('pages.user.index',[
            'user'=>$user
        ]);
    }
}
