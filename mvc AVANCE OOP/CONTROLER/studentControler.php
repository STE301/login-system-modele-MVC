<?php
    require_once 'MODEL/Student.php';
    require_once 'VIEW/View.php';


    class studentControler{
        private $student;

        public function __construct(){
            $this->student = new Student();
        }

        public function addStudentPage(){
            $view = new View("AddStudent");
            $view->generer(array());
        }

        public function addStudentCtrl($prenom, $nom, $code, $ville, $mail, $adresse){

            $cne = $code;
            $firstName = $prenom;
            $lastName = $nom;
            $city = $ville;
            $email = $mail;
            $adress = $adresse;
            
            
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
                        $this->student->addStudent($cne, $lastName, $firstName, $adress, $city, $email, $fileDestination, '0');
    
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
    }

 
        
?>
