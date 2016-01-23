<?php
session_start();
if(isset($_SESSION['user'])) {
?>
<html>
<head>
	<link  href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:regular,bold" rel="stylesheet" type="text/css" />
	<link rel="SHORTCUT ICON" href="../images/drom_icon.gif" />
<title>AdMinIStrATIon AreA</title>
</head>
<style type="text/css">
table, tr, td, th{
	border:1px solid #ff0000;
	font-family: 'PT Sans Narrow', Arial, sans-serif;
	color:#626262;
}
a:link{
	color:#ff0000;
	text-decoration:none;
}
a:hover{
	color:#fff;
	text-decoration:none;
}
a:visited{
	color:#ff0000;
	text-decoration:none;
}
.form{
	background:#000;
	color:#ff0000;
	border:1px solid #8B0000;
}
.simpan{
	background:#000;
	color:#ff0000;
	border:1px dotted #8b0000;
}
</style>
<body bgcolor="#000">
<table width="566" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td>
		<form id="submitdata" name="submitdata" method="post" action="suk.php?drom=submitdata">
		<center>
		<p>Nama Barang : 
			<input class="form" name="nama_barang" type="text" id="nama_barang" />
		</p>
		<p>Stok : 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form" name="stok" type="text" id="stok"></textarea>
		</p>
		<p>Harga : 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form" name="harga" type="text" id="harga"></textarea>
		</p>
		<p>
			<input class="simpan" type="submit" name="Submit"name="Submit" value="Simpan" />
		</p>
		<?php
		include "konak.php";
		if($_POST){
		$nama_barang=$_REQUEST['nama_barang'];
		$stok=$_REQUEST['stok'];
		$harga=$_REQUEST['harga']; 

		if(empty($nama_barang) || empty($stok) || empty($harga)){
		echo "<center><h2><font color='#ff0000'>Ga bener masukin nya !!</font></h2></center>";
		}else{
	
		//membuat Query untuk menyimpan data
		$sql="INSERT INTO tbl_persediaan (no_faktur, nama_barang, stok, harga) 
		values ('$no_faktur','$nama_barang','$stok','$harga')";
		//menyimpan data ke database
		mysql_query($sql);

		echo "<center><h2><font color='#ff0000'>Data berhasil disimpan !!</font></h2></center>";
		}
		}
		?>
		</center>
		</form></td>
	</tr>
</table>
</body>
</html>
<?php
} else {
header("location:../log.php");
} 
?>