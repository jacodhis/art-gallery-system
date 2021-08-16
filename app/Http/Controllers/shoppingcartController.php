<?php

namespace App\Http\Controllers;

use App\art;
use Illuminate\Http\Request;

class shoppingcartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function cart(Request $request,$id){
        $art = art::findorFail($id);

       
              
    }
    public function mycart(){
        $auth_id = auth()->user()->id;
        if(auth()->user()->usertype == 'user'){
          return view('users.mycart');
        }else{
            return redirect()->route('home')->with('error','not allowed to view cart page');
        }
    }





}
