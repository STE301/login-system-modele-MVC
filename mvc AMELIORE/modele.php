<?php
function connectionDB(){
    $bdd = new PDO('mysql:host=localhost;dbname=dbensat;charset=utf8','root', '',  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));            
    return $bdd;
}

function getEleve(){
    $bdd = connectionDB();
    $resultat = $bdd->query('SELECT * FROM ELEVE');
    return $resultat;
}
