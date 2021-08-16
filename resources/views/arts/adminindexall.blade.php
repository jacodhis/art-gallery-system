@extends('layouts.admin')

@section('title')
  admin all-arts page
@endsection



@section('content')


<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                
                  <div class="d-flex justify-content-between align-items-baseline">
                   <!-- <h4 class="card-title">All arts</H4> -->
                   <div>
                    <!-- <a href="/createArt">Add art</a>| -->
                     <!-- <a href="{{route('all-Arts')}}">others arts</a> -->
                  </div>
               </div>

              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <div class="title pb-3">All Arts</div> 
                  
                  <div class="row">
                  @foreach($allarts as $art)
                    <a href="/art/{{$art->id}}"><div class="col-md-3 col-lg-3 col-sm-12">
                   <img src="{{asset('/storage/art/'.$art->image)}}"
                    alt="Image" width="50px" height="50px"></a>
                   <p>  {{$art->name}}</p>
                      </div>
                    @endforeach
                </div>
            

           
                       
                </div>
              </div>
            </div>
          </div>
      
        </div>
      </div>


@endsection





@section('script')


@endsection


