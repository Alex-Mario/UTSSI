<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Registrasi</title>
        <link rel="stylesheet"type="text/css" href="<?php echo base_url('assets/css/login&registrasi.css');?>">
        <link rel="icon" href="">
    </head>

     <style type="text/css">
        
        .bg {
            width: 100%;
            height: 100%;
        }

    </style>

    <body>

        <div class="container">
          <h1>daftar</h1>
            <form action="" method="post">
                <label for="username">Username</label>
                <br>
                <input type="text" name="username" id="username">
                <br>
                <label for="">Password</label>
                <br>
                <input type="password" name="password" id="password">
                <br>
                <label for="password2">Konfirmasi password</label>
                <br>
                <input type="password" name="password2" id="password2">
                <br>
                <button type="submit" name="register">Daftar</button>

                <p> Sudah punya akun?
                  <a href="login">Login di sini</a>
                </p>
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/js/script.js');?>"></script>

    </body>
</html>
