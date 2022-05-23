<?php $titre = "Ajouter Etudiant"; ?>
<?php ob_start(); ?>

<div class="main">

        <div class="add-form">
            <h2>ADD STUDENT</h2>
            
            <form method="post" action="addEleve.php" enctype="multipart/form-data">    
                <input type="text" name="firstName" placeholder="enter your first name...">
                <input type="text" name="lastName" placeholder="enter your last name...">
                <input type="text" name="cne" placeholder="enter your cne...">
                <input type="text" name="city" placeholder="enter your city...">
                <input type="text" name="email" placeholder="enter your email...">
                <input type="text" name="adresse" placeholder="enter your adresse...">
                <span>upload student's profile picture</span>
                <input type="file" name="picture">
                <button type="submit" name="signup">REGISTER</button>    
            </form>
    
        </div>
    </div>

<?php $contenu = ob_get_clean(); ?>
<?php require 'gabarit.php'; ?>
