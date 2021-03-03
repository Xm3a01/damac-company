@extends('admins.dashboard.master')

@section('content')

    <td class="text-center">
        <a  href="{{route('statstics.create')}}" class="btn btn-round btn-primary">Add Skill</a>
    </td>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title"> All galleries</h4>
        </div>
        <div class="card-body custom-table">
            <div class="table">
                <table class="table">
                    <thead class=" text-primary">
                        <tr>
                            <th>name</th>
                            <th>persent</th>
                            <th>Action </th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skills as $skill)
                        <tr>
                            <td>{{$skill->name}}</td>
                            <td>{{$skill->percent}}%</td>
                            <td>
                                <form action="{{route('statstics.destroy' , $skill->id)}}" method="post">  
                                    @csrf
                                    @method('DELETE')
                                    <a  href="{{route('statstics.edit' , $skill->id)}}" class="btn btn-round btn-primary"><i
                                            class="nc-icon nc-settings"></i></a>
    
                                    <button   type="submit" class="btn btn-round btn-danger"><i
                                            class="nc-icon nc-simple-remove"></i></button>
                                </form>

                            </td>
                        </tr>
                            
                        @endforeach

                    </tbody>
                </table>
                {{-- {{$galleries->links()}} --}}
            </div>
        </div>


    </div>


    </div>

@stop
