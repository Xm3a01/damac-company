@extends('admins.dashboard.master')

@section('content')

    <td class="text-center">
        <a  href="{{route('teams.create')}}" class="btn btn-round btn-primary">Add team</a>
    </td>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title"> Team</h4>
        </div>
        <div class="card-body custom-table">
            <div class="table">
                <table class="table">
                    <thead class=" text-primary">
                        <tr>
                            <th>name</th>
                            <th>job title</th>
                            <th>description</th>
                            <th>Action </th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teams as $team)
                        <tr>
                            <td>{{$team->name}}</td>
                            <td>{{$team->job_title}}</td>
                            <td>{{ Str::words($value, $team->description, 10 , '') }}</td>
                            <td>
                                <form action="{{route('teams.destroy' , $team->id)}}" method="post">  
                                    @csrf
                                    @method('DELETE')
                                    <a  href="{{route('teams.edit' , $team->id)}}" class="btn btn-round btn-primary"><i
                                            class="nc-icon nc-settings"></i></a>
    
                                    <button   type="submit" class="btn btn-round btn-danger"><i
                                            class="nc-icon nc-simple-remove"></i></button>
                                </form>

                            </td>
                        </tr>
                            
                        @endforeach

                    </tbody>
                </table>
                {{$teams->links()}}
            </div>
        </div>


    </div>


    </div>

@stop
