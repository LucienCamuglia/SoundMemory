<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include './script/music.php';
?>
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
                    <h2>Administration</h2>
                </div>
            </header>
            <section>
                <table data-toggle="table" data-cache="false" data-height="299">
                    <thead>
                        <tr>
                            <th>Music ID</th>
                            <th>Media Type</th>
                            <th>Name</th>.
                            <th>Path</th>
                            <th>Modifications</th>
                        </tr>
                    </thead>
                    <tbody
                    <?php
                    $allMusics = ReadMusics();
                    for ($i = 0; $i < count($allMusics); $i++) {
                        echo "<tr>";
                        echo "<td>" . $allMusics[$i]['idMedia'] . "</td>";
                        echo "<td>" . $allMusics[$i]['MediaType'] . "</td>";
                        echo "<td>" . $allMusics[$i]['Name'] . "</td>";
                        echo "<td>" . $allMusics[$i]['Path'] . "</td>";
                        echo "<td><a href=\"modification.php?id=" . $allMusics[$i]["idMedia"] . "\"><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span></a></td>";
                        echo "<td><a href=\"supression.php?id=" . $allMusics[$i]["idMedia"] . "\"><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></a></td>";
                        echo "</tr>";
                    }
                    ?>
                        <tr> <td colspan="5"> <a href='./add.php' ><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></td> </tr>
                </tbody>

            </table>
                <a class="btn btn-primary btn-lg" href="./index.php" role="button">Retour à la page de jeu</a>
        </section>
    </div>       
</body>
</html>
