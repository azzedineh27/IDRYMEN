<?php

include_once "Controllers/Controller.php";

include_once "Model/Model_idrymen.php";

class Controller_accueil extends Controller {

    public function action_accueil() {
        $this->render('accueil_idrymen');
    }
    
    public function action_default() {
        $this->action_accueil();
    }
}
