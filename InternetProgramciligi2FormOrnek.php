<html>
    <head>
    </head>
    <body>
        <form action="" method="POST">
            <label for="">Ürün Adedi</label>
            <input required type="number" name="adet"value="<?php if(isset($_POST['adet'])){echo $_POST['adet'];} ?>"><br>
            <label for="">Birim Fiyatı</label>
            <input required type="number" name="birim" value="<?php if(isset($_POST['birim'])){echo $_POST['birim'];} ?>"><br>
            <input type="checkbox" name="KDV" <?php if(isset($_POST['KDV'])){echo "checked";}?>>
            <label for="">%18 KDV</label><br>
            <input type="checkbox" name="discount" <?php if(isset($_POST['discount'])){echo "checked";}?>>
            <label for="">%5 Öğrenci İndirimi</label><br>
            <input type="submit" name="submit" value="Hesapla">
        </form>
    </body>
</html>
<?php 
if(isset($_POST['submit'])){
    $proNumber = $_POST['adet'];
    $proPrice = $_POST['birim'];
    if(isset($_POST['KDV'])){
        if(isset($_POST['discount'])){
            $total = $proNumber * $proPrice;
            $total = $total + ($total * 0.18);
            $total = $total - ($total * 0.05);
            echo "<label style='margin-right:10px;'for=''>Toplam Fiyat = </label>";
            echo "<input type='text' value='$total'>";
        }else{
            $total = $proNumber * $proPrice;
            $total = $total + ($total * 0.18);
            echo "<label style='margin-right:10px;'for=''>Toplam Fiyat = </label>";
            echo "<input type='text' value='$total'>";
        }
    }else{
        if(isset($_POST['discount'])){
            $total = $proNumber * $proPrice;
            $total = $total - ($total * 0.05);
            echo "<label style='margin-right:10px;'for=''>Toplam Fiyat = </label>";
            echo "<input type='text' value='$total'>";   
        }else{
            $total = $proNumber * $proPrice;
            echo "<label style='margin-right:10px;'for=''>Toplam Fiyat = </label>";
            echo "<input type='text' value='$total'>";   
        }
    }
}
?>
