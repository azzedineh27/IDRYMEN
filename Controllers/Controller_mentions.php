<?php

include_once "Controllers/Controller.php";

include_once "Model/Model_idrymen.php";

class Controller_mentions extends Controller {

    public function action_mentions() {
        $this->render('mentions_idrymen');
    }

    public function action_politique() {
        $this->render('politique_idrymen');
    }
    
    public function action_default() {
        $this->action_mentions();
    }
}
