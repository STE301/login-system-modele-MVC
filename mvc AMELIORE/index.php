<?php
    require 'modele.php';

    try{
        $res1 = getEleve();
        require 'vueBienvenu.php';
    }

    catch(Exception $except){
        echo '<html><body>Erreur ! ' . $except->getMessage() . '</body></html>';
    }
        
?>
