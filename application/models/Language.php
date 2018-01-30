<?php

class Language extends Zend_Db_Table_Abstract{
    protected $_name = 'Language';
    protected $_primary = 'id';
    protected $_rowClass = 'LanguageRow';
}

?>
