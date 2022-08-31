<?php
session_start();    

include 'connection.php';
    if(isset($_POST['submit']))
    {
        $user = $_POST['username'];
        $pass = $_POST['pass'];
        $qry = mysqli_query($kon, "SELECT * FROM tb_mat WHERE username = '$user' AND pass = '$pass'");
        

        if ($qry->num_rows>0)
        {
            $data_user = mysqli_fetch_assoc($qry);
            $_SESSION['id_session'] = $data_user['id'];
            $_SESSION['id'] = $data_user['id'];
            $_SESSION['username'] = $user;
            $_SESSION['pass'] = $pass;
            $id = $data_user['id'];

            echo "<script>alert('Anda berhasil Log In');</script>";
            echo "<meta http-equiv='refresh' content='0; url=home.php?player=$id'>";
        }
        else
        {
            echo "<meta http-equiv='refresh' content='0; url=login.php'>";
            echo "<script>alert('Anda gagal Log In');</script>";
        }
    }
    else
    {
        include "login.php";
    }

?>