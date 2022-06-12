<?php
session_start();
if(isset($_SESSION['user'])){

require_once 'CONTROLER/Router.php';

$router = new Router();
$router->routeRequest();

}else{
    header('location:../index.php?reponse=\"Violation d\'accés\"');
}