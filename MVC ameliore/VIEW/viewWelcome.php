<?php $titre = 'Plateforme de L\'ENSAT'; ?>

<?php ob_start(); ?>

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

<center><a href="http://localhost/PROJET_AMECHNOUE/MVC simple/index.php?action=vAddStudent"> <button>Ajouter Etudiant</button></a></center>  
<center><a href="#"> <button>Deconnexion</button></a></center>  

<?php $contenu = ob_get_clean(); ?>
<?php require './RESOURCES/template.php'; ?>