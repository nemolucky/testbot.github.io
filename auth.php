<?php
session_start();
include("db_connect.php");
$mail = $_POST['mail'];
$password = $_POST['phone'];
$md5_password = md5(password);
$query = pg_query($db, "SELECT * FROM `users` WHERE `login` = '{$mail} AND `password`='{$md5_password}'");
if (pg_num_rows($query) != 0) {
  $_SESSION['user'] = ['nick' => $mail];
  header("Location: /user.php");
}
else{
  echo("Ошибка")
    }
