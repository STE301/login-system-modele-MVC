<?php
    require_once "./CONTROLER/welcomeControler.php";
    require_once "./CONTROLER/studentControler.php";
    require_once 'VIEW/View.php';

    class Router{
        private $ctrlWelcome;
        private $ctrlStudent;

        public function __construct(){
            $this->ctrlWelcome = new welcomeControler();
            $this->ctrlStudent = new studentControler();
        }

        public function routeRequest() {
            try {
                if (isset($_GET['action'])) {
                    if ($_GET['action'] == 'vAddStudent') {
                        $this->ctrlStudent->addStudentPage();
                    }else if($_GET['action'] == 'cAddStudent'){
                            $prenom = $this->getParameter("firstName");
                            $nom = $this->getParameter("lastName");
                            $code = $this->getParameter( "cne");
                            $ville = $this->getParameter("city");
                            $mail = $this->getParameter("email");
                            $adresse = $this->getParameter("adresse");
                            
                            $this->ctrlStudent->addStudentCtrl($prenom, $nom, $code, $ville, $mail, $adresse);
                        
                    }
            
                }else {
                    $this->ctrlWelcome->welcome(); 
                }
            }catch (Exception $e) { 
                 echo $this->error($e->getMessage());
            }
        }

        private function error($errorMsg){
            $view = new View("Error");
            $view->generer(array('msgErreur' => $errorMsg));
        }

        private function getParameter(string $name){
            if(!empty($_POST[$name])){
                return $_POST[$name];
            }else{
                throw new Exception("parameter " .$name. "  is absent"); 
            }
        }


    }


    
    
