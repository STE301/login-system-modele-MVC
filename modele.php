<?php
function getRes1(){
$bdd = new PDO('mysql:host=localhost;dbname=dbensat;charset=utf8','root', '');
$res1 = $bdd ->query ('SELECT * FROM eleves');            
return $res1;
        }
