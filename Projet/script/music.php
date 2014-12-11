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


/**
     * Read all Medias from "Medias"
     * @return array of assoc arrays - [0] => Array([Name] => [Value]), etc
     */    
function ReadMedias()
    {
        $pdo = DBConnect();
        $query = 'SELECT * FROM Medias';
        $st = $pdo->prepare($query);
        $st->execute();
        $result = $st->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($result))
        {
            return $result;
        }
        else
        {
            return FALSE;
        }
    }
    
/**
     * Reads a Media from "Medias"
     * @param integer $Id - The id of the media you want
     * @return Assoc Array - all the values from the record [Name] => [Value]
     */
function ReadMediaById($Id)
    {
        $pdo = DBConnect();
        $query = 'SELECT * FROM Medias WHERE idMedia='.$Id;
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
function AddMedia($MediaType, $Name, $Path)
    {
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
 function UpdateMedia($id, $MediaType, $Name, $Path)
    {
        $pdo = DBConnect();
        $query = 'Update Medias 
                SET MediaType=:MediaType, Name=:Name, Path=:Path
                WHERE idMedia=:id';				 
        $st = $pdo->prepare($query);
        $st->execute(array(
            'id' => $id,
            'MediaPath' => $MediaPath,
            'Name' => $Name,
            'Path' => $Path));
	$id = $pdo->LastInsertID();
	return $id;
    }   
    
 /**
  * Deletes a media from "Medias"
  * @param integer $id - the id of the media
  */   
 function DeleteMedia($id)
    {
        $pdo = DBConnect();
	$query = 'DELETE FROM Medias
            WHERE idPMedia=:id';
	$st = $pdo->prepare($query);
	$st->execute(array(
            'id' => $id));
    }