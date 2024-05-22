<?php
session_start();
include "koneksi.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $data = mysqli_query($koneksi,"SELECT * FROM login_user WHERE username= '$username' AND password= '$password'");


    if (mysqli_num_rows($data)) {
        echo "Login Berhasil";
        header("Location: logo_jadwal.html");
    exit;
    } else {
        echo "Username atau Password salah";
    }
}
?>