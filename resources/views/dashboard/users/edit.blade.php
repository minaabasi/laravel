@extends('dashboard.layout.layout')

@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="page-title m-0">ویرایش کاربر</h4>
                        </div>
                        <div class="col-md-4">
                            <div class="float-right d-none d-md-block">
                                <div class="dropdown">
                                    <a href="{{ route('users.list') }}" class="btn btn-primary " type="button" >
                                        لیست کاربران
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



                        <form action="{{ route('users.update' , ['user'=>$user->id]) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">نام</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="name"  id="example-text-input" value="{{ $user->name }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input" class="col-sm-2 col-form-label">ایمیل</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="email" name="email" value="{{ $user->email }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-email-input" class="col-sm-2 col-form-label">رمز عبور</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password" name="password" value="{{ $user->password }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-url-input" class="col-sm-2 col-form-label">تکرار رمز عبور</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password" name="password_confirmation" value="{{ $user->password }}" >
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="inputHorizontalDnger" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <input type="submit" class="form-control btn-primary" id="inputHorizontalDnger" placeholder="name@example.com">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container fluid -->

</div> <!-- Page content Wrapper -->
@endsection
