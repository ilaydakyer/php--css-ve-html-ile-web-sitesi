<?php
require_once "functions.php";
$baglanti = baglan();

$kitap= $_POST["kitap"];
$sorgu = "INSERT INTO kitaplar (kitap)
VALUES ('$kitap')  ";
echo $sorgu;
$sonuc = mysqli_query($baglanti,$sorgu);
if($sonuc){
    echo "kayıt başarıyla eklendi <br>";
}else{
    echo "kayıtta problem var";
}
echo '<a href="admin.php">Admin Paneli</a>';
?>