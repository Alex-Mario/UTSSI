<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet"type="text/css" href="<?php echo base_url('assets/css/login&registrasi.css');?>">

        <link rel="icon" href="">
    </head>

    <body>

        <div class="container">

          <h1>Login</h1>

            <form action="" method="post">
                <label for="username">Username</label><br>
                <input type="text" name="username" id="username"><br>
                <label for="password">Password</label><br>
                <input type="password" name="password" id="password"><br>
                <button type="submit" name="login">Log in</button>
            </form>
         
            <p><a href="index.php">Kembali lagi kehalaman utama</a></p>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script src="<?php echo base_url('assets/js/script.js');?>"></script>

    </body>
</html>