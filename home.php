<?php

include 'connection.php';
$tgl = date('Y-m-d');
session_start();

$idplayer = $_GET['player'];

$sql_mat = "SELECT username, level FROM tb_mat WHERE id = '$idplayer'";
$qry_mat = mysqli_query($kon, $sql_mat);
$data = mysqli_fetch_array($qry_mat);

$sql_dif = "SELECT * FROM tb_difficulty";
$qry_dif = mysqli_query($kon, $sql_dif);
$dif = mysqli_fetch_array($qry_dif);

if($data && $dif) {
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
    <header>
        <form method="post" action="statistic.php?player=$idplayer" name="firstlanding">
            <button type="submit" name="btnstatistic" id="btnstatistic" >
                <?php echo $data['username']  ." ". $data['level']?>
            </button>
        </form>
    </header>
    <p>ini beranda</p>
    <div>
        <input type="button" value="EASY"></input>
        <input type="button" value="MEDIUM"></input>
        <input type="button" value="HARD"></input>
    </div>

</body>
</html>

<?php } ?>