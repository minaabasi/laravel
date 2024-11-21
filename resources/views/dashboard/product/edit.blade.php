@extends('dashboard.layout.layout')

@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="page-title m-0">ویرایش محصول</h4>
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



                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">عنوان</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-search-input" class="col-sm-2 col-form-label">Search</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-url-input" class="col-sm-2 col-form-label">URL</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-tel-input" class="col-sm-2 col-form-label">Telephone</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-password-input" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="password" value="hunter2" id="example-password-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-number-input" class="col-sm-2 col-form-label">Number</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" value="42" id="example-number-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Date and time</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">Date</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-month-input" class="col-sm-2 col-form-label">Month</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="month" value="2011-08" id="example-month-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-week-input" class="col-sm-2 col-form-label">Week</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="week" value="2011-W33" id="example-week-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-time-input" class="col-sm-2 col-form-label">Time</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-color-input" class="col-sm-2 col-form-label">Color</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="color" value="#5985ee" id="example-color-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Select</label>
                            <div class="col-sm-10">
                                <select class="form-control">
                                    <option>Select</option>
                                    <option>Large select</option>
                                    <option>Small select</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Custom Select</label>
                            <div class="col-sm-10">
                                <select class="custom-select">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input-lg" class="col-sm-2 col-form-label">Large</label>
                            <div class="col-sm-10">
                                <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" id="example-text-input-lg">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Small</label>
                            <div class="col-sm-10">
                                <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" id="example-text-input-sm">
                            </div>
                        </div>
                        <div class="form-group row has-success">
                            <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control form-control-success" id="inputHorizontalSuccess" placeholder="name@example.com">
                                <div class="form-control-feedback">Success! You've done it.</div>
                                <small class="form-text text-muted">Example help text that remains unchanged.</small>
                            </div>
                        </div>
                        <div class="form-group row has-warning">
                            <label for="inputHorizontalWarning" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control form-control-warning" id="inputHorizontalWarning" placeholder="name@example.com">
                                <div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
                                <small class="form-text text-muted">Example help text that remains unchanged.</small>
                            </div>
                        </div>
                        <div class="form-group row has-danger">
                            <label for="inputHorizontalDnger" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control form-control-danger" id="inputHorizontalDnger" placeholder="name@example.com">
                                <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
                                <small class="form-text text-muted">Example help text that remains unchanged.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container fluid -->

</div> <!-- Page content Wrapper -->
@endsection
