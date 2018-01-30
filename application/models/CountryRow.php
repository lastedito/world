<?php

class CountryRow extends Zend_Db_Table_Row_Abstract {

    public function getCapitale() {
        $ville = NULL;
        $ville = $this->findParentRow('City', 'MaCapitale');
        return is_null($ville) ? "<b>N/A</b>" : $ville->Name;
    }

    public function getVilles() {
        return $this->findDependentRowset('City', 'MonPays');
    }

    public function getNbVilles() {
        return count($this->findDependentRowset('City'));
    }
    
    public function getNbLanguesParlees(){
        return count($this->findManyToManyRowset('Language', 'CountryLanguage'));
    }
    
    public function getLanguesParlees(){
        $select = $this->select()->order("percentage desc");
        return $this->findManyToManyRowset('Language', 'CountryLanguage', NULL, NULL, $select);
    }
    
    public function getInfosLanguesParlees(){
        return $this->findDependentRowset('CountryLanguage','Pays');
    }
    
}

?>
