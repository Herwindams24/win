<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Herwinda">

    <title>Mututama - Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?= BASEURL; ?>/asset2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= BASEURL; ?>/asset2/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-info">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <a href="<?= BASEURL; ?>">
                                            <h1 class="h4 text-gray-900 mb-4">MutuTama</h1>
                                        </a>
                                    </div>
                                    <!---->
                                    <div class="p-5">
                                        <div class="text-center">
                                            <?php Flasher::flash(); ?>
                                            <h1 class="h6 text-gray-900 mb-4">Selamat Datang!</h1>
                                        </div>
                                        <form method="POST" action="<?= BASEURL; ?>/Account/checkingLogin" class="user">
                                            <div class="form-group">
                                                <input type="username" class="form-control form-control-user" id="username" name="username" placeholder="Enter Username...">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                                    <label class="custom-control-label" for="customCheck">Remember Me</label>
                                                </div>
                                            </div>
                                            <button name="submit" type="sumbit" value="submit" id="submit" class="btn btn-info btn-user btn-block">
                                                Login
                                            </button>
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="<?= BASEURL; ?>/Account/forgotpassword">Forgot Password?</a>
                                        </div>
                                        <div class="text-center">
                                            <a class="small" href="<?= BASEURL; ?>/Account/signUp">Create an Account!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="<?= BASEURL; ?>/asset2/vendor/jquery/jquery.min.js"></script>
        <script src="<?= BASEURL; ?>/asset2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?= BASEURL; ?>/asset2/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?= BASEURL; ?>/asset2/js/sb-admin-2.min.js"></script>

</body>

</html>