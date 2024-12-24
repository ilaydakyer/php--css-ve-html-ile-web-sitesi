<?php
require_once "functions.php";
$baglanti=baglan();
$id = $_GET["id"];
$resim = $_POST["resim"]; 
$baslik = $_POST["baslik"]; 
$yazi = $_POST["yazi"]; 
$sorgu ="UPDATE sairler SET 
resim='$resim',baslik='$baslik',yazi='$yazi'
WHERE id=$id";
$sonuc=mysqli_query($baglanti,$sorgu);
if($sonuc){
    header("location:admin.php");
}else{
    echo "Problem var";
}

$id = $_GET["id"];
$kitap = $_POST["kitap"]; 
$sorgu2="UPDATE kitaplar SET 
kitap='$kitap'
WHERE id=$id";
$sonuc2=mysqli_query($baglanti,$sorgu2);
if($sonuc2){
    header("location:admin.php");
}else{
    echo "Problem var";
}
?>