<?php
include_once '../../bin/db_connect.php';
include_once '../../bin/functions.php';

$response = array();
//$response['Artist'] = "Artists";
$results = getAllArtists();
while ($row = mysql_fetch_assoc($results)) {
    $response[] = $row;
}
$response = (object)array(
        "Artists" => $response,
    );
echo json_encode($response);
?>
