<?php $titre = 'Plateforme de l\'ENSAT'; ?>
<?php ob_start() ?>

<p>Une erreur est survenue : <?= $msgErreur ?></p>

<?php $contenu = ob_get_clean(); ?>
<?php require 'template.php'; ?>
