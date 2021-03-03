@extends('admins.dashboard.master')

@section('content')

    <td class="text-center">
        <a  href="{{route('portfolios.create')}}" class="btn btn-round btn-primary">Add portfolio</a>
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
                            <th>Action </th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($portfolios as $portfolio)
                        {{$portfolio->getMedia('portfolio')}}
                        <tr>
                            <td><img src="{{$portfolio->getFirstMediaUrl('portfolios')}}" alt="" height="40" width="40" class="rounded-full"></td>
                            <td>{{$portfolio->name}}</td>
                            <td>
                                <form action="{{route('portfolios.destroy' , $portfolio->id)}}" method="post">  
                                    @csrf
                                    @method('DELETE')
                                    <a  href="{{route('portfolios.edit' , $portfolio->id)}}" class="btn btn-round btn-primary"><i
                                            class="nc-icon nc-settings"></i></a>
    
                                    <button   type="submit" class="btn btn-round btn-danger"><i
                                            class="nc-icon nc-simple-remove"></i></button>
                                </form>
                            </td>
                        </tr>
                            
                        @endforeach

                    </tbody>
                </table>
                {{$portfolios->links()}}
            </div>
        </div>


    </div>


    </div>

@stop
