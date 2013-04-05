<?php

function login($email, $password) {
    // echo "here";
    $query = "SELECT * FROM users_tbl WHERE email='$email'";
    $result = mysql_query($query);
    
    if (mysql_num_rows($result) == 1){
        $userData = mysql_fetch_array($result);
        if($password == $userData['password']){
            return TRUE;
        } else {
            return FALSE;
        }
    }  else {
        return FALSE;
    }
}

function register($param) {
    $email = $param['email'];
    $password = $param['password'];
    
    // Checking to see if user already exist
    $query = "SELECT * FROM users_tbl WHERE email = '$email'";
    $result = mysql_query($query);
    if (mysql_num_rows($result) == 1){
        return FALSE;
    }
    $query = "INSERT INTO users_tbl (email,password)
        VALUES ('$email','$password')";
    
    if (mysql_query($query)){
        return TRUE;
    } else {
        return FALSE;
    }
}

function addArtist($name, $genre) {
    $query = "INSERT INTO artist (name, genre)
        VALUES ('$name', '$genre')";
    mysql_query($query) or die(mysql_error());
}

function getAllArtists() {
    $query = "SELECT * FROM artist";
    
    if (mysql_query($query)){
        $result = mysql_query($query);
        return $result;
    } else {
        return FALSE;
    }
    
}

function getUserSubscriptions($user_id) {
    $query = "SELECT * FROM subscription_tbl,artist WHERE
        subscription_tbl.user_id = $user_id AND 
        subscription_tbl.artist_id = artist.id";
    $result = mysql_query($query) or die(mysql_error());
    return $result;
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
