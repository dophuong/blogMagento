<?php

class Phuong_Productslider_Block_Catalog_Product_List
    extends Mage_Catalog_Block_Product_List
    implements Mage_Widget_Block_Interface
{
    protected function _beforeToHtml() {
        return parent::_beforeToHtml();
    }

    protected function _prepareLayout() {
        $this->getLayout()->getBlock('head')->addCss('css/productslider.css');
        return parent::_prepareLayout();
    }
}