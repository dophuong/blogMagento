<?php

class Phuong_Blog_Model_Source_Config_Relation
{
    public function toOptionArray()
    {
        return array(
            array(
                'value' => null,
                'label' => Mage::helper('blog')->__('--Please Select--'),
            ),
            array(
                'value' => 'bronze',
                'label' => Mage::helper('blog')->__('Bronze'),
            ),
            array(
                'value' => 'silver',
                'label' => Mage::helper('blog')->__('Silver'),
            ),
            array(
                'value' => 'gold',
                'label' => Mage::helper('blog')->__('Gold')
            )
        );
    }
}