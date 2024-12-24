<?php
session_start();
require_once "functions.php";
if(isset($_SESSION["username"])){
    $baglanti=baglan();
    $id = $_GET["id"];
    if($id){
    $sorgu = "SELECT * FROM kitaplar WHERE id=$id";
    $sonuc = mysqli_query($baglanti,$sorgu);
    if($sonuc){
        $satir = mysqli_fetch_assoc($sonuc);
        echo
        '
        <!DOCTYPE html>
        <html>
        <head>
        </head>
        <body>
        <form action="update.php?id='.$id.'" method="POST">
        Kitap <input type="text" name="kitap" value="'.$satir["kitap"].'" ><br>
        <input type="submit" name="duzenle" value="Düzenle">
        </form> 
        </body>
        </html>';
}else{
    echo "Veri bulunamadı.";
}
    }
    else{
    echo "Geçersiz ID parametresi.";
    }
    else{
    header("location:anasayfa.php");
}
}
?>