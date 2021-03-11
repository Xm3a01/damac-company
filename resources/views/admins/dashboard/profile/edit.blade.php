@extends('admins.dashboard.master')

@section('content')
    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">edit Employee</h5>
            </div>
            <div class="card-body">

                <form class="form-control" action="{{ route('profile.store', $user->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name"
                                    value="{{ $user->name }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 pl-3">
                            <div class="form-group">
                                <label for="">New password</label>
                                <input type="password" class="form-control" placeholder="New Password" name="password"
                                    value="*******">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 pl-3">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" placeholder="Email" name="Email" value="{{$user->email}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round">Save Change</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
