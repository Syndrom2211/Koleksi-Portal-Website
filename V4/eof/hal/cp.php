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
		<form id="submitdata" name="submitdata" method="post" action="suk.php?drom=ChgPwd">
		<center>
		<p>Password Baru : 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form" name="password1" type="password" id="password1" />
		</p>
		<p>Ulangi Password : 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form" name="password2" type="password" id="password2" />
		</p>
		<p>
			<input class="simpan" type="submit" name="Submit" value="Simpan" />
		</p>
		<?php
		include "konak.php";
		if($_POST){
		$password1 = $_REQUEST['password1'];
		$password2 = $_REQUEST['password2'];

		if(empty($password1) || empty($password2)){
		echo "<center><h2><font color='#ff0000'>Ga di isi Uname sama Pwd nya :P !!</font></h2></center>";
		}else if($password1!=$password2){
		echo "<center><h2><font color='#ff0000'>Password tidak sama !!</font></h2></center>";
		}else{
		if($password1 == $password2){
		$sql="UPDATE user SET password = '".md5($password1)."' WHERE username = 'admin'";
		mysql_query($sql);
		//menyimpan data ke database
		echo "<center><h2><font color='#ff0000'>Berhasil di ganti !!</font></h2></center>";
		}
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