

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
                <h4 class="card-title"> My Profile </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                     @include('includes.profile-form')
                </div>
              </div>
            </div>
          </div>
         
        </div>
      </div>


             

@endsection





@section('script')


@endsection


