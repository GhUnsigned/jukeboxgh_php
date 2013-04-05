<?php
include_once '../bin/db_connect.php';
include_once '../bin/functions.php';

$email = $_POST['email'];
$password = $_POST['password'];

if(isset($email, $password) && $email!="" && $password!=""){
    
    if (login($email, $password)){
        header("Location: ../modules/main.php");
    } else {
        echo "Cannot log in";
    }
    
} else {
    echo "Unset parameters";
}
?>
