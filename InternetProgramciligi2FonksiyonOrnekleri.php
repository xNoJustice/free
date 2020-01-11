<?php 
// 1) Aldığı 2 notun ortalamasını alarak ekrana yazdıran fonksiyon
$not1 = 50;
$not2 = 70;
function ort($not1, $not2){
    echo ($not1+$not2)/2;
}
ort($not1, $not2);
echo "<br>";
// 2) Aldığı satır ve sütun sayısına göre her sütunun genişliğini yine kullanıcıdan gönderilen değer olacak şekilde çizgi kalınlığı 1 olarak tabloyu oluşturan fonksiyon
$satir = 5;
$sutun = 5; 
$aralik = 50;
function tablo($satir, $sutun, $aralik){
    echo "<table style='border:1;'>";
        echo "<tr>";
        for($a=0; $a<=$sutun; $a++){
        echo "<th width='$aralik'>Test</th>";
        }
        echo "</tr>";
        for($b=0; $b<=$satir; $b++){
            for($c=0; $c<=$satir; $c++){
                echo "<td>Test2</td>";
            }
        echo "</tr>";
        }
    echo "</table>";
}
tablo($satir, $sutun, $aralik);
// 3) Aldığı sayıya karşılık gelen ay bilgisini yazdıran fonksiyon
echo "<br>";
$sayi4 = 10;
function months($sayi4){
    if($sayi4==1){
        echo "Ocak";
    }
    else if($sayi4==2){
        echo "Şubat";
    }
    else if($sayi4==3){
        echo "Mart";
    }
    else if($sayi4==4){
        echo "Nisan";
    }
    else if($sayi4==5){
        echo "Mayıs";
    }
    else if($sayi4==6){
        echo "Haziran";
    }
    else if($sayi4==7){
        echo "Temmuz";
    }
    else if($sayi4==8){
        echo "Ağustos";
    }
    else if($sayi4==9){
        echo "Eylül";
    }
    else if($sayi4==10){
        echo "Ekim";
    }
    else if($sayi4==11){
        echo "Kasım";
    }
    else if($sayi4==12){
        echo "Aralık";
    }
    else{
        echo "Yanlış Sayı";
    }
}
months($sayi4);
// 4) Aldığı diziyi ekranda sırasız liste şeklinde gösteren fonksiyon
echo "<br>";
$dizi1 = array("Bilgisayar", "Telefon", "Tablet", "Ev Aletleri");
function listeleme($dizi1){
    echo "<ul style='list-style-type:none;'>";
    foreach($dizi1 as $val){
        echo "<li>$val</li>";
    }
    echo "</ul>";
}
listeleme($dizi1);
// 5) Aldığı dizinin elemanlarını combobox'ın içine ekleyen fonksiyon
echo "<br>";
$dizi2 = array("Ahmet", "Mehmet", "Hüseyin", "Hasan");
function combobox($dizi2){
    echo "<select>";
        foreach($dizi2 as $val => $v){
            echo "<option value=$val>$v</option>";
        }
    echo "</select>";
}
combobox($dizi2);
// 6) Aldığı üç basamaklı sayının birler basamağı, onlar ve yüzler basamağındaki rakamları bir diziye aktaran fonksiyon
echo "<br>";
$sayi5 = 123;
function diziaktar($sayi5){
    $birler = $sayi5 %10;
    $onlar = ($sayi5/10)%10;
    $yüzler = (($sayi5/100)%10);
    $array = array('yüzler'=> $yüzler, 'onlar' =>$onlar, 'birler'=> $birler);
    echo "Sayı = ". $sayi5 . "<br>";
    foreach($array as $arr => $val){
        echo $arr . " basamağı => " . $val. "<br>";
    }
}
diziaktar($sayi5);
// 7) Çağrıldığında 1 ile 100 arasında 10 tane sayı bulacak ve bu sayılarıda bir diziye yazan fonksiyon
echo "<br>";
function randomsayi(){
    $array2 = array();
    for($m=0; $m < 10; $m++){
        array_push($array2, rand(0,100));
    }
    foreach($array2 as $arr => $val){
        echo "$val<br>";
    }
}
randomsayi();
// 8) Bir dizi içerisindeki sayıların en büyüğünü, en küçüğünü ve ortalamasını bulan ekrana yazdıran fonksiyon
echo "<br>";
$dizi10 = array(10,20,30,40,50,45,35,25,15,5);
function sirala($a){
    $len = count($a);
    $top = 0;
    for($g=0; $g < $len; $g++){
        $top = $top + $a[$g];
    }
    echo "En Büyük Sayı = ". max($a);
    echo "<br>";
    echo "En Küçük Sayı = ". min($a);
    echo "<br>";
    echo "Ortalama = " . $top/$len;
    echo "<br>";
}
sirala($dizi10);
?>
