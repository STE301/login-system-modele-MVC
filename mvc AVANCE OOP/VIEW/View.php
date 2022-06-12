<?php
class View{
    //nom du fichier de la vue a afficher
    private $file;
    //titre de la fenetre de la vue
    private $title;

    public function __construct($action){
        $this->file = "VIEW/View".$action.".php";
    }

    public function generer($data){
        $content = $this->genererFichier($this->file, $data);
        $view = $this->genererFichier('VIEW/template.php', array('title'=>$this->title, 'content' => $content));
        echo $view;
    }

    private function genererFichier($file, $data){
        if (file_exists($file)){
            extract($data);
            ob_start();
            require $file;
            return ob_get_clean();
        }else{
            throw new Exception("Fichier '$file' introuvable");
        }
    }
}
