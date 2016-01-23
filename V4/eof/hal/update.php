<?php

$id=$_POST["id_no"];
$nama_barang=$_POST['nama_barang'];
$stok=$_POST['stok'];
$harga=$_POST['harga'];

//PROSES UPDATE
include "konak.php";
if(empty($_POST['nama_barang']) || empty($_POST['stok']) || empty($_POST['harga'])){
echo "<script language='javascript'>alert('Yang bener masukin nya om :P !');</script>";
echo '<meta http-equiv="refresh" content="0; url=edit.php?id="$id"">';
}else{
$query = "UPDATE tbl_persediaan SET nama_barang='$nama_barang', stok='$stok', harga='$harga' where no='$id'";
mysql_query($query);
echo "<script language='javascript'>alert('Berhasil di update om :D !');</script>";
echo '<meta http-equiv="refresh" content="0; url=edit.php?id="$id"">';
}
?>