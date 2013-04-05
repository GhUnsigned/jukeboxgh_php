<?php
include_once '../bin/db_connect.php';
include_once '../bin/functions.php';

$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

if(isset($email, $password, $password2) 
        && $email!="" && $password!="" && $password2!=""){
    if ($password != $password2){
        echo "Unmatched passwords";
        die();
    }
    $param['password'] = $password;
    $param['email'] = $email;
    
    if (register($param)){
        echo "Registered";
        die();
    } else {
        echo "Unregistered";
    }
    
}else{
    echo 'Values not set.';
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
