<?php

abstract class Model{
    private $bdd;


    // Methode qui permet la connection avec notre base de donnees
    protected function executeQuery($sql, $param = null){
        if($param == null){
            $resultat = $this->connectionDB()->query($sql);
        }else{
            $resultat = $this->connectionDB()->prepare($sql);
            $resultat->execute($param);
        }

        return $resultat;
    }

    private function connectionDB(){
        if ($this->bdd == null)
            $this->bdd = new PDO('mysql:host=localhost;dbname=ensat;charset=utf8','root', '',  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));            
        return $this->bdd;
    }

}  





















    // function connectionDB(){
    //     $bdd = new PDO('mysql:host=localhost;dbname=ensat;charset=utf8','root', '');            
    //     return $bdd;
    // }

    // function getStudents(){
    //     $bdd = connectionDB();
    //     $resultat = $bdd->query('SELECT * FROM ELEVES');
    //     return $resultat;
    // }


    // function addStudent($param1, $param2, $param3, $param4, $param5, $param6, $param7, $param8){
    //     try{
    //         //add student
    //         $sql = "INSERT INTO ELEVES (CNE, Nom, Prenom, Adresse, Ville, email, Photo, etat)  VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    //         $bdd = connectionDB();
    //         $result = $bdd->prepare($sql);
    
    //         $result->bindParam(1, $cne);
    //         $result->bindParam(2, $lastName);
    //         $result->bindParam(3, $firstName);
    //         $result->bindParam(4, $adress);
    //         $result->bindParam(5, $city);
    //         $result->bindParam(6, $email);
    //         $result->bindParam(7, $fileNewName);
    //         $result->bindParam(8, $etat);

    //         $cne = $param1; 
    //         $lastName = $param2; 
    //         $firstName = $param3; 
    //         $adress = $param4; 
    //         $city = $param5; 
    //         $email = $param6; 
    //         $fileNewName = $param7; 
    //         $etat = $param8;

    //         $result->execute();

    //         echo "New records created successfully";
    //     }catch(PDOException $e) {
    //         echo "Error: " . $e->getMessage();
    //     }
    // }               