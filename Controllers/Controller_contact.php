<?php

include_once "Controllers/Controller.php";

include_once "Model/Model_idrymen.php";

class Controller_contact extends Controller {

    public function action_contact() {
        $this->render('contact_idrymen');
    }
    
    public function action_default() {
        $this->action_contact();
    }
}
