<?php
session_start();
$mail = $_POST['mail'];
$password = $_POST['phone'];
$md5_password = md5(password);

