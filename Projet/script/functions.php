<?php
require_once './script/music.php';

/*
Module : M152 
Project : 18 - SoundMemory
Page    : functions.php
InfoPage: Page contenant toutes les fonction php.
Autor   : Camuglia Lucien, Perez Ivan
Date    : 21.11.2014
Version : 1.0 

*/


function connexion() {
    if (isset($_POST['username'], $_POST['password'])) {
        if ((!empty($_POST['username'])) and (!empty($_POST['password']))) {
            if (($_POST['username'] == 'Admin') & ($_POST['password'] == 'Super2008')) {
                session_start();
                $_SESSION['login'] = true;
                // header('location: ../index.php');
            } else {
                echo "wrong username or password";
                   }           
        } else {
            echo "Username or password empty";
        }
    }
}
/**
 * Returns an array of random musics taken from the database
 * Each music is duplicated in the array
 * @param int $nbCarte - the number of cards in the game
 * @return array of assoc arrays - Array[0] => (Array['key'] => value)
 */
function PickMusics($nbCarte){
    $AllMusics = ReadMusics();
    shuffle($AllMusics);
    $j = 0;
    for ($i = 0; $i < $nbCarte; $i+=2){
        $musics[$i] = $AllMusics[$j];
        $musics[$i+1] = $musics[$i];
        $j++;
    }  
    shuffle($musics);
    return $musics;
}
/**
 * Create the array that contains the ids of the cards
 * @param int $nbCarte - the number of cards in the game
 * @return array of int - the array of idCards
 */
function CreateCardsArray($nbCarte){
    for ($i = 0; $i < $nbCarte; $i++)
    {
        $cards[] = $i;
    }
    shuffle($cards);
    return $cards;
}

/**
 * Returns the musics with the bound idCard
 * @param int $nbCarte - the number of cards in the game
 * @return array of assoc arrays - Array[0] => (Array['key'] => value)
 */
function BindMusicsToCards($nbCarte) {
    $i = 0;
    $musics = PickMusics($nbCarte);
    $cards = CreateCardsArray($nbCarte);
    foreach ($cards as $card) {
            $musics[$i]['idCard'] = $card;
            $Cards_Musics[] = $musics[$i];
            $i++;
    }
    return $Cards_Musics;
}

function upload() {
    
}
