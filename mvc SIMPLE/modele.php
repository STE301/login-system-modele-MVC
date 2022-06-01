<?php
function getStudentsList(){
        $bdd = new PDO('mysql:host=localhost;dbname=ensat;charset=utf8','root', '');
        $result = $bdd ->query ('SELECT * FROM eleves');            
        return $result;
}
