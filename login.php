<!DOCTYPE html>
<html>
<head>
    <title><?php echo $_SERVER['REQUEST_URI']; ?>  | Register</title>
</head>
<body>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/uplon/layouts/vertical/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2017], Sun, 11 Oct 2020 09:22:52 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Register | Uplon - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link rel="stylesheet" href="assets/libs/sweetalert2/sweetalert2.min.css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css"  id="app-stylesheet" />
        <style>
         body{
  background: #eee !important;
  font-family: 'Courier New', Courier, monospace !important;
   }

        </style>

    </head>

    <body class="">

        <div class="account-pages pt-5 my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="account-card-box">
                            <div class="card mb-0">
                                <div class="card-body p-4">

                                    <div class="text-center">
                                        <div class="my-3">
                                                <span style='font-size: 25px'>UmarDeV</span>
                                        </div>
                                        <h5 class="text-muted text-uppercase py-3 font-16">Sign in</h5>
                                    </div>

                                    <form action="#" class="mt-2" id="regform" auto-complete="off" auto-suggest="off" data-parsley-validate novalidate>
                                        <div class="form-group mb-3">
                                        <label for="">Email Address <span class="text-danger">*</span></label>
                                            <input class="form-control" type="email" required="" name='email' placeholder="Enter your email" id="email">
                                        </div>



                                        <div class="form-group mb-3">
                                        <label for="">Password <span class="text-danger">*</span></label>
                                            <input class="form-control" type="password" required=""  name='password' placeholder="Enter your password" id='password'>
                                        </div>


                                        <div class="form-group text-center">
                                            <button class="btn btn-success btn-block waves-effect waves-light" type="submit"  id="submit"> Sign In </button>
                                        </div>

                                    </form>

                                </div> <!-- end card-body -->
                            </div>
                            <!-- end card -->
                        </div>
                      
                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-danger-50">dont have account? <a href="index.php" class="text-danger ml-1"><b>Sign Up</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>
        <!-- Plugin js-->
        <script src="assets/libs/parsleyjs/parsley.min.js"></script>
        <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

        <!-- Validation init js-->
        <script src="assets/js/pages/form-validation.init.js"></script>
        <!-- App js -->
        <script src='assets/js/login.js'></script>
        <script src="assets/js/app.min.js"></script>

    </body>

</html>
</body>
</html>
