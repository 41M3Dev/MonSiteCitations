<?php 
    try 
    {
        $bdd = new PDO("mysql:host=127.0.0.1;dbname=sitecitation;charset=utf8", "root", "");
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }
