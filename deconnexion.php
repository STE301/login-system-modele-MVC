<?php 
session_start();
if(isset($_SESSION['user'])){
    session_destroy();
    header('location:./index.html');} else{
        header('location:allMembers.php?reponse=\"Violation d\'accés\"');
    }
?>
