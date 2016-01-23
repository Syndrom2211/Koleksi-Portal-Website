				<?php
				include "konak.php";
				
				$tanggal=date("d-m-Y | h:i:s");
				$extensionList = array("docx", "pdf", "xlsx", "doc", "xls", "pptx", "ppt");

				$fileName = $_FILES['userfile']['name'];
				$pecah = explode(".", $fileName);
				$ekstensi = $pecah[1];

				// nama direktori upload
				$namaDir = '../../file_pembelajaran/file/';

				// membuat path nama direktori + nama file.
				$pathFile = $namaDir . $fileName;

				if (in_array($ekstensi, $extensionList))
				{
				// memindahkan file ke temporary
				$tmpName  = $_FILES['userfile']['tmp_name'];

				// proses upload file dari temporary ke path file
				if (move_uploaded_file($_FILES['userfile']['tmp_name'], $pathFile))
				{
				mysql_query("INSERT INTO tbl_file (no, nama, tanggal, file) values ('', '$fileName', '$tanggal', '$fileName') ");
				echo "<script language='javascript'>alert('Berhasil di upload om :D !');</script>";
				echo '<meta http-equiv="refresh" content="0; url=../suk.php?drom=upload">';
				}
				else
				{
				echo "<script language='javascript'>alert('Gagal di upload om :D !');</script>";
				echo '<meta http-equiv="refresh" content="0; url=../suk.php?drom=upload">';
				}
				}
				else echo "<script language='javascript'>alert('Yang bener om upload nya !');</script>";
				echo '<meta http-equiv="refresh" content="0; url=../suk.php?drom=upload">';

				?>