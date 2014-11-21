<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
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
    
    