<?php
session_start();
if (empty($_SESSION['akses'])) {
    echo "
        <script>
            alert('Silakan Login Terelbih Dahulu');
            window.location.href='form_login.php';
        </script>
    ";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Homepage</title>
</head>

<body>
    <nav>
        <ul>
            <li>Selamat Datang, <?php echo $_SESSION['akses']; ?></li>
            <li><a href="logout.php">Keluar</a></li>
        </ul>
    </nav>
</body>

</html>