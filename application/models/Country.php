<?php

class Country extends Zend_Db_Table_Abstract {

    protected $_name = 'Country';
    protected $_primary = 'id';
    protected $_rowClass = 'CountryRow';
    
    protected $_referenceMap = array(
        'MaCapitale' => array(
            'columns' => 'Capital',
            'refTableClass' => 'City',
            'refColumns' => 'id'
            ));

}

?>
