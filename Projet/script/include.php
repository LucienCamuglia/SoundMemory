<?php

function formUpload() {
    ?>
    <aside>
        <form class="form-inline" method="post" action="index.php">
            <div class="form-group">
                <div class="input-group">
                    <span class="glyphicon glyphicon-cloud-upload"> Upload une musique</span>
                    <input type="file" name="musique" accept="audio/*">                    
                </div>
                <div class="input-group">                            
                    <span class="glyphicon glyphicon-download-alt"></span>
                    <input type="submit" name="audio" value="Upload la musique"/>
                </div>
                
            </div>
        </form>
    </aside>
    <?php
}

function formLogin() {
    ?>
    <aside>
        <form class="form-inline" method="post" action="index.php">
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
    <?php
}
function PrintRules() {
    ?>
        <div class="jumbotron">
            <h2>
                Bienvenue sur SoundMemory
            </h2>
            <p>
                SoundMemory est un jeu reprenant le concept du memory, mais avec du son.
            </p>
            <h3>
                Règles :
            </h3>       
            <p>
                Vous disposez de 6 cartes face retournée et de 10 essais. Lorsque vous cliquez sur une carte, vous entendez un son.
                Une fois que le son est terminé, vous pouvez cliquer sur une seconde carte.
                Si la musique est identique, les cartes se retournent et ne sont plus cliquable.
                Si les musiques sont différentes, le joueur perd un essai.
                Si le nombre d'essai descend en dessous de 0, le joueur a perdu.
                Le joueur Gagne dès que toutes les paires de cartes sont retournées.
            </p>
        </div>
    <?php
}
