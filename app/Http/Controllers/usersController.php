<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class usersController extends Controller
{
    //
    public function profile($id){
        $profile = User::findorFail($id);

        if(auth()->user()->usertype == 'artist'){
            return view('profile.artist',compact('profile'));
        }elseif(auth()->user()->usertype == 'user'){
            return view('profile.user',compact('profile'));
        }elseif(auth()->user()->usertype == 'admin'){
            return view('profile.admin',compact('profile'));
        }

           
       
        // return $profile;
       
    }
}
