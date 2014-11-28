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
