<?php
require_once '../database/dbkoneksi.php';

$id = $_GET['iddel'];
$query = "DELETE FROM pesanan WHERE id = ?";
$statement = $dbh->prepare($query);
$statement->execute([$id]);

header('location:list_pesanan.php');
?>