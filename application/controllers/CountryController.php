<?php

require_once "Country.php";

class CountryController extends Zend_Controller_Action {

    public function indexAction() {
        $ct = new Country();
        $this->view->countries = $ct->fetchAll();
    }

    public function villesAction() {
        $idPays = $this->_getParam('id', 1);
        $ct = new Country();
        $paysRow = $ct->find($idPays)->current();
        $villes = $paysRow->getVilles();
        $this->view->villes = $villes;
        $this->view->nomPays = $paysRow->Name;
    }

    public function languesAction(){
        $idPays=  $this->_getParam('id',1);
        $ct=new Country();
        $paysRow=$ct->find($idPays)->current();
        $lesLangues=$paysRow->getLanguesParlees();
        $lesInfosLangues=$paysRow->getInfosLanguesParlees();
        $this->view->lesInfosLangues=$lesInfosLangues;
        $this->view->lesLangues=$lesLangues;
        $this->view->nomPays=$paysRow->Name;

    }
    
    
}
?>