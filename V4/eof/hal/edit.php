<?php
session_start();
if(isset($_SESSION['user'])) {
?>
<?php
$no=$_GET["no"]; // mengambil variabel id dari link Edit ?id=
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
.tutup{
	background:#000;
	color:#ff0000;
	border:1px dotted #8b0000;
}
</style>
<body bgcolor="#000">
<center><font color="#ff0000"><pre>
 __      __       .__                               
/  \    /  \ ____ |  |   ____  ____   _____   ____  
\   \/\/   // __ \|  | _/ ___\/  _ \ /     \_/ __ \ 
 \        /\  ___/|  |_\  \__(  <_> )  Y Y  \  ___/ 
  \__/\  /  \___  >____/\___  >____/|__|_|  /\___  >
       \/       \/          \/            \/     \/ 
</pre></font></center><br/>
<table width="566" border="0" align="center" cellpadding="0" cellspacing="0">
<?
include "konak.php";
if(isset($_GET['id']) && is_numeric($_GET['id'])){
$queris = "SELECT * FROM `tbl_persediaan` WHERE `no_faktur`='".$_GET['id']."'";
$query = mysql_query($queris);
$row = mysql_fetch_array($query);
?>
<form method="POST" action="update.php">
<input type="hidden" name="id_no" value="<?php echo "$no"; ?>" />
	<tr>
		<td>
		<center>
		<p>Nama Barang : 
			<input class="form" name="nama_barang" type="text" value="<? echo $row['nama_barang']; ?>" />
		</p>
		<p>Stok : 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form" name="stok" type="text" value="<? echo $row['stok']; ?>" />
		</p>
		<p>Harga : 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form" name="harga" type="text" value="<? echo $row['harga']; ?>" />
		</p>
		<p>
			<input class="tutup" type="submit" name="Submit" value="Simpan" />
		</p>
		</center>
		</td>
	</tr>
</form>
<?
}else{
?>
  <tr>
    <th colspan="6" >
		<center>
			<font size="5px">Database Gudang Elektronik</font>
		</center>
	</th>
  </tr>
  <tr> 
    <th width="10px">No.faktur</th>
    <th width="120px">Nama barang</th>
    <th width="40px">Stok</th>
	<th width="90px;">Harga</th>
	<th width="30px;">Edit</th>
  </tr>

	<?php
	include "konak.php";
	$pilih_tabel = 'select * from tbl_persediaan';
	$record = mysql_query($pilih_tabel);
	// Fungsi While di bawah adalah proses penampilan data yang di ambil dari database.
	while($data = mysql_fetch_array($record)){
	echo "<tr>
	<td align='center'>".$data['no_faktur']."</td>
	<td style='padding-left:7px;'>".$data['nama_barang']."</a></td>
	<td align='center'>".$data['stok']."</td>
	<td style='padding-left:7px;'>".$data['harga']."</td>
	<td align='center'><a href='edit.php?id=".$data['no_faktur']."' onclick='if(parseInt(navigator.appVersion)>3)top.resizeTo(700,420)'><img src='../../images/editz.gif' /></a></td>
	</tr>";
	}
	?>
		</center>
	<? }?>
		</form></td>
	</tr>
</table>
<br/>
<div align="left" style="padding-left:52px"><input class="tutup" type="submit" value="Tutup" onClick="javascript:window.close();"></div>
</body>
</html>
<?php
} else {
header("location:../log.php");
} 
?>