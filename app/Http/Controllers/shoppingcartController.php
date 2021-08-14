<?php

namespace App\Http\Controllers;

use App\art;
use Illuminate\Http\Request;

class shoppingcartController extends Controller
{
    //
    public function cart(Request $request,$id){
        $art = art::findorFail($id);

       
              
    }





}
