@extends('dashboard.layout.layout')

@section('content')

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="row align-items-center">
                                            <div class="col-md-8">
                                                <h4 class="page-title m-0">لیست دسته بندی ها</h4>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="float-right d-none d-md-block">
                                                    <div class="dropdown">
                                                        <a  href="/admin/blog/create" class="btn btn-primary " type="button">
                                                          افزودن دسته بندی جدید
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
                                                    <th>عنوان</th>
                                                    <th>تاریخ</th>
                                                    <th>ویرایش</th>
                                                    <th>حذف</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Car</td>
                                                    <td>100</td>
                                                    <td>200</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>Bike</td>
                                                    <td>330</td>
                                                    <td>240</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>Plane</td>
                                                    <td>430</td>
                                                    <td>540</td>
                                                    <td>3</td>
                                                </tr>
                                                <tr>
                                                    <td>Yacht</td>
                                                    <td>100</td>
                                                    <td>200</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>Segway</td>
                                                    <td>330</td>
                                                    <td>240</td>
                                                    <td>1</td>
                                                </tr>
                                                </tbody>

                                            </table>

                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                        </div><!-- container fluid -->

                    </div> <!-- Page content Wrapper -->


@endsection
