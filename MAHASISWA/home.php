<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Login Mahasiswa</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">


</head>

<style>
    body {
        background: url(image/home.jpg) no-repeat fixed;
        -webkit-background-size: 100% 100%;
        -moz-background-size: 100% 100%;
        -o-background-size: 100% 100%;
        background-size: 100% 100%;
    }
</style>
<html>

<body>
    <div id="login">
        <h3 style="margin-bottom: 30px;" class="text-center text-white pt-5">Login Form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div style="background-color: white; opacity: 0.7;" id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form method="post" action="process.php?act=loginMahasiswa">
                            <h3 style="margin-top: 30px;" class="text-center text-info">Login</h3>
                            <?php
                            //notifikasi gagal login
                            if (isset($_GET['pesan'])) {
                                if ($_GET['pesan'] == "gagal") {
                                    echo "<div class='alert alert-danger' role='alert'> Email atau Password tidak sesuai. </div>";
                                }
                            }
                            ?>
                            <div class="form-group">
                                <label for="username" class="text-info">NRP:</label><br>
                                <input type="text" required oninvalid="this.setCustomValidity('NRP tidak boleh kosong. ')" oninput="setCustomValidity('')" name="nrp" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" required oninvalid="this.setCustomValidity('Password tidak boleh kosong. ')" oninput="setCustomValidity('')" name="upass" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Login">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>