/////////////////////////////////// INTERNET PROGRAMCILIĞI 
<?php
/////////////////////////////////// DB CONN
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
/////////////////////////////////// SELECT
ob_start();
session_start();
require 'conn.php';
if(isset($_POST['submit'])){
    $usr = $_POST['username'];
    $pwd = $_POST['password'];
    $query = mysqli_query($conn, "SELECT * FROM uyeler WHERE username ='".$usr."' AND password = '".$pwd."'");
    if(mysqli_num_rows($query)){
        $_SESSION['login'] = true;
        $_SESSION['usr'] = $usr;
        $_SESSION['pwd'] = $pwd;
        header("Location:dashboard.php");
    }else{
        echo "<center>Kullanıcı Adı ya da Şifre Yanlış!<br></center>";
    }
}
ob_end_flush();
mysqli_close($conn);
/////////////////////////////////// SELECT 2 
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
/////////////////////////////////// INSERT 
ob_start();
require 'conn.php';
if(isset($_POST['submit'])){
    $usr = $_POST['username'];
    $pwd = $_POST['password'];
    $query = mysqli_query($conn, "SELECT * FROM uyeler WHERE username = '".$usr."'");
    if(mysqli_num_rows($query) == 0){
        $query2 = mysqli_query($conn, "INSERT INTO uyeler SET username = '".$usr."', password = '".$pwd."'");
        if($query2){
            echo "<center>Kayıt Başarılı</center>";
        }else{
            echo "<center>Kayıt Başarısız</center>";
        }
    }else{
        echo "<center> Böyle Bir Kullanıcı Var </center>";
    }
}
ob_end_flush();
mysqli_close($conn);
/////////////////////////////////// UPDATE
$update = mysql_query("UPDATE uyeler SET
uye_kadi = 'prototürk'
WHERE uye_kadi = 'Tayfun Erbilen'");
if ( $update ){
     print "güncelleme başarılı!";
}
/////////////////////////////////// DELETE
$delete = mysql_query("DELETE FROM uyeler");
/////////////////////////////////// DELETE 2
$delete = mysql_query("DELETE FROM uyeler WHERE uye_id = {$_GET['id']}");
/////////////////////////////////// LOGOUT
session_start();
ob_start();
session_destroy();
echo "<center>Çıkış Yaptınız. Ana Sayfaya Yönlendiriliyorsunuz!</center>";
header("Refresh: 2; url=index.php");
ob_end_flush();
/////////////////////////////////// OB CLOSS
ob_end_flush();
/////////////////////////////////// DB CLOSE
mysqli_close($conn);
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
