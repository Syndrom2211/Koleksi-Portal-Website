<?php
define("SERVER_NAME", "localhost");
define("SERVER_USER", "root");
define("SERVER_PASSWORD", "");
define("SERVER_DB", "gudang_elektronik");

@mysql_connect(SERVER_NAME, SERVER_USER, SERVER_PASSWORD) or die(mysql_error());
@mysql_select_db(SERVER_DB) or die(mysql_error());
?>