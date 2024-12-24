<?php
require_once "functions.php";
$baglanti = baglan();

$resim= $_POST["resim"];
$baslik=$_POST["baslik"];
$yazi=$_POST["yazi"];
$sorgu = "INSERT INTO sairler (resim,baslik,yazi)
VALUES ('$resim','$baslik','$yazi')  ";
echo $sorgu;
$sonuc = mysqli_query($baglanti,$sorgu);
if($sonuc){
    echo "kayıt başarıyla eklendi <br>";
}else{
    echo "kayıtta problem var";
}
echo '<a href="admin.php">Admin Paneli</a>';
?>