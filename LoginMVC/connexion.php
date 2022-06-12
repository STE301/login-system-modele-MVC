<?php
if(isset($_POST['user']) && isset($_POST['pass']) ){
    session_start();
    $compte = $_POST['user'];
    $pass   = $_POST['pass'];  
   
    $bdd = new PDO('mysql:host=localhost;dbname=ensat;charset=utf8','root', '',  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
// Create connection and Check connection
if (!$bdd) {
  echo "Échec lors de la connexion à la BD : " ; exit;
}else{
//Connected successfully to MYSQL server
/* requête à executer */
$sql = "SELECT user, passwd FROM comptes
 WHERE user ='".addslashes($compte)."' AND passwd = '".addslashes($pass)."'";

$res = $bdd->query($sql) ;

$rowcount= $res->rowCount();
if($rowcount==1){
  $_SESSION['user']=$_POST['user'];
  header('location:MVC/index.php');
}else{
header('location:index.php?reponse=\"Nom d\'utilisateur ou mot de passe non valide\"');
}
}
}
?>
