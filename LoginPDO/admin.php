<?php
ob_start();
session_start();
if (!isset($_SESSION['login'])){
    header("Location:index.php");
}else{
    echo "<center> ".$_SESSION['usr'].", Admin Anasayfasına Hoşgeldin!";
    echo " <>";
    echo "<a href = 'register.php'>Yeni Kullanıcı Ekle</a>";
    echo " <>";
    echo "<a href = 'logout.php'> Çıkış Yap</a></center>";
}
?>