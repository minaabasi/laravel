@extends('dashboard.layout.layout')

@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="page-title m-0">ویرایش نقش</h4>
                        </div>
                        <div class="col-md-4">
                            <div class="float-right d-none d-md-block">
                                <div class="dropdown">
                                    <a href="{{ route('roles.list') }}" class="btn btn-primary " type="button" >
                                        لیست نقش ها
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

                        <form action="{{ route('role.update' , ['role'=>$role->id]) }}" method="POST" >
                            @csrf
                            @method('PUT')

                        <div class="form-group row">
                            <label  class="col-sm-2 col-form-label">عنوان</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text"  name="name" value="{{ $role->name }}"  >
                                @error('title')
                                    <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label "></label>
                            <div class="col-sm-10">
                                <button class="form-control bg-primary text-light" type="submit" > ارسال </button>
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
