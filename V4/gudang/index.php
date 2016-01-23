<html>
<head>
        <link REL="SHORTCUT ICON" HREF="../images/drom_icon.gif">
		<link  href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:regular,bold" rel="stylesheet" type="text/css" />
<title>Data Gudang</title>
</head>
<style type="text/css">
body{
	background:#000;
	color:#626262;
	font-family: 'PT Sans Narrow', Arial, sans-serif;
}
table, tr, td, th{
	border:1px solid #ff0000;
	position:relative;
}
</style>
<body oncontextmenu="return false;" onkeydown="return false;" onmousedown="return false;">
<center>
<table width="566" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
	<th colspan="6">
		<center>
			<img src="../images/elektro.png" />
		</center>
	</th>
  </tr>
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
  </tr>
	<?php
	include "../konak.php";
	$pilih_tabel = 'select * from tbl_persediaan';
	$record = mysql_query($pilih_tabel);
	// Fungsi While di bawah adalah proses penampilan data yang di ambil dari database.
	while($data = mysql_fetch_array($record)){
	echo "<tr>
	<td align='center'>".$data['no_faktur']."</td>
	<td style='padding-left:7px;'>".$data['nama_barang']."</a></td>
	<td align='center'>".$data['stok']."</td>
	<td style='padding-left:7px;'>".$data['harga']."</td>
	</tr>";
	}
	?>
</table>
</center>
</body>
</html>