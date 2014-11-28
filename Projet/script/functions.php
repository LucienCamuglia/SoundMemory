<?php

function connexion() {
if (isset($_POST['username'], $_POST['password'])) {
    if ((!empty($_POST['username'])) and (!empty($_POST['password']))) {
        if(($_POST['username']=='Admin')&($_POST['password']=='Super2008')){            
             session_destroy();
             session_start();
             $_SESSION['login']=true;
            // header('location: ../index.php');
        }else{
           echo "wrong username or password"; 
        }           
    }else{
     echo "Username or password empty";
    }
}
}

function upload(){
    
}

