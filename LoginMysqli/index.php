<html>
    <head>
    </head>
    <body>
        <form action=" " method = "POST">
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
                    <td><input type="submit" name ="submit" value = "Giriş Yap"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
<?php
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
?>