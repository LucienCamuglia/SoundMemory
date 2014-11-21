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
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./CSS/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="./CSS/style.css" type="text/css"/>
        <script src="./JS/jquery.js" ></script>
    </head>
    <body>
        <div class="page">
            <header class="navbar navbar-fixed-top">
                <div class="container">
                    <h1>SoundMemory</h1> 
                </div>
            </header>
            <section>
                <div id="cartes">
                   Section
                </div>
            </section>
            <aside>
                <form class="form-inline" method="post" action="script/connection.php">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="glyphicon glyphicon-user"></span>
                            <input type="text" name="username" placeholder="Username" required/>
                        </div>

                        <div class="input-group">
                            <span class="glyphicon glyphicon-lock"></span>
                            <input type="password" name="password" placeholder="Password" required/>
                        </div>

                        <div class="input-group">                            
                            <span class="glyphicon glyphicon-log-in"></span>
                            <input type="submit" name="login" value="Administrator login only"/>
                        </div>
                    </div>
                    </form>
            </aside>
            <footer class="navbar-fixed-bottom">
                © Camuglia Lucien & Perez Ivan - M152 - 2014    
            </footer>
        </div>
    </body>
</html>
