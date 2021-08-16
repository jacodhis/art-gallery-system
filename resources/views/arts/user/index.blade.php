

@extends('layouts.admin')


@section('title')
admin Dashboard
@endsection



@section('content')

<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> all users</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">

                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">phone</th>
                    </tr>
                </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                       
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                                    

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


