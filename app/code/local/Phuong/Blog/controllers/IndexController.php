<?php
class Phuong_Blog_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $subscription = Mage::getModel('blog/users');
        $subscription->setUsername('phuong');
        $subscription->setPassword('1234');
        $subscription->setEmail('phuong@gmail.com');
        $subscription->save();
        echo 'success';
    }

    public function usersAction()
    {
        $users = Mage::getModel('blog/users')->getCollection();
        foreach ($users as $user) {
            Zend_Debug::dump($user->debug());
        }
    }

    public function helloAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function collectionAction()
    {
        $productCollection = Mage::getModel('catalog/product')
            ->getCollection()
            ->addAttributeToSelect(array('name', 'price'))
            ->addAttributeToFilter('name', array('like' => '%Oxford%'));

        foreach ($productCollection as $product) {
            Zend_Debug::dump($product->debug());
        }
    }
}