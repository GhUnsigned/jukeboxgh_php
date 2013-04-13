<?php
define("HOST", "localhost");
<<<<<<< HEAD
define("USER", "jboxmusic");
define("PASSWORD", "jbmusic*@@$");
=======
define("USER", "root");
define("PASSWORD", "");
>>>>>>> e1f495e6001d9cf398d0e86089e3b80d3ba87ee8
define("DATABASE", "social_music");

// connect to the server
$conn = mysql_connect(HOST, USER, PASSWORD);

// select database
mysql_select_db(DATABASE, $conn);
?>
