<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if(empty($name)) {
    echo "Nama Harus Diisi!!! <br>";
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email Tidak Valid!!! <br>";
}

if(strlen($password) < 8) {
    echo "PAssword harus terdiri dari minimal 8 karakter!!! <br>";
}

?>