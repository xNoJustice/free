<?php
ob_start();
session_start();
require 'conn.php';
if (!isset($_SESSION['login'])){
    header("Location:index.php");
}else{
    echo "<center> ".$_SESSION['usr'].", Admin Anasayfasına Hoşgeldin!";
    echo " <>";
    echo "<a href = 'register.php'>Yeni Kullanıcı Ekle</a>";
    echo " <>";
    echo "<a href = 'logout.php'> Çıkış Yap</a></center>";
    $query = mysqli_query($conn, "SELECT * FROM uyeler");
    if ($query){
        echo "<center>";
        echo "<table>";
        echo "<thead>";
        echo "<th> Kullanıcı Adı </th>";
        echo "<th> Şifre </th>";
        echo "</thead>";
        echo "<tbody>";
            while ( $row = mysqli_fetch_assoc($query) ){
                echo "<tr>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "</tr>";
            }
        echo "</tbody>";
        echo "</table>";
        echo "</center>";
    }

}
?>