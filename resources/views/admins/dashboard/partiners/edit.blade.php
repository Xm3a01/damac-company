@extends('admins.dashboard.master')

@section('content')

    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Edit Partiner</h5>
            </div>
            <div class="card-body">
                <form action="{{route('partiners.update' , $partiner->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <@method('PUT')
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name" value="{{$partiner->name}}">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Partiner Logo <span class="bg-blue-200">Attche Logo</span> </label>
                                <input type="file" class="form-control" placeholder="logo" name="logo">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@stop
