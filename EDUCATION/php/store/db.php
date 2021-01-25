<?php


$host = 'localhost';
$user = 'root';
$password = '123456';
$db_name = '1304';
$mysqli = new mysqli($host, $user, $password,  $db_name);

$mysqli->set_charset("utf-8");

if ($mysqli->connect_error) {
  die("Не удалось подключиться к БД ".$mysqli->connect_error);
}
