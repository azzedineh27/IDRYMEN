<?php

include_once "Controllers/Controller.php";

include_once "Model/Model_idrymen.php";

class Controller_services extends Controller {

    public function action_QSN() {
        $this->render('qsn_idrymen');
    }

    public function action_devis() {
        $this->render('devis_idrymen');
    }
    public function action_services() {
        $this->render('services_idrymen');
    }
    
    public function action_default() {
        $this->action_services();
    }
}
