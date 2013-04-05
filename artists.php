<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<?php 
 include_once './bin/db_connect.php';
 include_once './bin/functions.php';
 
 $results = getAllArtists();
 if(isset($_POST['name'], $_POST['genre'])) {
     addArtist($_POST['name'], $_POST['genre']);
     
 }
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        R
        <div style="width: 40%; border: 2px solid black;">
            <?php 
             while ($row = mysql_fetch_array($results)):?>
                 
            <p><?php echo $row['name']?></p>
            <?php endwhile;?>
        </div>
        <div>
            <form action="" method="Post">
                <p>Name: <input type="text" name="name"></p>
                <p>Genre: <input type="text" name="genre"></p>
                <p><input type="submit" value="add"/></p>
            </form>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
