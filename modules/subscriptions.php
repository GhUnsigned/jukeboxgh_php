<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once '../bin/db_connect.php';
include_once '../bin/functions.php';
?>

<?php
if (isset($_POST['artist'], $_POST['add_artist'])){
    $artist_id = $_POST['artist'];
    $query = "SELECT artist_id FROM subscription_tbl
              WHERE artist_id = $artist_id
              AND user_id = 1";
    $results = mysql_query($query) or die(mysql_error);
    if (mysql_num_rows($results) == 0) {
        $query = "INSERT INTO subscription_tbl (user_id,artist_id)
                  VALUES (1, $artist_id)";
        mysql_query($query) or die(mysql_error());
        unset($_POST);
        unset($_POST['add_artist']);
    } else {
        echo "Artist already subscribed";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Your Subscriptions:</h3>
        <form action="" method="post">
        <p><select name="artist">
                <?php 
                    $results = getAllArtists();
                    while ($row = mysql_fetch_array($results)){
                        echo "<option value=\"". $row['id'] . "\">" . $row['name'] . "</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Add" name="add_artist"/>
            <?php
                $results = getUserSubscriptions(1);
                while ($row = mysql_fetch_array($results)) {
                    echo "<p>{$row['name']}</p>";
                }
            ?>
        </p>
        </form>
        
    </body>
</html>
