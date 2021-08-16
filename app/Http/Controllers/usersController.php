<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class usersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //shows user profile
    public function profile($id){
        $profile = User::findorFail($id);

        if(auth()->user()->usertype == 'artist'){
            return view('profile.artist',compact('profile'));
        }elseif(auth()->user()->usertype == 'user'){
            return view('profile.user',compact('profile'));
        }elseif(auth()->user()->usertype == 'admin'){
            return view('profile.admin',compact('profile'));
        }

       
    }
    // displays all users from db
    public function users(){
        if(auth()->user()->usertype == 'admin'){
            $users = User::where('usertype','=','user')->get();
            return view('arts.user.index',compact('users'));
            
        }else{
            return '404';
        }
   
    }
       // displays all artists from db
    public function artists(){
        if(auth()->user()->usertype == 'admin'){
            $artists = User::where('usertype','=','artist')->get();
            return view('arts.artist.index',compact('artists'));
            
        }else{
            return '404';
        }
   
        
    }

    public function updateprofile(Request $request){
        $user_id = auth()->user()->id;
        

        $user = User::find($user_id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();

        return back()->with('success','update done successfully');
    
  
        
    }
}
