<?php
/**
 * Android login script
 */
include_once '../bin/db_connect.php';
include_once '../bin/functions.php';

$email = $_POST['email'];
$password = $_POST['password'];

if(isset($email, $password) && $email!="" && $password!=""){
    $response = array();
    
    if (login($email, $password)){
        $response["success"] = 1;
        $response["message"] = "User Log In Successful";
        
        // echoing JSON response
        echo json_encode($response);
        
    } else {
        $response["success"] = 0;
        $response["message"] = "Unable to login user";
        
        // echoing JSON response
        echo json_encode($response);
    }
    
} else {
    $response["success"] = 0;
    $response["message"] = "Empty Fields";
    
    // echoing JSON response
    echo json_encode($response);
}
?>
