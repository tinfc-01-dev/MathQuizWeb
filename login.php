<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MathQuiz Login</title>
</head>
<body>
    <div class="login">
        <h2>LOGIN</h2>
        <form method="post" action="login_check.php" name="formlogin" onsubmit="return cekform()">
            <label>Username</label><br />
            <input type="text" name="username" id="username"><br />
            <label>Password</label><br />
            <input type="password" name="pass" id="pass"><br />
            <button type="submit" name="submit" id="submit" value="Login">Log in</button>
        </form>
        <p class="toreg">Belum punya akun? <a href="register.php">Register</p>
    </div>
    
    <?php
    if (isset($_GET['error'])) {
        $error=$_GET['error'];
    } 
    else {
        $error="";
    }
    ?>

</body>
</html>