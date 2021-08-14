@extends('layouts.artist')

@section('title')
  Artist Dashboard
@endsection



@section('content')
<?php  $user_id = Auth()->User()->id;?>

<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
               
                 <div class="d-flex justify-content-between align-items-baseline">
                   <h4 class="card-title">create art here</H4>
                   <div><a href="/arts/{{$user_id}}">view My arts</a></div>
               </div>

              </div>
              <div class="card-body">
                <div class="table-responsive">
                   @include('includes.upload-art-form')
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


