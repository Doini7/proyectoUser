<?php

require_once "models/User.php";

$name = $_POST["name"];
$apellidos = $_POST["apellidos"];
$mail = $_POST["mail"];
$password = $_POST["password"];
$phone = $_POST["phone"];
$sex = $_POST["sex"];

$user = new User($name, $apellidos, $mail, $password, $phone, $sex);

$json = $user->toJson();

file_put_contents("user.txt", $json, FILE_APPEND);

echo $json;