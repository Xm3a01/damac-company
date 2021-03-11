@extends('admins.dashboard.master')

@section('content')


    <div class="card">
        <div class="card-header">
            <h4 class="card-title"> Profile</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 offset-4 form-group">Name : {{$user->name}}</div>
                <div class="col-md-4 offset-4 form-group">Email : {{$user->email}}</div>
                <div class="col-md-4 offset-4 form-group">Password : ********</div>
            </div>
        </div>

        <a href="{{route('profile.show')}}" class="btn btn-info">Edit</a>

    </div>


    </div>

@stop
