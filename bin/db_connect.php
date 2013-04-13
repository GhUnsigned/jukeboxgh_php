<?php
define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DATABASE", "social_music");

// connect to the server
$conn = mysql_connect(HOST, USER, PASSWORD);

// select database
mysql_select_db(DATABASE, $conn);
?>
