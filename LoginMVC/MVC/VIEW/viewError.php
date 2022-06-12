<?php $this->title = 'Plateforme de l\'ENSAT'; ?>
<?php ob_start() ?>

<p>Une erreur est survenue : <?= $msgErreur ?></p>

<?php $this->content = ob_get_clean(); ?>
