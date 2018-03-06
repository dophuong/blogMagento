<?php
class Blog_Extend_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function helloAction()
    {
        $reviews = Mage::getModel('review/review')->getCollection();

        foreach ($reviews as $review) {
            Zend_Debug::dump($review->debug());
        }
    }

    public function flatAction()
    {
        $resource = Mage::getSingleton('core/resource');
        $connection = $resource->getConnection('core_read');

        $results = $connection->query('select * from admin_user')->fetchAll();

        Zend_Debug::dump($results);
    }
}