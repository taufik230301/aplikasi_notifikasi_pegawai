<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Daftar Akun</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="<?= base_url();?>assets/register/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="<?= base_url();?>assets/register/css/style.css">
</head>

<body>

    <div class="wrapper" style="background-image: url('assets/register/images/bg-registration-form-1.jpg');">
        <div class="inner">
            <div class="image-holder">
                <img src="<?= base_url();?>assets/register/images/registration-form-1.jpg" alt="">
            </div>
            <form action="">
                <h3>Daftar Akun</h3>
                <div class="form-wrapper">
                    <input type="text" placeholder="Username" class="form-control">
                    <i class="zmdi zmdi-account"></i>
                </div>
                <div class="form-wrapper">
                    <input type="text" placeholder="Email Address" class="form-control">
                    <i class="zmdi zmdi-email"></i>
                </div>
                <div class="form-wrapper">
                    <input type="password" placeholder="Password" class="form-control">
                    <i class="zmdi zmdi-lock"></i>
                </div>
                <div class="form-wrapper">
                    <input type="password" placeholder="Confirm Password" class="form-control">
                    <i class="zmdi zmdi-lock"></i>
                </div>
                <button>Register
                    <i class="zmdi zmdi-arrow-right"></i>
                </button>
            </form>
        </div>
    </div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>