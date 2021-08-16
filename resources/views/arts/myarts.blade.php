@extends('layouts.artist')

@section('title')
  Artist Dashboard
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
                   <h4 class="card-title">My art art</H4>
                   <div>
                    <a href="/createArt">Add art</a>|
                     <a href="{{route('all-Arts')}}">others arts</a>
                  </div>
               </div>

              </div>
              <div class="card-body">
                <div class="table-responsive">

                <div class="row">
                  @foreach($arts as $art)
                    <div class="col-md-3 col-lg-3 col-sm-12">
                     <a href="/art/{{$art->id}}"> <img src="{{asset('/storage/art/'.$art->image)}}"
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


