<?php

namespace App\Http\Controllers;

use App\art;
use App\User;
use Illuminate\Http\Request;

class artsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index(){
       
       $auth_id = auth()->user()->id;
       if(auth()->user()->usertype == 'artist'){
        $arts = art::where('user_id', '!=', $auth_id)->orderBy('created_at','DESC')->get();
         return view('arts.index',compact('arts'));
       }elseif(auth()->user()->usertype == 'user'){
           $allarts = art::orderBy('created_at','DESC')->get();
               return view('arts.indexall',compact('allarts'));
       }
       elseif(auth()->user()->usertype == 'admin'){
        $allarts = art::orderBy('created_at','DESC')->get();
        return view('arts.adminindexall',compact('allarts'));
       }

    }
//my arts
    public function arts($id){
        $user = User::findorFail($id);
         $arts = art::where('user_id','=',$user->id)->orderBy('created_at','DESC')->get();
         if($arts){
             return view('arts.myarts',compact('arts'));
         }else{
             return '404';
         }
        
    }
    //artists to create an art
    public function create(){
       if(auth()->user()->usertype  == 'artist'){
        return view('arts.create');
       }else{
           return redirect()->route('home')->with('error','not allowed to create an Art');
       }
       
       
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
]);
        //

         if ($request->hasFile('art')) {
            $filenamewithext = $request->file('art')->getClientOriginalName();
            $filename = pathinfo($filenamewithext, PATHINFO_FILENAME);
            $ext = $request->file('art')->getClientOriginalExtension();
            $filenametostore = $filename . '_' . time() . '.' . $ext;
            $path = $request->file('art')->storeAs('public/art', $filenametostore);
        } else {
            $filenametostore = 'noimage.jpg';
        }

           $art = new art;
                    $art->image = $filenametostore; 
                    $art->name = $request->input('name');
                    $art->description = $request->input('description');
                    $art->price= $request->input('price');
                    $art->user_id= auth()->user()->id;
           $art->save();
           return redirect()->back()->with('success','art Added successfully');
    }

    //show specific art

    public function show($id){
      
        $art = art::findorFail($id);
        if(auth()->user()->usertype == 'artist'){
            return view('arts.artist.show',['art'=>$art]);
           }elseif(auth()->user()->usertype == 'user'){ 
            return view('arts.user.show',['art'=>$art]);
           }
           elseif(auth()->user()->usertype == 'admin'){
            return view('arts.admin.show',['art'=>$art]);
           }
        // return $art;
       
    }



}
