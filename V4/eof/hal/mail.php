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
textarea{
	background:#000;
	color:#ff0000;
	border:1px solid #8B0000;
}
</style>
<body bgcolor="#000">
<table width="566" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td nowrap="nowrap" width="150" height="150">
		<form id="submitdata" name="submitdata" method="post" action="suk.php?drom=mail">
		<center>
		<div align="center">
		<p>Email : 
			&nbsp;&nbsp;&nbsp;<input class="form" name="email" type="text" size="25" value="<? echo $_POST['email'];?>" />
		</p>
		<p>Subject : 
			<input class="form" type="text" name="subject" size="25" value="<? echo $_POST['subject'];?>" />
		</p>
		<p>Isi : <br/>
			<textarea style="width:200px;height:200px;" name="pesan"></textarea>
		</p>
		<p>
			<input class="simpan" type="submit" name="Submit" value="Simpan" />
		</p>
		</div>
		</center>
		</form></td>
	</tr>
</table>
<?
include "konak.php";

$email = $_POST['email'];
$subject = $_POST['subject'];
$pesan = $_POST['pesan'];

if(empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['pesan'])){
echo "<center><h2><font color='#ff0000'>Jangan Di Kosongkan !!</font></h2></center>";
}else{
@mail($_POST['email'],$_POST['subject'],$_POST['pesan'],"From: ".user('site_name')."<".user('email').">");
$pesan = 'Pesan Berhasil di kirim ;).';
}
?>
</body>
</html>
<?php
} else {
header("location:../log.php");
} 
?>