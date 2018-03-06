<?php

class Phuong_Blog_Model_Posts extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        $this->_init('blog/posts');
    }
}
