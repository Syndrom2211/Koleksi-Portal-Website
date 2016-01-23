	<?php
	include "../konak.php";
	include "index.php";
	
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$isi=$_POST['isi'];
	$waktu=date("d-m-Y | H:i:s"); // waktu sekarang
	
	if(empty($nama) || empty($email) || empty($isi)){
	echo "<script language='javascript'>alert('Gagal Di Kirim om :P !');</script>";
	echo '<meta http-equiv="refresh" content="0; url=index.php">';
	}else{
	$mysql=mysql_query("insert into tbl_komentar (nama, email, isi, waktu) values ('$nama', '$email', '$isi', '$waktu')");
	echo "<script language='javascript'>alert('Berhasil Di Kirim om :D !');</script>";
	echo '<meta http-equiv="refresh" content="0; url=index.php">';
	}
	?>