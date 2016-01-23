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
<center>
<table width="566" border="0" cellpadding="0" cellspacing="0" style="border:4px solid #ff0000; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px">

<tr>
<td height="30" colspan="3" bgcolor="#ff0000" style="color:#FFFFFF">
<div align="center"><b>Tambah Catatan</b></div></td>
</tr>

<tr>
<td width="73" height="29"><div align="right" class="style4">Penulis : </div></td>
<td width="11">&nbsp;</td>
<td width="421" valign="bottom"><input type="text" class="form" name="penulis"  size="45"></td>
</tr>

<tr>
<td height="33"><div align="right" class="style4"> Judul : </div></td>
<td>&nbsp;</td>
<td><input class="form" type="text" name="judul" size="45"></td>
</tr>

<tr>
<td height="51"><div align="right" class="style4">Isi  : </div></td>
<td>&nbsp;</td>
<td valign="bottom"><textarea class="form" name="isiberita" cols="45" rows="10"></textarea></td>
</tr>

<tr>
<td height="33"><div align="right" class="style4"> Gambar : </div></td>
<td>&nbsp;</td>
<td><input class="form" type="file" name="fupload" /></td>
</tr>

<tr>
  <td height="37">&nbsp;</td>
  <td>&nbsp;</td>
  <td align="center"><input class="simpan" type="submit" name="kirim" value="Kirim">
      <input class="simpan" type="button" value="Batal" onClick="self.history.back()"></td>
</tr>

<tr>
<td colspan="3" bgcolor="#000000" style="color:#FFFFFF">&nbsp;</td>
</tr>
</table>
</center>
</body>
</html>
<?php
} else {
header("location:../log.php");
} 
?>