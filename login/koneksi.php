<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'jobdesk');
if ($koneksi) {
    
} else {
    echo "koneksi database gagal";
}
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);


    $data = mysqli_query($koneksi,"SELECT * FROM login_user WHERE username= '$username' AND password= '$password'");
}

    if (mysqli_num_rows($data)) {
        echo "Login Berhasil";
        header("Location:http://localhost:8080/Jobdesk/logo_jadwal.html ");
    exit;
    } else {
        echo "Username atau Password salah";
    }
    ?>