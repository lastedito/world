<?php

require_once "City.php";

class CityController extends Zend_Controller_Action {

    public function indexAction() {
        $ct = new City();
        $this->view->cities = $ct->fetchAll();
    }

}
?>