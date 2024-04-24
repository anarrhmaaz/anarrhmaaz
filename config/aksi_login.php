<?php
session_start();


$username = $_POST['username'];
$password = md5($_POST['password']);

mysqli_query($connection, "SELECT * FROM user WHERE username='$username' AND password='$password'");

$cek = mysqli_num_rows($sql);

if ($cek > 0) {
    $data = mysqli_fetch_array($sql);

    $_SESSION['username'] = $data['username'];
    $_SESSION['userid'] = $data['userid'];
    $_SESSION['status'] = 'login';
    echo "<script>
    alert('Login berhasil');
    location.href='../admin/index.php
    </script>";
}else{
    echo "<script>
    alert('Username atau Password salah!');
    location.href='../login.php';
    </script>";
}

?>