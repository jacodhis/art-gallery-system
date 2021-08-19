
@extends('layouts.user')


@section('title')
user |show  {{$art->name}}
@endsection



@section('content')


<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
               <div class="d-flex align-items-baseline justify-content-between">
                 <h5 class="title">{{$art->name}}</h5>
                 <a href="{{route('all-Arts')}}">view Arts</a>

               </div>
               </div>
              

               <div class="row">
                 <div class="col-lg-7 pl-4 pb-4">
                    <a href="/art/{{$art->id}}">
                    
                        <img src="{{asset('/storage/art/'.$art->image)}}"
                            alt="Image" class="img-fluid"></a>
                 </div>

               <div class="col-lg-5 pl-8 pb-8">
               <h3 class="title">{{$art->name}}</h3>
               
                 
                            <p><span>Offered by: <a href="#">{{$art->user->name}}</a></span><br>
                                <span> Art Price:<a href="#" class="time"> {{$art->price}}</a></span></p>
                            <span class="icon"><i class="fa fa-clock-o"></i>date Posted: <a href="#">{{$art->created_at}}</a></span><br>
                            @if(auth()->user()->usertype == 'user')
                            <form action="/shopping-cart/{{$art->id}}"  method="POST"> 
                               {{ csrf_field() }}
                              <button type="submit" class="btn btn-default" name="add-to-cart">add to Cart</button>
                              </form>

                              <!-- <form action="/managecart.php"  method="POST">
                              {{ csrf_field() }}
                                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                                <input type="hidden" name="item-name" value="{{$art->name}}">
                                <input type="hidden" class="hidden" name="price" value="{{$art->price}}">
                              <button type="submit" class="btn btn-default" name="add-to-cart">add to Cart</button>
                              </form> -->
                            @endif
                            
                           
              </div>
               </div>


               

           
            

             
            
            </div>
          </div>
        </div>
      </div>

@endsection



@section('script')

@endsection