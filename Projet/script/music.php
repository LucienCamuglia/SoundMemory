<?php

/*
  Module : M152
  Project : 18 - SoundMemory
  Page    : include.php
  InfoPage: Page contenant toutes les fonctions PHP relative au musique.
  Autor   : Camuglia Lucien, Perez Ivan
  Date    : 21.11.2014
  Version : 1.0

 */

define('HOST', "localhost");
define('DB_NAME', "soundmemory");
define('USER', 'root');
define('PASSWORD', '');

// DB Connection
/**
 * Starts a Database connection
 * @staticvar null $pdo
 * @return $pdo the database
 */
function DBConnect() {
    try {
        static $pdo = null;
        if ($pdo === null) {
            $pdo = new PDO('mysql:host=' . HOST . ';dbname=' . DB_NAME, USER, PASSWORD);
            $pdo->exec('set character set utf8;');
        }
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    return $pdo;
}

/**
 * Read all Medias from "Medias"
 * @return array of assoc arrays - [0] => Array([Name] => [Value]), etc
 */
require_once 'functions.php';

function ReadMedias() {
    $pdo = DBConnect();
    $query = 'SELECT * FROM Medias';
    $st = $pdo->prepare($query);
    $st->execute();
    $result = $st->fetchAll(PDO::FETCH_ASSOC);
    if (!empty($result)) {
        return $result;
    } else {
        return FALSE;
    }
}

/**
 * Read all Musics from "Medias"
 * @return array of assoc arrays - [0] => Array([Name] => [Value]), etc
 */
function ReadMusics() {
    $pdo = DBConnect();
    $query = 'SELECT * FROM Medias WHERE MediaType = "Sound"';
    $st = $pdo->prepare($query);
    $st->execute();
    $result = $st->fetchAll(PDO::FETCH_ASSOC);
    if (!empty($result)) {
        return $result;
    } else {
        return FALSE;
    }
}

/**
 * Reads a Media from "Medias"
 * @param integer $Id - The id of the media you want
 * @return Assoc Array - all the values from the record [Name] => [Value]
 */
function ReadMediaById($Id) {
    $pdo = DBConnect();
    $query = 'SELECT * FROM Medias WHERE idMedia=' . $Id;
    $st = $pdo->prepare($query);
    $st->execute();
    $result = $st->fetch(PDO::FETCH_ASSOC);
    return $result;
}

/**
 * Adds a media to "Medias"
 * @param enum $MediaType - An image or a music
 * @param string $Name - the name of the media
 * @param string $Path - the path of the media
 * @return integer - the id of the newly inserted media
 */
function AddMedia($MediaType, $Name, $Path) {
    $pdo = DBConnect();
    $query = 'INSERT INTO Medias (MediaType, Name, Path)
                    VALUES(:MediaType,:Name,:Path)';
    $st = $pdo->prepare($query);
    $st->execute(array(
        'MediaType' => $MediaType,
        'Name' => $Name,
        'Path' => $Path));
    $id = $pdo->LastInsertID();
    return $id;
}

/**
 * Updates a media from "Medias"
 * @param integer $id - the id of the media
 * @param enum $MediaType - an image or a song
 * @param string $Name - the name of the media
 * @param string $Path - the path of the media
 * @return integer $id - the id of the modified Media
 */
function UpdateMedia($id, $MediaType, $Name, $Path) {
    $pdo = DBConnect();
    $query = 'Update Medias 
                SET MediaType=:MediaType, Name=:Name, Path=:Path
                WHERE idMedia=:id';
    $st = $pdo->prepare($query);
    $st->execute(array(
        'id' => $id,
        'MediaType' => $MediaType,
        'Name' => $Name,
        'Path' => $Path));
    $id = $pdo->LastInsertID();
    return $id;
}

/**
 * Deletes a media from "Medias"
 * @param integer $id - the id of the media
 */
function DeleteMedia($id) {
    $pdo = DBConnect();
    $query = 'DELETE FROM Medias
            WHERE idMedia=:id';
    $st = $pdo->prepare($query);
    $st->execute(array(
        'id' => $id));
}
