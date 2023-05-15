<?php 
require_once '../database/dbkoneksi.php';
?>

<?php 
   $_nama_produk = $_POST['nama_produk'];
   $_merk_id = $_POST['merk_id'];
   $_stok = $_POST['stok'];
   $_harga = $_POST['harga'];
   $_berat = $_POST['berat'];
   $_jenis_produk = $_POST['jenis_produk_id'];


   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_nama_produk; // ? 2
   $ar_data[]=$_merk_id;// 3
   $ar_data[]=$_stok;
   $ar_data[]=$_harga;
   $ar_data[]=$_berat;
   $ar_data[]=$_jenis_produk; // ? 7

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO produk (nama_produk,merk_id,stok,
    harga,berat,jenis_produk_id) VALUES (?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE produk SET nama_produk=?,merk_id=?,stok=?,
    harga=?,berat=?,jenis_produk_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:list_produk.php');
?>