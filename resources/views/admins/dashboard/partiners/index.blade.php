@extends('admins.dashboard.master')

@section('content')
    <td class="text-center">
        <a  href="{{route('partiners.create')}}" class="btn btn-round btn-primary">Add Partiner</a>
    </td>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title"> All Partiner</h4>
        </div>
        <div class="card-body custom-table">
            <div class="table">
                <table class="table">
                    <thead class=" text-primary">
                        <tr>
                            <th>Logo</th>
                            <th>Name</th>
                            <th>Action </th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($partiners as $partiner)
                        <tr>
                            <td><img src="{{ $partiner->image ? $partiner->image  : asset('assets/images/noImage.png') }}" alt="Image" height="45" width="45"></td>
                            <td>{{$partiner->name}}</td>
                            <td>
                                <form action="{{route('partiners.destroy' , $partiner->id)}}" method="post">  
                                    @csrf
                                    @method('DELETE')
                                    <a  href="{{route('partiners.edit' , $partiner->id)}}" class="btn btn-round btn-primary"><i
                                            class="nc-icon nc-settings"></i></a>
    
                                    <button   type="submit" class="btn btn-round btn-danger"><i
                                            class="nc-icon nc-simple-remove"></i></button>
                                </form>
                            </td>
                        </tr>
                            
                        @endforeach

                    </tbody>
                </table>
                {{-- {{$events->links()}} --}}
            </div>
        </div>


    </div>


    </div>

@stop
