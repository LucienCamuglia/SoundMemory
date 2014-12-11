<?php

/*
Module : M152 
Project : 18 - SoundMemory
Page    : functions.php
InfoPage: Page contenant toutes les fonction php.
Autor   : Camuglia Lucien, Perez Ivan
Date    : 21.11.2014
Version : 1.0 

*/


function connexion() {
if (isset($_POST['username'], $_POST['password'])) {
    if ((!empty($_POST['username'])) and (!empty($_POST['password']))) {
        if(($_POST['username']=='Admin')&($_POST['password']=='Super2008')){                         
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

