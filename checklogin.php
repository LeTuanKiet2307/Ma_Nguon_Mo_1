<?php
$user = $_POST['user'];
$pass = $_POST['pass'];

if($user == "admin" && $pass =="12345")
    {
        echo"Dang nhap thanh cong!";
    }
else
    echo"Dang nhap that bai";
?>