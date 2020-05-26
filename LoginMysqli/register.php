<html>
    <head>
    </head>
    <body>
        <center><a href = "dashboard.php">Geri Dön </a></center>
        <form action="" method = "POST">
            <table align="center">
                <tr>
                    <td>Kullanıcı Adı</td>
                    <td>:</td>
                    <td><input type="text" name = "username" required></td>
                </tr>
                <tr>
                    <td>Şifre</td>
                    <td>:</td>
                    <td><input type="password" name = "password" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name = "submit" value = "Kaydet"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
<?php
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
?>