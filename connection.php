<?php
session_start();
$db_host = 'localhost';
$db_name = 'uni_department';
$db_user = 'root';
$db_pass = '12345678';

$conn = new PDO("mysql:host=$db_host; dbname=$db_name", $db_user, $db_pass);
$conn->exec("SET CHARACTER SET utf8");
 ?>
