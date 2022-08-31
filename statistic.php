<?php

include 'connection.php';
$tgl = date('Y-m-d');
session_start();

$idplayer = $_GET[$id];

$sql_mat = "SELECT username, level FROM tb_mat WHERE id = '$idplayer'";
$qry_mat = mysqli_query($kon, $sql_mat);
$data = mysqli_fetch_array($qry_mat);

$sql_dif = "SELECT * FROM tb_difficulty";
$qry_dif = mysqli_query($kon, $sql_dif);
$dif = mysqli_fetch_array($qry_dif);

$sql_hs = "SELECT * FROM tb_highscore";
$qry_hs = mysqli_query($kon, $sql_hs);
$hs = mysqli_fetch_array($qry_hs);

if($data && $dif && $hs) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
</head>
<body>
    <h3>STATISTIK</h3>
    <p>Username : <?php echo $data['username'] ?> </p>
    <p>Total Game   : </p><br>
    <p>Level Easy </p>
    <p>Total Game   : </p>
    <p>Highscore    : </p><br>
    <p>Level Medium </p>
    <p>Total Game   : </p>
    <p>Highscore    : </p><br>
    <p>Level Hard </p>
    <p>Total Game   : </p>
    <p>Highscore    : </p><br>
    <div>
        <input type="button" value="KEMBALI"></input>
        <input type="button" value="RESET"></input>
    </div>

</body>
</html>

<?php } ?>