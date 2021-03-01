@extends('admins.dashboard.master')

@section('content')

    <div class="container-fluid">

        <div class="animated fadeIn">
            <div class="row">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-block">
                                <div class="col-md-5 m-x-auto pull-xs-none vamiddle">
                                    <div class="card">
                                        <div class="card-block p-a-2">

                                            <h1>تعديل صنف </h1>
                                            <form class="form-control"
                                                action="{{ route('categories.update', $category->id) }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="input-group m-b-1">

                                                    </span>
                                                    <input type="text" class="form-control" placeholder=" اسم الصنف "
                                                        name="name" value="{{ $category->name }}">
                                                </div>
                                                <div class="input-group m-b-1">

                                                    <input type="file" class="form-control " name="image">
                                                </div>
                                                <div class="input-group m-b-1">

                                                    </span>

                                                    <textarea class="form-control" name="description" id="" cols="30"
                                                        rows="10">{{ $category->description }}</textarea>
                                                </div>
                                                <div>
                                                    <button type="submit" class="btn btn-block btn-success">

                                                        تعديل <i class="fa fa-edit"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--/col-->
                            </div>
                            <!--/row-->
                        </div>
                    </div>
                    <!--/row-->


                    <!--/.row-->
                    <br />

                </div>
            </div>
        </div>
        <!--/.col-->
    </div>
    <!--/.row-->
    </div>

    </div>
@stop
