<?php

class City extends Zend_Db_Table_Abstract {

    //put your code here
    protected $_name = 'City';
    protected $_primary = 'id';
    protected $_rowClass = 'CityRow';
    
    protected $_referenceMap = array(
        'MonPays' => array(
            'columns' => 'idCountry',
            'refTableClass' => 'Country',
            'refColumns' => 'id'
            ));

}

?>
