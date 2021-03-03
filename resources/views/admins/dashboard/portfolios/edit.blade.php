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
                    </div>
                    <div class="row">
                        <div class="col-md-4 pl-3">
                            <div class="form-group">
                                <label for="">Upload Image</label>
                                <input type="file" name="image" multiple class="form-control">
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

                    <h4>Show</h4>
                    <hr>

                    <div class="mediaForm">
                    {{-- @foreach ($mediaTypes as $i => $type)   --}}
                    <div class="row">
                        <div class="col-md-12 pl-3">
                            <div class="form-group">
                                <label for="twitter" class="col-md-8">Service icon</label>
                                <select name="icon" id="" class="form-control">
                                    <option value="">Icons</option>
                                    <option value="0">Tech Service</option>
                                    <option value="1">Report service</option>
                                    <option value="2">Quick service</option>
                                    <option value="3">Multi Service</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    {{-- @endforeach --}}

                            
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

@section('scripts')
@endsection
<script>
    function x(id, i) {
        console.log(id)
        if (id == 'media_' + i) {
            checkbox = document.getElementById('media_' + i);
            if (checkbox.checked)
                item = document.getElementById('url_' + i).style.display = "inline";
            else
                item = document.getElementById('url_' + i).style.display = "none";
        }
    }

</script>
