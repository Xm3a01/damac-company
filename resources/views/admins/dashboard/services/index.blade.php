@extends('admins.dashboard.master')

@section('content')

    <td class="text-center">
        <a  href="{{route('services.create')}}" class="btn btn-round btn-primary">Add Service</a>
    </td>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title"> All Events</h4>
        </div>
        <div class="card-body custom-table">
            <div class="table">
                <table class="table">
                    <thead class=" text-primary">
                        <tr>
                            {{-- <th>Icon</th> --}}
                            <th>Name</th>
                            <th>description</th>
                            <th>Action </th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                        <tr>
                            {{-- <td><img src="{{$trainer->image}}" alt="" height="40" width="40" class="rounded-full"></td> --}}
                            <td>{{$service->name}}</td>
                            <td>{{Str::limit($service->description , 80 , '')}}</td>
                            <td>
                                <form action="{{route('services.destroy' , $service->id)}}" method="post">  
                                    @csrf
                                    @method('DELETE')
                                    <a  href="{{route('services.edit' , $service->id)}}" class="btn btn-round btn-primary"><i
                                            class="nc-icon nc-settings"></i></a>
    
                                    <button   type="submit" class="btn btn-round btn-danger"><i
                                            class="nc-icon nc-simple-remove"></i></button>
                                </form>
                            </td>
                        </tr>
                            
                        @endforeach

                    </tbody>
                </table>
                {{$services->links()}}
            </div>
        </div>


    </div>


    </div>

@stop
