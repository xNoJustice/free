<?php 
$localhost = "localhost";
$user = "root";
$password = "";
$db = "login";
$conn = mysqli_connect($localhost, $user, $password);
$dbcontrol = mysqli_select_db($conn, $db);
if (!$conn){
    die("Veritabanına Bağlanılamadı!");
}
elseif(!$dbcontrol){
    die ("Database'e Bağlanılamadı!");
}
mysqli_set_charset($conn, "UTF-8");
?>