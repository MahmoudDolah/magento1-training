<?php

// Mage::setIsDeveloperMode(true);
// Mage::app();

require_once __DIR__ . '../../htdocs/app/Mage.php';

set_error_handler(function ($errno, $errstr, $errfile, $errline)
{
    if (E_WARNING ===$errno
        && 0 === strpos($errstr, 'include(')
        && substr($errfile, -19) == 'Varien/Autoload.php'
    ) {
        return null;
    }
});