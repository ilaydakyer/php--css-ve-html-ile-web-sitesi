<?php
session_start();
if(isset($_SESSION["username"])){
echo'
<!DOCTYPE html>
<html>
<head></head>
<body>
<form action="eklemeislemi.php" method="POST">
Resim <input type="text" name="resim"><br>
Başlık <input type="text" name="baslik"><br>
İçerik <input type="text" name="yazi"><br>
<input type="submit" name="ekle" value="Ekle">
</form> 
</body>
</html>';
}else{
    header("location:admin.php");
}
?>