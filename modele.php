<?php
function getRes1(){
$mysqli = mysqli_connect("localhost", "root", "", "dbensat");
            if(!$mysqli){
                die("connection failed: ");
                exit();
            }
            else{
                $sql1 = "SELECT * FROM eleves ;";
                $res1 = mysqli_query($mysqli,$sql1);
            }
return $res1;
        }