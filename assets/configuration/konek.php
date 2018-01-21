<?php
define('host', 'localhost');
define('username', 'root');
define('password', '');
define('db_name', 'suratDB');

$konek = NEW mysqli (host,username,password,db_name) or die(mysqli_error());
 ?>
