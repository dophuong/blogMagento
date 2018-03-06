<?php

class Phuong_Blog_Adminhtml_Blog_UserController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->_addContent($this->getLayout()->createBlock('blog/adminhtml_user'));

        $this->renderLayout();
    }
}