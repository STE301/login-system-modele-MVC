<?php
    require 'modele.php';

    try{
        $res1 = getEleve();
        require 'vueBienvenu.php';
    }

    catch(Exception $except){
        $msgErreur = $except->getMessage() ;
        require 'vueErreur.php';
    }
        
?>
