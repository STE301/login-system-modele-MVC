<?php
    require_once 'MODEL/Student.php';
    require_once 'VIEW/View.php';

    class welcomeControler{
        private $student;
        
        public function __construct(){
            $this->student = new Student();
        }

        public function welcome(){
            $students = $this->student->getStudents();
            $view = new View("Welcome");
            $view->generer(array('list' => $students));
        }
    }

    // function welcomePage(){
    //     $list = getStudents();
    //     require './VIEW/viewWelcome.php';
    // }

    // function addStudentPage(){
    //    require './VIEW/viewAddStudent.php';
    // }


    // function errorPage($msgErreur){
    //     require './VIEW/viewError.php';
    // }