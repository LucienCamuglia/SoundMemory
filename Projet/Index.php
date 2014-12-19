<!DOCTYPE html>
<!-- 
Module : M152 
Project : 18 - SoundMemory
Page    : index.php
InfoPage: Page d'accueil du site, page du jeux.
Autor   : Camuglia Lucien, Perez Ivan
Date    : 21.11.2014
Version : 1.0 
-->
<?php
$nbCarte = 6;

include './script/functions.php';
include './script/include.php';

if (isset($_POST['login'])) {
    connexion();
}
if (isset($_POST['audio'])){
    upload();
}



?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
                </div>
            </header>
            <section>
                <div id="cartes">
                    <?php 
                        for ($i=0; $i < $nbCarte ; $i++) { 
                            echo "<img src=\"./Images/cartes-dos.jpg\" alt=\"Carte\" class=\"carte\" id=\"$i\">";
                            echo "<audio id=a".$i."> <source src=\" ./audio/Anti-douleur.wav\" type=\"audio/wav\"/></audio>";
                         }

                     ?>      
                     <h3 class="essais"></h3>             
                                      
                </div>
            </section>
            <?php
            if ((isset($_SESSION["login"])) && ($_SESSION['login'])) {
                formUpload();
            } else {
                formLogin();
            }
            ?>
            <section>
                <?php
                    PrintRules();
                ?>
            </section>
            <footer class="navbar-fixed-bottom">
                © Camuglia Lucien & Perez Ivan - M152 - 2014    
            </footer>
        </div>
    </body>
</html>
