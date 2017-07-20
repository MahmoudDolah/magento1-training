<?php
class Training_Example_DataTest extends PHPUnit_Framework_TestCase
{
    protected $class = 'Training_Example_Helper_Data';

    public static function setUpBeforeClass()
    {
        require_once __DIR__ . '/../../../../../htdocs/app/Mage.php';
        Mage::setIsDeveloperMode(true);
        Mage::app();
        $handler = set_error_handler(function () {});
        set_error_handler(function ($errno, $errstr, $errfile, $errline) use ($handler)
        {
            if (E_WARNING === $errno
                && 0 === strpos($errstr, 'include(')
                && substr($errfile, -19) == 'Varien/Autoload.php'
            ) {
                return null;
        }
        return call_user_func($handler, $errno, $errstr, $errfile, $errline);
        });
    }

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
