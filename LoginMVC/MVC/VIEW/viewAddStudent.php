<?php $this->title = "Ajouter Etudiant"; ?>
<?php ob_start(); ?>

<div class="page-content">
<center>
    <div class="form-v5-content">
    <br>
    <h2>Ajouter un nouveau étudiant</h2>
            
        <form class="form-detail" method="post" action="index.php?action=cAddStudent" enctype="multipart/form-data">    
            <div class="form-row">
                <label for="firstName">PRENOM</label>
                <input type="text" name="firstName" class="input-text" placeholder="enter your first name...">
            </div>
            <br>
            <div class="form-row">
                <label for="full-name">NOM</label>
                <input type="text" name="lastName" class="input-text" placeholder="enter your last name...">
            </div>
            <br>
            <div class="form-row">
                <label for="full-name">CNE</label>
                <input type="text" name="cne" class="input-text" placeholder="enter your cne...">
            </div>
            <br>
            <div class="form-row">
                <label for="full-name">Ville</label>
                <input type="text" name="city" class="input-text" placeholder="enter your city...">
            </div>
            <br>
            <div class="form-row">
                <label for="your-email">Email</label>
                <input type="text" name="email" class="input-text" placeholder="enter your email...">
            </div>
            <br>
            <div class="form-row">
                <label for="full-name">Adresse</label>
                <input type="text" name="adresse" class="input-text" placeholder="enter your adresse...">
            </div>
            <br>
            <div class="form-row">
                <span style="color:red; font-size:12px;">upload student's profile picture</span>
                <input type="file" name="picture" class="form-control" required="true"> <br>
                <span style="color:red; font-size:12px;">Fichier jpg / jpeg/ png /gif obligatoire.</span>
               
            </div>
            <br>
            <div class="form-row-last">
                <input type="submit" class="register" value= 'ENREGISTRER'>  <br> <br>
            </div>  
        </form>
        <center><a href="./index.php"> <button>Retour</button></a></center>
        <br>
        <br>
    </div>
</center>
</div>

<?php $this->content = ob_get_clean(); ?>



