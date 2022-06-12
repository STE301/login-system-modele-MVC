<?php
    require 'modele.php';

    try{
        $list = getStudents();
        require 'viewWelcome.php';
    }

    catch(Exception $except){
        $msgErreur = $except->getMessage() ;
        require 'viewError.php';
    }
