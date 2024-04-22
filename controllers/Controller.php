
<?php 


class Controller{

    // render view
    public function view($view, $data=[]){
        require_once "views/".$view.".php";
    }

    public function home(){
        require_once('views/home.php');
    }
}