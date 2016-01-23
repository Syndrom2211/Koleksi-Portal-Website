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
	border:1px dashed #8B0000;
}
.upload{
	background:#B8860B;
	color:#fff;
	border:1px solid #B8860B;
}
.upload:hover{
	background:#ff0000;
	border:1px solid #ff0000;
}
.siform{
	background:#B8860B;
	color:#fff;
	border:1px solid #B8860B;
	opacity:1;
	-moz-opacity:0;
	filter:alpha(opacity:0);
	z-index:2;
	cursor:pointer;
}
.siform:hover{
	background:#ff0000;
	color:#fff;
	border:1px solid #ff0000;
	opacity:1;
	-moz-opacity:0;
	filter:alpha(opacity:0);
	z-index:2;
	cursor:pointer;
}
-->
</style>
<body oncontextmenu="return false;" onkeydown="return false;" onmousedown="return false;" bgcolor="#000">
<table width="566" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td>
		<form enctype="multipart/form-data" method="post" action="hal/proses_upload.php">
		<center>
		<img src=".././images/uploader.png" /><br/>
		<input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
			<font color="#B8860B">Upload Data: </font><input class="siform" type="file" name="userfile" style="margin:9px;"/><br/>
				<input class="upload" type="submit" name="submit" value="Upload !" /><br/><br/>
				<font color="#E9967A" face="Rockwell Condensed" size="3px">Hanya File DOC, PDF, PPT, dan XLS yang boleh di upload.</font><br/>
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