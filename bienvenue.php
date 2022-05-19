<?php 
session_start();
if(isset($_SESSION['user'])){
    require 'accesdata.php';    
}
else{
    header('location:index.html?reponse=\"Violation d\'accés\"');
}
?>