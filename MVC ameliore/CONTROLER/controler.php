<?php
    require 'MODEL/model.php';

    function welcomePage(){
        $list = getStudents();
        require './VIEW/viewWelcome.php';
    }

    function errorPage($msgErreur){
        require './VIEW/viewError.php';
    }