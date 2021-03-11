@extends('admins.dashboard.master')

@section('content')

    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Edit Service</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('services.update' , $service->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name" value="{{$service->name}}">
                            </div>
                        </div>

                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>Target/Companies</label>
                                <input type="text" class="form-control" placeholder="Target/Companies" name="target" value="{{$service->target}}">
                            </div>
                        </div>

                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>Attache Images</label>
                                <input type="text" class="form-control" placeholder="Traget/Companies" name="images[]" multiple value="{{$service->images}}">
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">

                        <div class="col-md-12 pl-3">

                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control textarea" name="description">{{$service->description}}</textarea>
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