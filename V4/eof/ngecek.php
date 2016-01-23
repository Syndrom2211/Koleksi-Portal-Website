<?php
session_start();
include "../konak.php";
include "log.php";
if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = mysql_query("SELECT * FROM user WHERE username='$username' && password='".md5($password)."'");
	$num = mysql_num_rows($sql);
	if($num==1){
		// login benar //
		$_SESSION['user'] = $username;
		$_SESSION['passwd'] = $password;
		?><script language="JavaScript">alert('Sukses Login');
		document.location='suk.php'</script><?
		}else{
		// jika salah //
		?><script language="javascript">
	alert("Salah masukin password atau usernamenya");
	document.location="log.php";
	</script>
	<?php 
		}
	}
?>