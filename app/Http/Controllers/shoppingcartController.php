<?php

namespace App\Http\Controllers;

use App\at;
use Illuminate\Http\Request;
use session;
// use Illuminate\Support\Facades\Session;

class shoppingcartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function cart(Request $request,$id){
        $art = at::findorFail($id);
         $cart  = session()->get('cart');
         $cart[$id] = [
             'art_id' => $art->id,
             'name'=>$art->name,
             'price' => $art->price,
             'image' => $art->image,
             'quantity' => 1,
         ];
          session()->put('cart',$cart);
         return redirect()->route('mycart');
              
    }
   public function cart_remove(Request $request,$catid){
       $art = at::findorFail($catid);
       $arts = session('cart');
   
    foreach($arts as $key =>$value){
     
        if($value['name'] == $art->name){
            unset($arts[$key]);
            session()->put('cart',$arts);
              return redirect()->route('mycart')->with('success','art deleted from cart');
        }
    }
       

      
      }
   
    public function my_cart(){
        $auth_id = auth()->user()->id;
        if(auth()->user()->usertype == 'user'){
          return view('users.cart');
        }else{
            return redirect()->route('home')->with('error','not allowed to view cart page');
        }
      

    }
    //

    // public function mycart(){

        
    //     $auth_id = auth()->user()->id;
       
    //     if(auth()->user()->usertype == 'user'){
    //       return view('users.mycart');
    //     }else{
    //         return redirect()->route('home')->with('error','not allowed to view cart page');
    //     }
    // }





}
