<?php
    session_start();
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $_SESSION['username'] = $username;
    if($username == "" || $password == ""){
        echo "null usernamepassword";
    }else if($username == $password){
        $_SESSION['flag'] = "true";
        header('location: dashboard.php');
    }else{
        echo "invalid User!";
    }
?>