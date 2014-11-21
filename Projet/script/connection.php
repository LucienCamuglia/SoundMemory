<?php

// Administrator's connection
// Username : Admin
// Password : Super2008
if (isset($_POST['username'], $_POST['password'])) {
    if ((!empty($_POST['username'])) and (!empty($_POST['password']))) {
        if(($_POST['username']=='Admin')&($_POST['password']=='Super2008')){
             session_start();
             session_destroy();
             $_SESSION['login']=true;
        }else{
           echo "wrong username or password"; 
        }           
    }else{
     echo "Username or password empty";
    }
} else {
    header('location: ../index.php');   
}

