<?php
require_once "functions.php";
$baglanti= baglan();

$id=$_GET["id"];
$sorgu = "DELETE FROM sairler WHERE id=$id";
$sonuc = mysqli_query($baglanti,$sorgu);
echo $sorgu;
if($sonuc){
    echo "Kayıt silinmiştir.<br>";
}else{
    echo "Kayıt silinmemiştir.";
}
echo'<a href="admin.php">Admin Paneli</a>';
?>