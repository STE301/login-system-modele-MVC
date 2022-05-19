<?php
if(isset($_POST['user']) && isset($_POST['pass']) ){
    session_start();
    $compte = $_POST['user'];
    $pass   = $_POST['pass'];  
//paramètres d'accès au serveur base de données MySQL    
$mysqli = mysqli_connect("localhost", "root", "", "dbensat");

// Create connection and Check connection
if (!$mysqli) {
  echo "Échec lors de la connexion à MySQL : " . mysqli_connect_error();
  exit();
}else{
//Connected successfully to MYSQL server
/* requête à executer */
$sql = "SELECT user, passwd FROM comptes
 WHERE user ='".addslashes($compte)."' AND passwd = '".addslashes($pass)."'";

$res = mysqli_query($mysqli, $sql);
$rowcount=mysqli_num_rows($res);
if($rowcount==1){
  $_SESSION['user']=$_POST['user'];
  header('location:bienvenue.php');
}else{
header('location:index.php?reponse=\"Nom d\'utilisateur ou mot de passe non valide\"');
}
}
}
?>
