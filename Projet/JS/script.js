/*
 Module : M152 
 Project : 18 - SoundMemory
 Page    : script.js
 InfoPage: Page contenant touts les scripts Javascript pour lire et arrêter une musique.
 Autor   : Camuglia Lucien, Perez Ivan
 Date    : 21.11.2014
 Version : 1.0 
 */
//défini le nombre d'essais
var nbEssais = 10;

$(function() {
    var maMusique;
    $(".carte").click(function() {
        //affiche les essays retant a l'utilisateur.
        AfficheEssais();
        //predn l'ID de la carte.
        var MusicId = this.id;
        
        if (nbEssais > 0)
        {
            //crée l'objet audio
            maMusique = document.getElementById('a' + MusicId);            
            
            maMusique.addEventListener("canplaythrough", function() {
                console.log("canplaythrough");
                maMusique.play();
            });
            maMusique.load();

            //timer
            setInterval(function() {
                //test le temps de l'audio
                if (maMusique.currentTime >= 29) {
                    //met l'audio en pause
                    maMusique.pause();
                    //remet le temp a 0
                    maMusique.currentTime = 0;
                }
            }, 1000);

            //décrémente le nombre d'essais
            nbEssais--;
            //affiche le nombre d'essais restant.
            AfficheEssais();

        } else {
            //indique a l'utilisateur qu'il à perdu.
            alert("vous avez Perdu !");
        }
        ;
    });



})

//affiche le nombre d'essais
function AfficheEssais() {
    $(".essais").text(nbEssais + " essais");
}