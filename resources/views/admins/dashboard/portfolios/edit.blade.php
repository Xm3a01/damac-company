@extends('admins.dashboard.master')

@section('content')

    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Edit Service</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('portfolios.update' , $portfolio->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name" value="{{$portfolio->name}}">
                            </div>
                        </div>

                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>Client</label>
                                <input type="text" class="form-control" placeholder="Client" name="client" value="{{$portfolio->client}}">
                            </div>
                        </div>

                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>Date</label>
                                <input type="date" class="form-control" placeholder="Date" name="date" value="{{$portfolio->date}}">
                            </div>
                        </div>

                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>Url/Location</label>
                                <input type="text" class="form-control" placeholder="Url" name="url" value="{{$portfolio->url}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 pl-3">
                            <div class="form-group">
                                <label for="">Upload Image</label>
                                <input type="file" name="images[]" multiple class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-12 pl-3">

                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control textarea" name="description">{{$portfolio->description}}</textarea>
                            </div>
                        </div>
                    </div>           
                    </div>
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



@stop
