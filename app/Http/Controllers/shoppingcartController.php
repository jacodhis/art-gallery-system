<?php

namespace App\Http\Controllers;

use App\art;
use Illuminate\Http\Request;
// use session;
use Illuminate\Support\Facades\Session;

class shoppingcartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function cart(Request $request,$id){
        $art = art::findorFail($id);
    //  return $art;
         $cart  = session()->get('cart');
        //  dd($cart);

         $cart[$id] = [
             'art_id' => $art->id,
             'name'=>$art->name,
             'price' => $art->price,
             'image' => $art->image,
             'quantity' => 1,
         ];
        //  session_abort();
          session()->put('cart',$cart);
        //  dd($add);
         return redirect()->route('mycart');
              
    }
   public function cart_remove(Request $request,$catid){
    //  return $catid;
    // $sessions = $request->session()->all();
    // dd($sessions);
    // $session = $request->session()->catid;
    // dd($session);

    
    // foreach($sessions as $session =>$art){
        // print_r($art);
    // }
    // $value = $request->session()->pull('key', 'default');
    
    $arts = session('cart');
    // dd($arts);
    
        foreach($arts as $key => $art){
            if($art['art_id'] == $catid){
                // echo $art['art_id'];
                $request->session()->pull($art['art_id'],$catid);              
            }
        }
        // session()->put('cart',$arts);
        print_r($arts);

        // $request->session()->push('cart',$arts); 
        // return $arts;
        // return view('users.cart');
        // return redirect()->back()->with('success','art deleted from cart');
     
     
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

    public function mycart(){

        
        $auth_id = auth()->user()->id;
       
        if(auth()->user()->usertype == 'user'){
          return view('users.mycart');
        }else{
            return redirect()->route('home')->with('error','not allowed to view cart page');
        }
    }





}
