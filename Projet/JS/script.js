/*
 Module : M152 
 Project : 18 - SoundMemory
 Page    : script.js
 InfoPage: Page contenant touts les scripts Javascript pour lire et arrêter une musique.
 Autor   : Camuglia Lucien, Perez Ivan
 Date    : 21.11.2014
 Version : 1.0 
 */

var nbEssais = 10;

var audio;
$(function() {
    $(".carte").click(function() {
        //predn l'ID de la carte.
        var MusicId = this.id;
        //prend le lien de la musique en relation avec la carte
        var Lienaudio = $("#a" + MusicId).children()[0].getAttribute("src");
        if (nbEssais > 0)
        {
            //crée l'objet audio
            audio = new Audio(Lienaudio);

            console.log(audio.readyState);

            audio.addEventListener("canplaythrough", function() {
                console.log("canplaythrough");
                audio.play();
            });
            audio.load();
            //démarre l'audio

            audio.play();

            //timer
            /*  setInterval(function() {
             console.log(audio.currentTime);
             //test le temps de l'audio
             if (audio.currentTime >= 29) {
             //met l'audio en pause
             audio.pause();
             //remet le temp a 0
             audio.currentTime = 0;
             }
             }, 1000);
             });*/
            nbEssais--;
            AfficheEssais();

        }else{
         alert("vous avez Perdu !");   
        };
    });



})

function AfficheEssais() {
    $(".essais").text(nbEssais + " essais");
}