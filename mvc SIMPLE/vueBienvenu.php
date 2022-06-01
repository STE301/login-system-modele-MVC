<!--Affichage-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Plateforme de l'ENSAT</title>
</head>
<body>
    <tbody>
    <h2 class="h12">Liste des étudiants</h2>
    <hr>
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
            <?php   foreach ($list as $row){    ?>
            <tr>
                <td><?= $row['CNE'];?></td>
                <td><?= $row['Nom'];?></td>
                <td><?= $row['Prenom'];?></td>
                <td><?= $row['Adresse'];?></td>
                <td><?= $row['Ville'];?></td>
                <td><?= $row['email'];?></td>
                <td><img src="<?= $row['Photo'];?>" width="100%"></td>
                <td><?= $row['etat'];?></td>
            </tr>
            <?php } ?>
        </table> 
    <br>
    <br>
    <center><a href="#"> <button>Deconnexion</button></a></center>  
    <br>
    </tbody>
</body>
</html>
