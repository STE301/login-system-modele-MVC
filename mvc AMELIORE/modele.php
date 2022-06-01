<?php
    function connectionDB(){
        $bdd = new PDO('mysql:host=localhost;dbname=ensat;charset=utf8','root', '',  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));            
        return $bdd;
    }

    function getStudents(){
        $bdd = connectionDB();
        $resultat = $bdd->query('SELECT * FROM ELEVES');
        return $resultat;
    }


    function addStudent($param1, $param2, $param3, $param4, $param5, $param6, $param7, $param8){
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

            $cne = $param1; 
            $lastName = $param2; 
            $firstName = $param3; 
            $adress = $param4; 
            $city = $param5; 
            $email = $param6; 
            $fileNewName = $param7; 
            $etat = $param8;

            $result->execute();

            echo "New records created successfully";
        }catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }               
