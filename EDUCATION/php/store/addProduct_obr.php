<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require 'db.php';

$name = htmlspecialchars(trim($_POST['name']));
$price = htmlspecialchars(trim($_POST['price']));
$shortDescription = htmlspecialchars(trim($_POST['short-description']));
$fullDescription =htmlspecialchars(trim($_POST['full-description']));
$imageSrc = htmlspecialchars(trim($_POST['image-src']));

if(empty($name) || empty($price) || empty($shortDescription) || empty($fullDescription) || empty($imageSrc)) {
    exit("Не все поля заполнены");//как return для файла-обработика
}

if(mb_strlen($name) < 3 || $price < 0) {
    exit("невалидные данные");
}

 $result = $mysqli->query("SELECT * FROM `products` WHERE `name`='$name'")->fetch_assoc();
if($result) {
   exit("Такой товар уже существует"); 
}
    
$result1 = $mysqli->query("INSERT INTO `products`(`name`, `price`, `short_description`, `full_description`, `image_src`)"
        . " VALUES ('$name', '$price', '$shortDescription', '$fullDescription', '$imageSrc')");
if($result1) {
    exit("ok");
} else {
    exit("Не удалось добавить товар");
}
            
//echo "$name $price $shortDescription $fullDescription $imagesSrc";



