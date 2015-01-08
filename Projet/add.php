<?php
include './script/music.php';
include './script/include.php';



if (isset($_REQUEST['AddMusic'])) {
   

    // Récupère le chemin de l'avatar.
    $cheminTmpMusique = $_FILES['musique']['tmp_name'];   //L'adresse vers le fichier uploadé dans le répertoire temporaire.

    $pathinfo = pathinfo($_FILES['musique']['name']);


    $cheminFinal = "./audio/" . $pathinfo['basename'] . "." . $pathinfo['extension'];

   
    // Copie et renomme l'avavar.
    copy($cheminTmpMusique, $cheminFinal);
    
    AddMedia("Sound", $pathinfo['basename'], $cheminFinal);
	
	header('location : ./admin.php');
};
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>SoundMemory</title>
        <link rel="stylesheet" href="./CSS/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="./CSS/style.css" type="text/css"/>
        <script src="./JS/jquery.js" ></script>
        <script src="./JS/script.js" ></script>        
    </head>
    <body>
        <div class="container">
            <header class="navbar navbar-fixed-top">
                <div class="container">
                    <h1>SoundMemory</h1> 
                    <h2>Ajout d'un media</h2>
                </div>
            </header>
            
            <aside>
                 <form class="form-inline" method="post" action="add.php"  enctype="multipart/form-data">
                 <div class="form-group">
                 <div class="input-group">
                    <span class="glyphicon glyphicon-cloud-upload"> Upload une musique</span>
                    <input type="file" name="musique" accept="audio/*">                    
                 </div>
                 <div class="input-group">                            
                    <span class="glyphicon glyphicon-download-alt"></span>
                    <input type="submit" name="AddMusic" value="Upload la musique"/>
                 </div>                
                 </div>
                 </form>
            </aside>
    </body>
</html>
