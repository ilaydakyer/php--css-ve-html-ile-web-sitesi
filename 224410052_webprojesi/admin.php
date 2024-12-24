<?php
session_start();
require_once "functions.php";
if(isset($_SESSION["username"])){
    echo $_SESSION["username"]."<br>";
    echo '<a href="logout.php">Çıkış</a>';
    $baglanti = baglan();
    $sorgu = "SELECT * FROM sairler";
    $sonuc = mysqli_query($baglanti,$sorgu);
    if($sonuc){
        echo'
        <table border="1">
        <h3>Sairler</h3>
        <tr><th>ID</th><th>Resim</th><th>Başlık</th><th>İçerik</th>
        <th>Düzenle</th><th>Sil</th><th><a href="sair_ekle.php">Ekle</a></th></tr>
        ';
        while($satir = mysqli_fetch_assoc($sonuc)){
            echo "
            <tr>
            <td>".$satir["id"]."</td>
            <td>".$satir["resim"]."</td>
            <td>".$satir["baslik"]."</td>
            <td>".$satir["yazi"].'</td>
            <td><a href="sair_duzenle.php?id='.$satir["id"].'">Düzenle</a></td>
            <td><a href="sair_sil.php?id='.$satir["id"].'">Sil</a></td>
            </tr> ';
        }
        echo "</table>";
    }
}else{
    header("location:anasayfa.php");
}

$sorgu2 = "SELECT * FROM kitaplar";
    $sonuc2 = mysqli_query($baglanti,$sorgu2);
    if($sonuc2){
        echo'
        <table border="1">
        <h3>Kitaplar</h3>
        <tr><th>ID<//th><th>Kitap</th>
        <th>Düzenle</th><th>Sil</th><th><a href="kitap_ekle.php">Ekle</a></th></tr>
        ';
        while($satir = mysqli_fetch_assoc($sonuc2)){
            echo "
            <tr>
            <td>".$satir["id"]."</td>
            <td>".$satir["kitap"].'</td>
            <td><a href="kitap_duzenle.php?id='.$satir["id"].'">Düzenle</a></td>
            <td><a href="kitap_sil.php?id='.$satir["id"].'">Sil</a></td>
            </tr> ';
        }
        echo "</table>";
    }
?>