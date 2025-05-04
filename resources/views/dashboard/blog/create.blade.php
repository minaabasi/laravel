@extends('dashboard.layout.layout')

@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="page-title m-0">مقاله جدید</h4>
                        </div>
                        <div class="col-md-4">
                            <div class="float-right d-none d-md-block">
                                <div class="dropdown">
                                    <a href="/admin/blog/list" class="btn btn-primary " type="button" >
                                        لیست مقاله ها
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


                        <form action="/admin/blog/store" method="POST" enctype="multipart/form-data" >
                            @csrf

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">عنوان</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="عنوان مقاله ..." name="title" id="example-text-input">
                                @error('title')
                                    <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-url-input" class="col-sm-2 col-form-label">آدرس مقاله</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="url" placeholder="یک آدرس یونیک انتخاب کنید .." name="url" id="example-url-input">
                                @error('url')
                                    <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-search-input" class="col-sm-2 col-form-label">متن</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="15" placeholder="نوشتن متن مقاله ..." name="body"></textarea>
                                @error('body')
                                    <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">دسته بندی </label>
                            <div class="col-sm-10">
                                <select class="custom-select">
                                    <option selected>دسته بندی مقاله خود را انتخاب کنید</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label ">تصویر شاخص</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file"  name="img">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label "></label>
                            <div class="col-sm-10">
                                <button class="form-control bg-primary text-light" type="submit"  id="example-text-input"> ارسال </button>
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
