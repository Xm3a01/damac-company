@extends('admins.dashboard.master')

@section('content')

    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">edit Employee</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('teams.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 pl-3">
                            <div class="form-group">
                                <label for="">Job title</label>
                                <input type="text" class="form-control" placeholder="Job title" name="job_title">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 pl-3">
                            <div class="form-group">
                                <label for="">Upload Image <button class="btn btn-primary">attche</button></label>
                                <input type="file" class="form-control" placeholder="File" name="image">
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-12 pl-3">

                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control textarea" name="description"></textarea>
                            </div>
                        </div>
                    </div>

                    <h4>Meida Links</h4>
                    <hr>

                    <div class="mediaForm">
                    @foreach ($mediaTypes as $i => $type)   
                    <div class="row">
                        <div class="col-md-4 pl-3">
                            <div class="form-group row">
                                <input type="checkbox" {{$i == 0 ? 'checked hidden' : ''}} class="form-control col-md-4" id="media_{{$i}}" onchange="event.preventDefault(); x(this.id , {{$i}})" id=""> 
                                <label for="twitter" class="col-md-8">{{$type}}</label>
                            </div>
                        </div>

                        <div class="col-md-8 pl-5">
                            <div class="form-group" id="url_{{$i}}" style="display: none">
                                <input type="text" value="{{$i == 0 ? 'value' : ''}}" name="link[]" id="" class="form-control" placeholder="Media Url"> 
                            </div>
                        </div>
                    </div>
                    @endforeach

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

{{-- @section('scripts') --}}
<script>
    function x(id , i){
        if(id == 'media_'+i) {
            checkbox = document.getElementById('media_'+i);
            if(checkbox.checked)
              item = document.getElementById('url_'+i).style.display = "inline";
            else 
              item = document.getElementById('url_'+i).style.display = "none";
        }
    }
    </script>
{{-- @endsection --}}

