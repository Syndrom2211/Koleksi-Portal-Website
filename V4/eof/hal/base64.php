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
	border:1px solid #8B0000;
}
.simpan{
	background:#000;
	color:#ff0000;
	border:1px dotted #8b0000;
}
input {BORDER-RIGHT:#333333 1px solid;BORDER-TOP:#333333 1px solid;BORDER-LEFT:#333333 1px solid;BORDER-BOTTOM: #333333 1px solid;BACKGROUND-COLOR: #011111;COLOR: #fff;font: 8pt Verdana;}
select {BORDER-RIGHT:#333333 1px solid;BORDER-TOP:#333333 1px solid;BORDER-LEFT:#333333 1px solid;BORDER-BOTTOM: #333333 1px solid;BACKGROUND-COLOR: #011111;COLOR: #ff0000;font: 8pt Verdana;}
submit {BORDER-RIGHT:buttonhighlight 2px outset;BORDER-TOP:buttonhighlight 2px outset;BORDER-LEFT:buttonhighlight 2px outset;BORDER-BOTTOM: buttonhighlight 2px outset;BACKGROUND-COLOR: #000099;COLOR: #fff;width: 30%;}
textarea {BORDER-RIGHT:#333333 1px solid;BORDER-TOP:#333333 1px solid;BORDER-LEFT:#333333 1px solid;BORDER-BOTTOM: #333333 1px solid;BACKGROUND-COLOR: #000;COLOR: #fff;font: Fixedsys bold;}
-->
</style>
<body bgcolor="#000">
<table width="566" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td>
		<form id="submitdata" name="submitdata" method="post" action="suk.php?drom=base64">
		<center>
		<?php
error_reporting(0);
set_magic_quotes_runtime(0);
if (get_magic_quotes_gpc()) {
   if (!function_exists("strips")) {
		function strips(&$arr,$k="") {
			if (is_array($arr)) {
				foreach($arr as $k=>$v) {
					if (strtoupper($k) != "GLOBALS") { strips($arr["$k"]); }
				}
			} else { $arr = stripslashes($arr);}
		}
	} strips($GLOBALS);
}
foreach($_POST as $k=>$v) {if (!isset($$k)) {$$k = $v;}}
?>
<form method=POST><p></p>
<select name="_pilih">
<option value="1" <?php if($_POST['_pilih'] == '1') echo "selected='selected'"; ?>>gzinflate - str_rot13 - base64</option>
<option value="2" <?php if($_POST['_pilih'] == '2') echo "selected='selected'"; ?>>gzinflate - base64</option>
</select><br><br>
<textarea name="input_text" cols=50 rows=10><?php @htmlspecialchars($input_text);
echo htmlspecialchars($_POST['input_text']); ?></textarea><br><br>
Encoding Iteration : <input type="text" name="_num" value="<?php if(!empty($_POST['_num'])) echo $_POST['_num']; else echo "0"; ?>" size="3">
&nbsp;&nbsp;&nbsp;&nbsp;
<input type=submit value="Encode" name="_hajar"><input type=submit value="Decode" name="_hajar"><br><br>
<?php
if($_POST['_hajar'] == 'Encode') {
	$start_tag = '?><?php ';
	$end_tag   = ' ?>';
	$iteration = $_POST['_num'];
	
	if(!ereg("[0-9]", $iteration)) {
		$encoded = "Please use a valid encoding iteration (0-9)";
	}
	else {
		if($_POST['_pilih'] == '1') {
			$start_stack = 'eval(gzinflate(str_rot13(base64_decode(';
			$end_stack   = '))));';
			for($i=0;$i<=$iteration;$i++) {
				$gz_text = gzdeflate($input_text, 9);
				$str_rot = str_rot13($gz_text);
				$encoded = base64_encode($str_rot);
				$input_text = $start_tag.$start_stack."'".$encoded."'".$end_stack.$end_tag;
			}
		}
		elseif($_POST['_pilih'] == '2') {
			$start_stack = 'eval(gzinflate(base64_decode(';
			$end_stack   = ')));';
			for($i=0;$i<=$iteration;$i++) {
				$gz_text = gzdeflate($input_text, 9);
				$encoded = base64_encode($gz_text);
				$input_text = $start_tag.$start_stack."'".$encoded."'".$end_stack.$end_tag;
			}
		}
	}
}
elseif($_POST['_hajar'] == 'Decode') {
	if($_POST['_pilih'] == '1')
		$haystack = @htmlentities(gzinflate(str_rot13(base64_decode($input_text))),ENT_NOQUOTES);
	elseif($_POST['_pilih'] == '2')
		$haystack = @htmlentities(gzinflate(base64_decode($input_text)),ENT_NOQUOTES);
	$count = 0;
	while($status != 'done') {
		$pos_1 = stripos($haystack,'eval(gzinflate(str_rot13(base64_decode(');
		$pos_2 = stripos($haystack,'eval(gzinflate(base64_decode(');
		if($pos_1) { // code has eval(gzinflate(str_rot13(base64_decode(
			$start = $pos_1 + 40;
			$end = stripos($haystack,'))))') - 1;
			$length = $end - $start;
			$code = substr($haystack,$start,$length);
			$haystack = @htmlentities(gzinflate(str_rot13(base64_decode($code))),ENT_NOQUOTES);
			++$count;
		}
		elseif($pos_2) { // code has eval(gzinflate(base64_decode(
			$start = $pos_2 + 30;
			$end = stripos($haystack,')))') - 1;
			$length = $end - $start;
			$code = substr($haystack,$start,$length);
			$haystack = @htmlentities(gzinflate(base64_decode($code)),ENT_NOQUOTES);
			++$count;
		}
		else { // no encoding string is present
			$status = 'done';
		}
	} // end while loop	
}
else $status = 'done';
?>
<textarea cols=50 rows=10>
<?php 
	if($_POST['_hajar'] == 'Encode') echo htmlspecialchars($encoded);
	elseif($_POST['_hajar'] == 'Decode') {
		if ($haystack == '') echo "Your string doesn't appear to be encoded.";
		else echo $haystack; }
?>
</textarea></form><br/><br/>
<?php if($_POST['_hajar'] == 'Decode' && $haystack != '') { echo "<br><br>[ {$count} iterations ]<br>"; } ?>
<div align="left" style="padding-left:6px;">
<font color="#ff0000" face="Courier New" size="2px">Untuk str_rot13 : <b>eval(gzinflate(str_rot13(base64_decode(''))));</b><br/>
Untuk gzinflate : <b>eval(gzinflate(base64_decode('')));</b><br/></font>
</div>
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