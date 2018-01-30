<?php

class CityRow extends Zend_Db_Table_Row_Abstract{
        public function getPays() {
        return $this->findParentRow("country")->Name;
    }
    
}

?>
