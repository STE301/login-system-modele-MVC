<?php
    require 'model.php';
try{
    if( isset($_POST['signup']) && !empty($_FILES['picture'])) {

        $cne = $_POST['cne'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $city = $_POST['city'];
        $email = $_POST['email'];
        $adress = $_POST['adresse'];
        
        
        $fileName = $_FILES['picture']['name'];
        $fileTmpName = $_FILES['picture']['tmp_name'];
        $fileSize = $_FILES['picture']['size'];
        $fileError = $_FILES['picture']['error'];
        $fileType = $_FILES['picture']['type'];

        $fileExtension = explode('.', $fileName);
        $fileActualExtension = strtolower(end($fileExtension));
        $allowedExtensions = array('jpeg', 'png', 'jpg', 'pdf');
        if(in_array($fileActualExtension, $allowedExtensions)) {
            if($fileError === 0){

                if($fileSize < 100000){
                    
                    $fileDestination = 'uploads/' . strtoupper($lastName) . '.' . $fileActualExtension;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    $res = addStudent($cne, $lastName, $firstName, $adress, $city, $email, $fileDestination, '0');

                }else{
                    echo 'your file size is too big !';
                }
                
            }else{
                echo 'there was an error uploading your file !';
            }
                
        }else{
            echo 'files of this type can\'t be uploaded!';
        }
    }

}catch(Exception $except){
    $msgErreur = $except->getMessage() ;
    require 'viewError.php';
}
        
