<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Akun</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url();?>assets/logo.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?=base_url();?>assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?=base_url();?>assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/login/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?=base_url();?>assets/login/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/login/css/main.css">
    <!--===============================================================================================-->
    <!-- SweetAlert -->
    <script src="<?= base_url() ?>node_modules/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <?php if($this->session->flashdata('success_log_out')){?>
    <script>
    swal({
        title: "Success!",
        text: "Anda Berhasil Log Out!",
        icon: "success"
    });
    </script>
    <?php } ?>

    <?php if($this->session->flashdata('loggin_err')){?>
    <script>
    swal({
        title: "Error!",
        text: "Anda Tidak Memiliki Akses!",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if($this->session->flashdata('loggin_err_pass')){?>
    <script>
    swal({
        title: "Error!",
        text: "Password Yang Anda Masukan Salah!",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('input_register')){ ?>
    <script>
    swal({
        title: "Berhasil Terdaftar!",
        text: "Silahkan Anda Login!",
        icon: "success"
    });
    </script>
    <?php } ?>

    <?php if($this->session->flashdata('loggin_err_no_user')){?>
    <script>
    swal({
        title: "Error!",
        text: "Anda Belum Terdaftar!",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if($this->session->flashdata('loggin_no_session')){?>
    <script>
    swal({
        title: "Error!",
        text: "Sesi Anda Habis!",
        icon: "error"
    });
    </script>
    <?php } ?>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('<?=base_url();?>assets/login/images/bg-01.jpeg');">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                    Account Login
                </span>
                <span class="login100-form-title p-b-41">
                    <img src="<?=base_url();?>assets/login/images/logo_login.jpeg" width="20%" alt="">
                </span>
                <form class="login100-form validate-form p-b-33 p-t-5" method="POST"
                    action="<?=base_url();?>Login/proses_login">

                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input class="input100" type="text" name="username" placeholder="User name">
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-32">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>
                    <div class="container-login100-form-btn m-t-32">
                        <button class="login100-form-btn">
                            <a href="<?=base_url();?>Register/index" style="color: white;">Register
                            </a></button>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="<?=base_url();?>assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?=base_url();?>assets/login/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?=base_url();?>assets/login/vendor/bootstrap/js/popper.js"></script>
    <script src="<?=base_url();?>assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?=base_url();?>assets/login/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?=base_url();?>assets/login/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?=base_url();?>assets/login/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="<?=base_url();?>assets/login/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="<?=base_url();?>assets/login/js/main.js"></script>

</body>

</html>