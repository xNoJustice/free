<?php
ob_start();
session_start();
require 'conn.php';

$usr = $_POST['kadi'];
$pwd = $_POST['sifre'];

$query = $conn -> prepare("SELECT * FROM uyeler WHERE username = :username and password = :password");
$query -> execute(array(
    "username" => $usr,
    "password" => $pwd 
));
$login = $query -> fetch(PDO::FETCH_ASSOC);

if($login){
    $_SESSION['login'] = true;
    $_SESSION['usr'] = $usr;
    $_SESSION['pwd'] = $pwd;
    header("Location:admin.php");
}else{
    echo "<center>Kullanıcı Adı/Şifre Yanlış <a href = 'javascript:history.go(-1)'>Geri Dön</a></center>";
}
$conn = null;
ob_end_flush();
?>