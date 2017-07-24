<?php

class Training_Example_Helper_DataTest extends PHPUnit_Framework_TestCase
{
    public function exampleHelperExists(){
        $this->assertTrue(
            class_exists($this->class),
            "Class {$this->class} doesn't exist."
        );
    }

    public function getRedirectTargetUrlReturnsValue()
    {
        $store = Mage::app()->getStore()
            ->setConfig('web/unsecure/base_url', 'http://magento.dev')
            ->setConfig(
                'training/example/redirect_target', 'training/example/redirect'
            );
        $urlModel = Mage::getModel('core/url')->setUseSession(false);
        $helper = new $this->class($store, $urlModel);

        $method = 'getRedirectTargetUrl';

        $this->assertTrue(
            is_callable(array($this->class, $method)),
            "{$this->class}::{$method} not callable."
        );

        $helper = new $this->class;
        $value = call_user_func(array($helper, $method));
        $expected = 'http://magento.dev/training/example/redirect';

        $this->assertSame($expected, $value);
    }

    public function getRedirectTargetUrl()
    {
        // Call method twice to check the number of calls are verified by mock
    }

}