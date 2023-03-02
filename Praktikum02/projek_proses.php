<?php

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "Ayeleen" && $password == "123") {
    echo "Selamat, kamu berhasil login!";
} else {
    echo "Maaf, kamu gagal login, coba lagi!";
}