<?php

function db()
{
    try
    {
        $db = new PDO('mysql:host=localhost;charset=utf8;dbname=keskonmange', 'root', 'QE20170421_ec19');
    }
    catch (PDOException $e)
    {
        print "Erreur : ".$e->getMessage()."<br/>";
        die();
    }

    return $db;
}