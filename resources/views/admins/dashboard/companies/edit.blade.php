@extends('admins.dashboard.master')
@section('content')
    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Edit Course</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('companies.update' , $company->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>Course Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name" value="{{$company->name}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 pl-2">
                            <div class="form-group">
                                <label>About</label>
                                <textarea rows="20" cols="20" class="form-control" placeholder="About" name="about">{{$company->about}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>01 About</label>
                                <input type="text" class="form-control" placeholder="About Point 01" name="about_section_1" value="{{$company->about_section_1}}">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>02 about</label>
                                <input type="text" class="form-control" placeholder="About Point 02" name="about_section_2" value="{{$company->about_section_2}}">

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>03 About</label>
                                <input type="text" class="form-control" placeholder="About Point 03" name="about_section_3" value="{{$company->about_section_3}}">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Why us title</label>
                                <input type="text" class="form-control" placeholder="title" name="why_us_title" value="{{$company->why_us_title}}">

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 pr-2">
                            <div class="form-group">
                                <label>Why us</label>
                                <textarea rows="100" class="form-control" placeholder="About" name="why_us">{{$company->about}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>01 why us</label>
                                <input type="text" class="form-control" placeholder="why us Point 01" name="why_us_section_1" value="{{$company->why_us_section_1}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>02 why us</label>
                                <input type="text" class="form-control" placeholder="why us Point 02" name="why_us_section_2" value="{{$company->why_us_section_2}}">
                            </div>
                        </div>

                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>03 why us</label>
                                <input type="text" class="form-control" placeholder="why us Point 03" name="why_us_section_3" value="{{$company->why_us_section_3}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round">Save Change</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
