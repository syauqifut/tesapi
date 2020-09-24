<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Register</title>

    <!-- Fontfaces CSS-->
    <link href="<?=base_url()?>assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?=base_url()?>assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?=base_url()?>assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?=base_url()?>assets/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div style="overflow:auto">
                    <div class="login-wrap">
                        <div class="login-content"  style="overflow:auto; height:550px">
                            <div class="login-logo">
                                <a href="assets/#">
                                    <img src="<?=base_url()?>assets/images/icon/logo.png" alt="CoolAdmin">
                                </a>
                            </div>
                            <div class="login-form">
                                <form action="<?=base_url('index.php/register/register')?>" method="post">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input class="au-input au-input--full" type="text" name="nama" placeholder="Nama">
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input class="au-input au-input--full" type="text" name="username" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="au-input au-input--full" type="password" name="password" id="pw" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label>Konfirmasi Password</label>
                                        <input class="au-input au-input--full" type="password" id="conpw" placeholder="Konfirmasi Password">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                    </div> 
                                    <div class="form-group">
                                        <label>Nomor HP</label>
                                        <input class="au-input au-input--full" type="number" name="no_hp" placeholder="Nomor HP">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input class="au-input au-input--full" type="text" name="alamat" placeholder="Alamat">
                                    </div>
                                    <div class="form-group">
                                        <label>Deskripsi</label>
                                        <input class="au-input au-input--full" type="text" name="desc" placeholder="Deskripsi">
                                        <input class="au-input au-input--full" type="hidden" name="role" value="2">
                                    </div>
                                    <button class="au-btn au-btn--block au-btn--green m-b-20" id="btnSubmit" type="submit">sign up</button>
                                </form>
                                <div class="register-link">
                                    <p>
                                        Do you have account?
                                        <a href="login">Login Here</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script type="text/javascript">
    window.onload = function () {
        document.getElementById("pw").onchange = validatePassword;
        document.getElementById("conpw").onchange = validatePassword;
    }

    function validatePassword(){
    var pass2=document.getElementById("conpw").value;
    var pass1=document.getElementById("pw").value;
    if(pass1!=pass2)
        document.getElementById("conpw").setCustomValidity("Passwords Tidak Sama, Coba Lagi");
    else
        document.getElementById("conpw").setCustomValidity('');
    }
</script>


    <!-- Jquery JS-->
    <script src="<?=base_url()?>assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?=base_url()?>assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?=base_url()?>assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?=base_url()?>assets/vendor/slick/slick.min.js">
    </script>
    <script src="<?=base_url()?>assets/vendor/wow/wow.min.js"></script>
    <script src="<?=base_url()?>assets/vendor/animsition/animsition.min.js"></script>
    <script src="<?=base_url()?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?=base_url()?>vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?=base_url()?>vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?=base_url()?>vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?=base_url()?>vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?=base_url()?>vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?=base_url()?>assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?=base_url()?>assets/js/main.js"></script>

</body>

</html>
<!-- end document-->