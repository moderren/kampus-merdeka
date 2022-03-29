<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link href="css/style_tugas2.css" rel="stylesheet" />
</head>

<body>
    <center><h3>Form Login</h3></center>
    <?php
    session_start();
    if (isset($_REQUEST['login'])) {
        cekLogin();
    }

    function cekLogin()
    {
        $user = $_POST["user"];
        $pass = $_POST["pass"];

        if ($user == "admin" && 
            $pass == "mimin") {
            $_SESSION['akses'] = $user;
            header("location:tugas2rwd/home.html");
        } else {
            echo "
                <script>
                    alert('Username atau Password Salah');
                    window.location.href='form_login.php';
                </script>
            ";
        }
    }
    ?>

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <center><br/><label>Username: </label></center>
        <center><br/><input type="text" name="user" /></center>
        <center><br/><label>Password: </label></center>
        <center><br/><input type="password" name="pass" /></center>
        <br /><br />
        <center><input type="submit" name="login" value="Login" /></center>
    </form>
</body>

</html>