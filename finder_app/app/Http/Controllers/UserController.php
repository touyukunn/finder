<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    
    public function index()
    {   

        $user = User::where('id','<>',\Auth::user()->id)->first();
        return view('pages.user.index',[
            'user'=>$user
        ]);
    }
}
