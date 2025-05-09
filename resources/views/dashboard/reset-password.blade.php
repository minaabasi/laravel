<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Zinzer - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="../dashboard/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../dashboard/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="../dashboard/assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
            </div>
        </div>

        <!-- Begin page -->
        <div class="home-btn d-none d-sm-block">
            <a href="{{ route('admin') }}" class="text-dark"><i class="mdi mdi-home h1"></i></a>
        </div>

        <div class="account-pages">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 offset-lg-1">
                        <div class="text-left">
                            <div>
                                <a href="index.html" class="logo logo-admin"><img src="../dashboard/assets/images/logo_dark.png" height="28" alt="logo"></a>
                            </div>
                            <h5 class="font-14 text-muted mb-4">Responsive Bootstrap 4 Admin Dashboard</h5>
                            <p class="text-muted mb-4">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>

                            <h5 class="font-14 text-muted mb-4">Terms :</h5>
                            <div>
                                <p><i class="mdi mdi-arrow-right text-primary mr-2"></i>At solmen va esser necessi far uniform paroles.</p>
                                <p><i class="mdi mdi-arrow-right text-primary mr-2"></i>Donec sapien ut libero venenatis faucibus.</p>
                                <p><i class="mdi mdi-arrow-right text-primary mr-2"></i>Nemo enim ipsam voluptatem quia voluptas sit .</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="text-center">
                                    <div>
                                        <a href="index.html" class="logo logo-admin"><img src="../dashboard/assets/images/logo_dark.png" height="28" alt="logo"></a>
                                    </div>
                                    <h4 class="text-muted font-18 mt-4">Reset Password</h4>
                                </div>

                                <div class="p-2">
                                    <form class="form-horizontal m-t-20" action="{{ route('resetpassword.post') }}" method="POST">

                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="hidden" required="" name="token" value="{{ $token }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="password" required="" name="password" placeholder="password">
                                            </div>
                                            @error('password')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="password" required="" placeholder="password_confirmation" name="password_confirmation">
                                            </div>
                                        </div>
                                        @error('password_confirmation')
                                            {{ $message }}
                                            @enderror

                                        <div class="form-group text-center row m-t-20">
                                            <div class="col-12">
                                                <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">send</button>
                                            </div>
                                        </div>

                                    </form>
                                    <!-- end form -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>


        <!-- jQuery  -->
        <script src="../dashboard/assets/js/jquery.min.js"></script>
        <script src="../dashboard/assets/js/bootstrap.bundle.min.js"></script>
        <script src="../dashboard/assets/js/modernizr.min.js"></script>
        <script src="../dashboard/assets/js/detect.js"></script>
        <script src="../dashboard/assets/js/fastclick.js"></script>
        <script src="../dashboard/assets/js/jquery.slimscroll.js"></script>
        <script src="../dashboard/assets/js/jquery.blockUI.js"></script>
        <script src="../dashboard/assets/js/waves.js"></script>
        <script src="../dashboard/assets/js/jquery.nicescroll.js"></script>
        <script src="../dashboard/assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="../dashboard/assets/js/app.js"></script>

    </body>
</html>
