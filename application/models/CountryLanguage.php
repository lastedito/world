<?php

class CountryLanguage extends Zend_Db_Table_Abstract {

    protected $_name = 'CountryLanguage';
    protected $_primary = array('idCountry', 'idLanguage');
    
    protected $_referenceMap = array(
        'Langue' => array(
            'columns' => array('idLanguage'),
            'refTableClass' => 'Language',
            'refColumns' => array('id')
        ),
        'Pays' => array(
            'columns' => array('idCountry'),
            'refTableClass' => 'Country',
            'refColumns' => array('id')
        )
    );

}

?>
