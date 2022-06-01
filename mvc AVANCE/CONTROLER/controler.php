<?php
    require 'MODEL/model.php';

    function welcomePage(){
        $list = getStudents();
        require 'viewWelcome.php';
    }

    function errorPage($msgErreur){
        require 'viewError.php';
    }
