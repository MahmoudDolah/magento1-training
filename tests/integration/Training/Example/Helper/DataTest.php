<?php
class Training_Example_DataTest extends PHPUnit_Framework_TestCase
{
    protected $class = 'Training_Example_Helper_Data';

    /**
    * @test
    */
    public function exampleHelperExists()
    {
        $this->assertTrue(
            class_exists($this->class),
            "Class {$this->class} doesn't exist."
        );
    }
}
