<?php
session_start();
if(isset($_SESSION["username"])){
echo'
<!DOCTYPE html>
<html>
<head></head>
<body>
<form action="eklemeislemik.php" method="POST">
Kitap <input type="text" name="kitap"><br>
<input type="submit" name="ekle" value="Ekle">
</form> 
</body>
</html>';
}else{
    header("location:admin.php");
}
?>