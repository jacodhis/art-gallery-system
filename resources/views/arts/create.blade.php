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
      
        </div>
      </div>


@endsection





@section('script')


@endsection


