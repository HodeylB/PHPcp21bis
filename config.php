<?php

// a mettre absolument pour gérer les accents

mysqli_query($lien, "set names utf8");

$host= "localhost";
$user="root";
$password = "root";
$bdd = "linkedin"; // nom de la base de données

// connexion au serveur MySQL et choix de la BDD

$lien = mysqli_connect($host,$user,$password,$bdd);


?>