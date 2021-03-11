@extends('admins.dashboard.master')

@section('content')

    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Add Service</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name">
                            </div>
                        </div>

                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>Target/Companies</label>
                                <input type="text" class="form-control" placeholder="Target/Companies" name="target">
                            </div>
                        </div>

                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label style="color: blue; mouse:pointer">Attache Images</label>
                                <input type="file" class="form-control-file" placeholder="Traget/Companies" name="images[]" multiple>
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

                    <h4>Show</h4>
                    <hr>

                    <div class="mediaForm">
                    {{-- @foreach ($mediaTypes as $i => $type)   --}}
                    <div class="row">
                        <div class="col-md-12 pl-3">
                            <div class="form-group">
                                <label for="twitter" class="col-md-8">Service icon</label>
                                <select name="icon" id="" class="form-control">
                                    @foreach ($serviceType as $index => $service)         
                                      <option value="{{$index == 0 ? '': $index}}">{{$service }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    {{-- @endforeach --}}

                            
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

@section('scripts')
@endsection
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

