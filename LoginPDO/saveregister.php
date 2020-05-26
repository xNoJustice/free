<?php
ob_start();
session_start();
require 'conn.php';

$usr = $_POST['kadi'];
$pwd = $_POST['sifre'];

$query = $conn -> prepare("SELECT * FROM uyeler WHERE username = :username");
$query -> execute(array(
    "username" => $usr
));
$check = $query -> fetch(PDO::FETCH_ASSOC);
if($check){
    echo "Böyle Bir Kullanıcı Var <a href = 'javascript:history.go(-1)'>Geri Dön</a>";
}else{
    $query2 = $conn -> prepare("INSERT INTO uyeler SET username = :username, password = :password");
    $save = $query2 -> execute(array(
        "username" => $usr,
        "password" => $pwd
    ));
    if($save){
        echo "<center>Kayıt Başarılı <a href = 'admin.php'>Anasayfaya Dön</a></center>";
    }else{
        echo "<center>Kayıt Başarısız <a href = 'admin.php'>Anasayfaya Dön</a></center>";
    }
}
$conn = null;
ob_end_flush();
?>