@extends('dashboard.layout.layout')

@section('content')

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="row align-items-center">
                                            <div class="col-md-8">
                                                <h4 class="page-title m-0">لیست مقالات</h4>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="float-right d-none d-md-block">
                                                    <div class="dropdown">
                                                        <a  href="/admin/blog/create" class="btn btn-primary " type="button">
                                                          افزودن مقاله جدید
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <!-- end page-title-box -->
                                </div>
                            </div>
                            <!-- end page title -->

                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">



                                            <table id="mainTable" class="table table-striped mb-0">
                                                <thead>
                                                <tr>

                                                    <th>شناسه</th>
                                                    <th>عنوان</th>
                                                    <th>تاریخ</th>
                                                    <th>ویرایش</th>
                                                    <th>حذف</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($roles as $role )
                                                <tr>
                                                    <td>{{ $role->id }}</td>
                                                    <td>{{ $role->name }}</td>
                                                    <td>{{ $role->timestamp }}</td>
                                                    <td><a href="/admin/blog/edit/{{ $role->id }}">ویرایش</a></td>
                                                    <td>
                                                        <form action="" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input type="submit" value="حذف" class="bg-danger">
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach


                                                </tbody>

                                            </table>

                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                        </div><!-- container fluid -->

                    </div> <!-- Page content Wrapper -->


@endsection
