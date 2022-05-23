<?php
function connectionDB(){
    $bdd = new PDO('mysql:host=localhost;dbname=dbensat;charset=utf8','root', '',  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));            
    return $bdd;
}

function getEleve(){
    $bdd = connectionDB();
    $resultat = $bdd->query('SELECT * FROM ELEVES');
    return $resultat;
}


function addEleve($a, $b, $c, $d, $e, $f, $g, $h){
try{
    //add student
    $sql = "INSERT INTO ELEVES (CNE, Nom, Prenom, Adresse, Ville, email, Photo, etat)  VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $bdd = connectionDB();
    $result = $bdd->prepare($sql);
    
    $result->bindParam(1, $cne);
    $result->bindParam(2, $lastName);
    $result->bindParam(3, $firstName);
    $result->bindParam(4, $adress);
    $result->bindParam(5, $city);
    $result->bindParam(6, $email);
    $result->bindParam(7, $fileNewName);
    $result->bindParam(8, $etat);

    $cne = $a; $lastName = $b; $firstName = $c; $adress = $d; $city = $e; $email = $f; $fileNewName = $g; $etat = $h;

    $result->execute();

    echo "New records created successfully";
}catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
}               
