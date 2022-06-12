<?php
    require "./CONTROLER/controler.php";

    try {
        if (isset($_GET['action'])) {
            //
        }else {
            welcomePage(); 
        }
    }catch (Exception $e) { 
        echo $e->getMessage();
    }
    
    