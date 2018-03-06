<?php

class Phuong_Blog_Model_Resource_Users extends Mage_Core_Model_Resource_Db_Abstract
{
    public function _construct()
    {
        $this->_init('blog/users', 'user_id');
    }
}