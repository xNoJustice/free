//Sayısal Loto
<?php
if(isset($_POST['submit'])){
    $sayilar = array();
    while (count($sayilar) < 6) {
    $sayi = rand(1,34);
    if (in_array($sayi,$sayilar) === FALSE) {
    array_push($sayilar,$sayi);
    }
    }
    array_multisort($sayilar,SORT_ASC);
}
?>
<html>
    <head>
    </head>
    <body>
        <form action="" method="POST">
            <input type="submit" name="submit" value="Çekilişi Başlat">
        </form>
        <?php 
            if(isset($_POST['submit'])){for($i=0; $i < 6; $i++){ 
                $j = $i+1;
                echo "$j. Sayı = " . $sayilar[$i] . "<br>";
                }
            }?>
    </body>
</html>

//Şans Topu
<?php
if(isset($_POST['submit'])){
    $sayilar = array();
    while (count($sayilar) < 6) {
    $sayi = rand(1,34);
    if (in_array($sayi,$sayilar) === FALSE) {
    array_push($sayilar,$sayi);
    }
    }
    array_multisort($sayilar,SORT_ASC);
    $sayi2 = rand(1,14);
}
?>
<html>
    <head>
    </head>
    <body>
        <form action="" method="POST">
            <input type="submit" name="submit" value="Şans Topunu Başlat">
        </form>
        <?php if(isset($_POST['submit'])){
            for($i=0; $i < 6; $i++){ 
                $j = $i+1;
                echo "$j. Sayı = " . $sayilar[$i] . "<br>";
            }
            echo "Son Sayı = " . $sayi2;
        }
        ?>

    </body>
</html>
//Milli Piyango
<?php
if(isset($_POST['submit'])){
    $sayilar = array();
    $sayi1 = rand(0,5);
    $sayi2 = rand(0,9);
    $sayi3 = rand(0,9);
    $sayi4 = rand(0,9);
    $sayi5 = rand(5,9);
    $sayi6 = rand(0,5);
    array_push($sayilar, $sayi1);
    array_push($sayilar, $sayi2);
    array_push($sayilar, $sayi3);
    array_push($sayilar, $sayi4);
    array_push($sayilar, $sayi5);
    array_push($sayilar, $sayi6);
}
?>
<html>
    <head>
    </head>
    <body>
        <form action="" method="POST">
            <input type="submit" name="submit" value="Şans Topunu Başlat">
        </form>
        <?php if(isset($_POST['submit'])){
            for($i=0; $i < 6; $i++){ 
                $j = $i+1;
                echo "$j. Sayı = " . $sayilar[$i] . "<br>";
            }
        }
        ?>

    </body>
</html>
