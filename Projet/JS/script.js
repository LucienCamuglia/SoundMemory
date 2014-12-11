/*
Module : M152 
Project : 18 - SoundMemory
Page    : script.js
InfoPage: Page contenant touts les scripts Javascript pour lire et arrêter une musique.
Autor   : Camuglia Lucien, Perez Ivan
Date    : 21.11.2014
Version : 1.0 
*/




$(function(){
$( ".carte" ).click(function() {
 var MusicId = this.id;
  var Lienaudio = $("#a"+MusicId).children()[0].getAttribute("src");
  alert(Lienaudio);
});




})