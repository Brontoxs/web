<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logini</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="login-box">
        <img src="bi.png" class="logo">
        <h1>Login</h1>
            <form action="koneksi.php" method="post" name="form_input">
                <input type="text" name="username" placeholder="Username" required>
                <input type="text" name="password" placeholder="Password" required>
                <input type="submit" name="submit" value="Login">
                <a href="#">Lupa Password?</a>
            </form>
    </div>

</body>

</html>