<?php
if(($_POST["username"]=="admin")&&($_POST["password"]=="1234")){
    session_start();
    $_SESSION["username"]=$_POST["username"];
    header("location:admin.php");
}
?>