<?php
class Phuong_Blog_Model_Resource_Users_Collection
        extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    protected function _construct() {
        $this->_init('blog/users');
    }
}