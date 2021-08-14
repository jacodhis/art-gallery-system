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
          <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title"> Table on Plain Background</h4>
                <p class="category"> Here is a subtitle for this table</p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad vero nulla laudantium maxime consequuntur. Quis,
                   maxime iure? Reprehenderit laboriosam dolore ea nam in repellat doloribus, accusantium quod qui cum deleniti!
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


@endsection





@section('script')


@endsection


