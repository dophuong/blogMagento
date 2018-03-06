<?php

class Phuong_Blog_Block_Adminhtml_User extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct(array $args = array())
    {
        $this->_headerText = Mage::helper('blog')->__('Blog users');

        $this->_blockGroup = 'blog';
        $this->_controller = 'adminhtml_user';

        parent::__construct();
    }

    public function _prepareLayout() {

        $this->_removeButton('add');

        return parent::_prepareLayout(); // TODO: Change the autogenerated stub
    }
}