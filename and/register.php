<?php
include_once '../bin/db_connect.php';
include_once '../bin/functions.php';

$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

if(isset($email, $password, $password2) && $email!="" && $password!="" && $password2!=""){
    $response = array();
    
    if ($password != $password2){
        $response["success"] = 0;
        $response["message"] = "Unmatched Passwords.";
        
        echo json_encode($response);
        
    } else {
        $param['password'] = $password;
        $param['email'] = $email;

        if(register($param)){
            // successfully inserted into database
            $response["success"] = 1;
            $response["message"] = "User Registered Successfully";

            // echoing JSON response
            echo json_encode($response);
        } else {
            // failed to insert row
            $response["success"] = 0;
            $response["message"] = "Oops! An error occurred.";

            // echoing JSON response
            echo json_encode($response);
        }
    }
    
} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";

    // echoing JSON response
    echo json_encode($response);
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
