@extends('dashboard.layout.layout')

@section('content')

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="row align-items-center">
                                            <div class="col-md-8">
                                                <h4 class="page-title m-0">لیست کاربران</h4>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="float-right d-none d-md-block">
                                                    <div class="dropdown">
                                                        <a  href="{{ route('users.create') }}" class="btn btn-primary " type="button">
                                                          افزودن کاربر جدید
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
                                                    <th>id</th>
                                                    <th>نام</th>
                                                    <th>ایمیل</th>
                                                    <th>ویرایش</th>
                                                    <th>حذف</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($users as $user )
                                                    <tr>
                                                        <td>{{ $user->id }}</td>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->email }}</td>
                                                        
                                                        <td><a class="btn btn-primary" href="{{ route('users.show' , ['user' => $user->id]) }}">ویرایش</a></td>
                                                        <td>
                                                            <form action="{{ route('users.destroy' , ['user' =>$user->id]) }}" method="POST">
                                                                @method('DELETE')
                                                                @csrf
                                                                <input type="submit" value="حذف" class="btn btn-danger" >
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
