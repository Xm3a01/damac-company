@extends('admins.dashboard.master')
@section('content')
    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Company Info</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 p-2">
                            <div class="form-group">
                                <label>About</label>
                                <textarea rows="10" class="form-control" placeholder="About" name="about">{{$company->about ?? ""}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12 p-2">
                            <div class="form-group">
                                <label>Vission</label>
                                <textarea rows="10" class="form-control" placeholder="Vission" name="vission">{{$company->vission ?? ""}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12 p-2">
                            <div class="form-group">
                                <label>Goal</label>
                                <textarea rows="10" class="form-control" placeholder="Goal" name="goal">{{$company->goal ?? ""}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round">create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
