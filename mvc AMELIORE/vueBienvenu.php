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
            <?php   foreach ($res1 as $res1){    ?>
            <tr>
                <td><?php echo $res1['CNE'];?></td>
                <td><?php echo $res1['Nom'];?></td>
                <td><?php echo $res1['Prenom'];?></td>
                <td><?php echo $res1['Adresse'];?></td>
                <td><?php echo $res1['Ville'];?></td>
                <td><?php echo $res1['email'];?></td>
                <td><img src="<?php echo $res1['Photo'];?>" width="100%"></td>
                <td><?php echo $res1['etat'];?></td>
            </tr>
            <?php } ?>
</table> 

<center><a href="#"> <button>Deconnexion</button></a></center>  

<?php $contenu = ob_get_clean(); ?>
<?php require 'gabarit.php'; ?>
