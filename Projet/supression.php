<?php
include './script/music.php';
if (isset($_GET['id'])) {
    if (!empty($_GET['id'])) {
        $id = $_GET['id'];
    }
}else{
header('location : ./admin.php');
}

if(isset($_POST['Supp'])){
    DeleteMedia($_POST['id']);
    header('location : ./admin.php');
}
if (!isset($id)){
header('location : ./admin.php');
}
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
                    <h2>supression d'un media</h2>
                </div>
            </header>
            <section id='MediaSection'>
                <?php
				
                $media = ReadMediaById($id);
				
				
                ?>
                <form class="form-inline" method="post" action="supression.php">
                    <h1>Suprimer la musique</h1>
                    <div class="form-group">
                        <div class="input-group">
                            <span> ID</span>
                            <input type="text" name="id" placeholder="<?php echo $media['idMedia']; ?>" value="<?php echo $media['idMedia']; ?>" readonly required/>
                        </div>

                        <div class="input-group" readonly>
                            <span>Type</span>
                            <select name="type">
                                <option value="Sound" default>Sound</option>
                                <option value="image" >Image</option>
                            </select>
                        </div>

                        <div class="input-group">
                            <span>Name</span>
                            <input type="text" name="name" placeholder="<?php echo $media['Name']; ?>" value="<?php echo $media['Name']; ?>"  readonly required/>
                        </div>

                        <div class="input-group">
                            <span>Path</span>
                            <input type="text" name="path" placeholder="<?php echo $media['Path']; ?>" value="<?php echo $media['Path']; ?>"  readonly required/>
                        </div>

                        <div class="input-group">                            
                            <span class="glyphicon glyphicon-log-in"></span>
                            <input type="submit" name="Supp" value="Suprimer le Media"/>
                        </div>
                    </div>
                </form>
            </section>
    </body>
</html>
