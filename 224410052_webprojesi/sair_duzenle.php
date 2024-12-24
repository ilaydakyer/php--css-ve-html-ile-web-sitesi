<?php
session_start();
require_once "functions.php";
if(isset($_SESSION["username"])){
    $baglanti=baglan();
    $id = $_GET["id"];
    $sorgu = "SELECT * FROM sairler WHERE id=$id";
    $sonuc = mysqli_query($baglanti,$sorgu);
    $satir = mysqli_fetch_assoc($sonuc);
    echo
    '
    <!DOCTYPE html>
    <html>
    <head>
    </head>
    <body>
    <form action="update.php?id='.$id.'" method="POST">
    Resim <input type="text" name="resim" value="'.$satir["resim"].'" ><br>
    Başlık <input type="text" name="baslik" value="'.$satir["baslik"].'"><br>
    Yazı <input type="text" name="yazi" value="'.$satir["yazi"].'"><br>
    <input type="submit" name="duzenle" value="Düzenle">
    </form> 
    </body>
    </html>
    ';
}else{
    header("location:anasayfa.php");
}
?>