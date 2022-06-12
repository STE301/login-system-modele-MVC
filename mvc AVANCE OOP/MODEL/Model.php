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
