<html>
<head>
        <link REL="SHORTCUT ICON" HREF="../images/drom_icon.gif">
		<link  href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:regular,bold" rel="stylesheet" type="text/css" />
<title>.: File Pembelajaran :.</title>
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
			<img src="../images/files.png" />
		</center>
	</th>
  </tr>
  <tr>
    <th colspan="6" >
		<center>
			<font size="5px"> Download File Pembelajaran</font>
		</center>
	</th>
  </tr>
  <tr> 
    <th>Nama File</th>
    <th width="110px">Download</th>
  </tr>
	<?php
	include "../konak.php";
	$pilih_tabel = 'select * from tbl_file';
	$record = mysql_query($pilih_tabel);
	// Fungsi While di bawah adalah proses penampilan data yang di ambil dari database.
	while($data = mysql_fetch_array($record)){
	echo "<tr>
	<td align='center'>".$data['nama']."</td>
	<td style='padding-left:7px;'><center><a href=../file_pembelajaran/file/".$data['nama']."><img src='../images/download.png' /></a></center></td>
	</tr>";
	}
	?>
</table>
</center>
</body>
</html>