@extends('admins.dashboard.master')

@section('content')

    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Add Skill</h5>
            </div>
            <div class="card-body">
                <form action="{{route('statstics.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label> Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name">
                            </div>
                        </div>
                        <div class="col-md-6 pl-2">
                            <div class="form-group">
                                <label for="image">Percent</label>
                                <input type="text" class="form-control" placeholder="%" name="percent">

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
