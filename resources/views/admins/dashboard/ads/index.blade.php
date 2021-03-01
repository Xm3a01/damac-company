@extends('admins.dashboard.master')

@section('content')

    <div class="container-fluid">

        <div class="animated fadeIn">
            <div class="row">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <a class="nav-link " href="{{ route('ads.create') }}"><button class="btn btn-primary"> +
                                        اضافة </button></a>

                                <i class="fa fa-align-justify"></i> كل الاعلانات
                            </div>
                            <div class="card-block">
                                <table class="table table-bordered table-striped table-condensed">
                                    <thead>
                                        <tr>
                                            <th>رقم لاعلان</th>
                                            <th>عنوان لاعلان</th>
                                            <th>الوصف</th>
                                            <th>الصورة</th>
                                            <th>العمليات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ads as $ad)
                                            <tr>
                                                <td>{{ $ad->id }}</td>
                                                <td>{{ $ad->title }}</td>
                                                <td>{{ Str::limit($ad->description, 40) }}</td>
                                                <td><img src="{{ $ad->image }}" height="40" width="40" alt=""
                                                        style="border-radius: 50%"></td>
                                                <td>
                                                    <form action="{{ route('ads.destroy', $ad->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a style="color:white" class="nav-link btn  btn-info"
                                                            href="{{ route('ads.edit', $ad->id) }}"><i
                                                                class="fa fa-edit"></i></a>
                                                        <button class="btn btn-danger nav-link" type="submit"><i
                                                                class="fa fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    {{ $ads->links() }}
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
@endsection
