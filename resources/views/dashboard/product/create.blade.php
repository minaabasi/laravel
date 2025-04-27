@extends('dashboard.layout.layout')

@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="page-title m-0">محصول جدید</h4>
                        </div>
                        <div class="col-md-4">
                            <div class="float-right d-none d-md-block">
                                <div class="dropdown">
                                    <a href="/admin/blog/list" class="btn btn-primary " type="button" >
                                        لیست محصولات
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



                        <form action="" methode="Post">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">نام محصول</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text"  id="example-text-input" name="title">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input" class="col-sm-2 col-form-label">توضیحات</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="10" name="description" id="example-search-input"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-email-input" class="col-sm-2 col-form-label">قیمت</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="price" id="example-email-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-email-input" class="col-sm-2 col-form-label">تخفیف</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="sale_price" id="example-email-input">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="inputHorizontalDnger" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <input type="submit" class="form-control form-control-danger btn-primary" id="inputHorizontalDnger" >
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
