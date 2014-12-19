<?php
include './script/music.php';
include './script/include.php';


if (isset($_POST['submit'])) {

    // Récupère le chemin de l'avatar.
    $cheminTmpMusique = $_FILES['musique']['tmp_name'];   //L'adresse vers le fichier uploadé dans le répertoire temporaire.

    $pathinfo = pathinfo($FILES['musique']['name']);


    $cheminFinal = "./audio/" . $pathinfo['basename'] . "." . $pathinfo['extension'];
    // Copie et renomme l'avavar.
    copy($cheminTmpMusique, $cheminFinal);
    
    AddMedia("Sound", $pathinfo['basename'], $cheminFinal);
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
                    <h2>Modification d'un media</h2>
                </div>
            </header>
            <?php
            formUpload();
            ?>
    </body>
</html>
