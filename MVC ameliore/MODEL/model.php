<?php
    function connectionDB(){
        $bdd = new PDO('mysql:host=localhost;dbname=ensat;charset=utf8','root', '');            
        return $bdd;
    }

    function getStudents(){
        $bdd = connectionDB();
        $resultat = $bdd->query('SELECT * FROM ELEVES');
        return $resultat;
    }
      