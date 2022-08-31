<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="container p-3 my-3 border">
    <h1 class="text-center">Form Registrasi</h1>
    
    <?php
    include "connection.php";

    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = input($_POST["username"]);
        $pass = input($_POST["pass"]);

        $sql="INSERT INTO tb_mat (username,pass) VALUES ('$username','$pass')";

        $hasil=mysqli_query($kon,$sql);

        if ($hasil) { 
            echo "<div class='alert alert-success'> Anda telah berhasil melakukan registrasi.
            Lanjutkan ke <a href='login.php'>Halaman Login </div>";
        }
        else {
            echo "<div class='alert alert-danger'> Registrasi Gagal.</div>";
        }
    }
    ?>
    
    <form id="form" method="post">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Username:</label>
                <input type="text" id="user" name="username" class="form-control" placeholder="Masukan Username">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Password:</label>
                <input type="text" id="pass" name="pass" class="form-control" placeholder="Masukan Password">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4" style="margin-top: 10px">
                <button type="submit" name="Submit" id="Submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </div>
    </form>
    </div>
</body>
</html>