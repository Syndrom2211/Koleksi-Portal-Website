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
<style>
<!--
table, tr, td, th{
	border:1px solid #ff0000;
	font-family: 'PT Sans Narrow', Arial, sans-serif;
	color:#626262;
}
td{
	padding:9px;
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
-->
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
<table width="566" border="0" align="center" cellpadding="0" cellspacing="0" style="border:1px solid #ff0000;">
	<tr>
		<td align="center">
		<fieldset style="border:1px solid #ff0000;" width="566">
		<legend><font color="#fff">Menu Administrator</font></legend>
			<a href="../index.html" target="_blank">Halaman Depan</a> - 
			<a href="?drom=submitdata">Tambah Data</a> -
			<a href="#" onClick="window.open('hal/edit.php', 'poppage', 'toolbars=0, scrollbars=1, location=0, statusbars=0, menubars=0, resizable=1, width=700, height=420, left = 170, top = 100');">Edit Data</a> - 
			<a href="#" onClick="window.open('hal/hapus.php', 'poppage', 'toolbars=0, scrollbars=1, location=0, statusbars=0, menubars=0, resizable=1, width=700, height=420, left = 170, top = 100');">Hapus Data</a> -
			<a href="?drom=datagudang">Data Gudang</a> - 
			<br/>
			<a href="?drom=base64">Base64 Compress</a> -
			<a href="?drom=ChgPwd">ChgPwd</a> - 
			<a href="?drom=upload">Upload</a> - 
			<a href="?drom=fpembelajaran">File Pembelajaran</a> - 
			<a href="out.php">Logout</a> -
			<br/>
			<a href="?drom=catatan">Tulis Catatan</a> -
		</fieldset>
		</td>
	</tr>
</table>
</body>
</html>
<?php
include "../konak.php";
if(isset($_GET['drom'])){
	if($_GET['drom']=="submitdata"){
		include "hal/sd.php";
	}else if ($_GET['drom']=="datagudang"){
		include "../gudang/index.php";
	}else if ($_GET['drom']=="base64"){
		include "hal/base64.php";
	}else if ($_GET['drom']=="logout"){
		include "hal/out.php";
	}else if ($_GET['drom']=="catatan"){
		include "hal/catatan.php";
	}else if ($_GET['drom']=="fpembelajaran"){
		include "../file_pembelajaran/index.php";
	}else if ($_GET['drom']=="upload"){
		include "hal/upload.php";
	}else if ($_GET['drom']=="ChgPwd"){
		include "hal/cp.php";
	}else{
	echo "Halaman kosong / tidak ada";
	}
}
?>
<br/>
<br/>
<br/>
<center><font face="Courier New" color="#ff0000" size="1px">
Coded by © <a href="../index.html" target="_blank">Firdam</a><br/>.:Syndrom2211 Portal:.
</font></center>
<?php
} else {
header("location:log.php");
} 
?>