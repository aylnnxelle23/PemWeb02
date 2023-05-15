<?php
require_once '../database/dbkoneksi.php';

$id = $_GET['iddel'];
$query = "DELETE FROM jenis_produk WHERE id = ?";
$statement = $dbh->prepare($query);
$statement->execute([$id]);

header('location:list_jenis_produk.php');
?>