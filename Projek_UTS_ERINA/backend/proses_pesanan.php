<?php 
require_once '../database/dbkoneksi.php';
?>

<?php 
   $_nama = $_POST['nama'];
   $_produk_id = $_POST['produk_id'];
   $_tanggal = $_POST['tanggal'];
   $_quantity = $_POST['quantity'];
   


   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_nama; // ? 2
   $ar_data[]=$_produk_id;// 3
   $ar_data[]=$_tanggal;
   $ar_data[]=$_quantity;
   

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pesanan (nama,produk_id,tanggal,
    quantity) VALUES (?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE pesanan SET nama=?,produk_id=?,tanggal=?,
    quantity=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:list_pesanan.php');
?>