<?php

require_once "./MODEL/Model.php";

class Student extends Model{

    // Methode qui permet lq selection de tous les eleves de la base de donnees
    public function getStudents(){
        $sql = 'SELECT * FROM ELEVES';
        $resultat = $this->executeQuery($sql);
        return $resultat;
    } 

    // Methode qui permet de rechercher si un etudiant existe dans la base de donnees a partir du cne
    // private function existStudent($cne){
        private function existStudent($cne){
        $sql = 'SELECT * FROM ELEVES WHERE cne = ? ';
            $resultat = $this->executeQuery($sql, array($cne));
            $count = $resultat->rowCount();
            // var_dump($count);

            if($count != 0){
            ?>
            <br>
            <center>
                <h3>Cet étudiant / CNE existe déjà dans la liste</h3> 
                <a href="http://localhost/LoginMVC/MVC/index.php"> <button>Annuler</button></a>
            </center>  
            <?php
                return false;
            }
     }

    // Methode qui permet l'insertion d'un eleve de la base de donnees
    public function addStudent($param1, $param2, $param3, $param4, $param5, $param6, $param7, $param8){
        try{

            $test = $this->existStudent($param1);

            if($test === false){ return false; }
            
            $sql = "INSERT INTO ELEVES (CNE, Nom, Prenom, Adresse, Ville, email, Photo, etat)  VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $resultat = $this->executeQuery($sql, array($param1, $param2, $param3, $param4, $param5, $param6, $param7, $param8));

            if($resultat){
            ?>
            <br>
            <center>
                <h3>Le nouveau étudiant a bien été ajouté</h3> 
                <a href="http://localhost/LoginMVC/MVC/index.php"> <button>Voir la liste des étudiants</button></a>
            </center>  
            <?php
            }
            
        }catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }  

}