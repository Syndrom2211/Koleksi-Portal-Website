<html>
<head>
        <link REL="SHORTCUT ICON" HREF="../images/drom_icon.gif">
		<link  href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:regular,bold" rel="stylesheet" type="text/css" />
<title>.: Tinggalkan Komentar :.</title>
</head>
<style type="text/css">
body{
	background:#000 url('../images/JEK.png');
	background-position:top center;
	background-repeat:no-repeat;
	color:#626262;
	font-family: 'PT Sans Narrow', Arial, sans-serif;
}
table, tr, td, th{
	border:1px solid #ff0000;
	margin-top:296px;
}
.form{
	background:#000;
	color:#ff0000;
	border:1px solid #8B0000;
}
.talrim{
	background:#000;
	color:#ff0000;
	border:1px dotted #8b0000;
}
a{
	color:#ff0000;
	text-decoration:none;
}
a:hover{
	color:#ff0000;
	text-decoration:underline;
}
a:visited{
	color:#ff0000;
	text-decoration:none;
}
</style>
<body>
<center>
<table bgcolor="#000" align="center" width="566" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th colspan="6" >
		<center>
			<font size="5px">.: Tinggalkan Komentar :.</font>
		</center>
	</th>
  </tr>
  <tr> 
	<td align="center">
		<form action="proses.php" method="post">
		<br>
		Nama : <input class="form" type="text" name="nama" /><br><br>
		E-Mail : <input class="form" type="text" name="email" /><br>
		Isi : <br><textarea class="form" type="text" name="isi" ></textarea><br>
		<input class="talrim" type="submit" name="Submit" value="Kirim" />
	</td>
	</tr>
	<tr>
		<td align="center">
			<font style="font-size:15px;border-bottom:1px dashed #ff0000;"><a href="komenmasuk.php">.: Komentar Masuk :.</a></font>
		</td>
	</tr>
</table>
</center>
</body>
</html>