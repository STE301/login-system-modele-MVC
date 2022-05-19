<!--Affichage-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="designstyle.css">
    <title>Plateforme de l'ENSAT</title>
</head>
<body>
<tbody>
<h2 class="h12">Liste des étudiants</h2>
<h2 class="h12">****************</h2>
<br>
        <table class="table1">
            <tr class="tete">
                <td>CNE</td>
                <td>Nom</td>
                <td>Prenom</td>
                <td>Adresse</td>
                <td>Ville</td>
                <td>Email</td>
                <td>Photo d'identité</td>
                <td>Etat</td>
            </tr>
            <?php  
                // LOOP TILL END OF DATA 
                foreach ($res1 as $res1) :
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $res1['CNE'];?></td>
                <td><?php echo $res1['Nom'];?></td>
                <td><?php echo $res1['Prenom'];?></td>
                <td><?php echo $res1['Adresse'];?></td>
                <td><?php echo $res1['Ville'];?></td>
                <td><?php echo $res1['email'];?></td>
                <td><img src="<?php echo $res1['Photo'];?>" width="100%"></td>
                <td><?php echo $res1['etat'];?></td>
            </tr>
            <?php
                endforeach; 
             ?>
        </table> 
        <br>
        <br>
        <center><a href="deconnexion.php"> <button>Deconnexion</button></a></center> <br> <br>
</tbody>
</body>
</html>
