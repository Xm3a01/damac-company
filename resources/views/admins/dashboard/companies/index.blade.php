@extends('admins.dashboard.master')

@section('content')

    <td class="text-center">
        <a href="{{ route('services.create') }}" class="btn btn-round btn-primary">Add Service</a>
    </td>
    <td class="text-center">
        <a href="{{ route('partiners.create') }}" class="btn btn-round btn-primary">Add Partiner</a>
    </td>
    <td class="text-center">
        <a href="{{ route('statstics.create') }}" class="btn btn-round btn-primary">Add Skill</a>
    </td>
    <td class="text-center">
        <a href="{{ route('teams.create') }}" class="btn btn-round btn-primary">Add Team</a>
    </td>
    <td class="text-center">
        <a href="{{ route('portfolios.create') }}" class="btn btn-round btn-primary">Add Portfolio</a>
    </td>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Company</h4>
        </div>
        <div class="card-body custom-table">
            <div class="table">
                <table class="table">
                    <thead class=" text-primary">
                        <tr>
                            <th>image</th>
                            <th>name</th>
                            <th>about</th>
                            <th>Why us</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tbody>

                            <tr>
                                <td> <img src="{{ $company->image ? $company->image  : asset('assets/images/noImage.png') }}" alt="Image" height="45" width="45"></td>
                                <td>{{ $company->name }}</td>
                                <td>{{ Str::limit($company->about, 40) }}</td>
                                <td>{{ Str::limit($company->why_us, 40) }}</td>

                                <td>
                                    {{-- <form action="{{ route('companies.destroy', $company->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE') --}}

                                        <a title="Edit" href="{{ route('companies.edit', $company->id) }}"
                                            class="btn btn-round btn-primary"><i class="nc-icon nc-settings"></i></a>
                                        {{-- <button title="Delete" type="submit" class="btn btn-round btn-danger"><i
                                                class="nc-icon nc-simple-remove"></i></button> --}}
                                    {{-- </form> --}}

                                </td>
                            </tr>

                    </tbody>
                </table>
            </div>
        </div>


    </div>

@stop
