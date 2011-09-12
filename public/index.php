<?php

/**
 * Index
 *
 * @category  CodeBlender
 * @package   CodeBlender
 * @copyright Copyright (c) 2000-2011 Triangle Solutions Ltd. (http://www.triangle-solutions.com/)
 * @license   http://codeblender.net/license
 */
// Define application environment - this should be setup in the Apache Virtualhost
defined('APPLICATION_ENV') || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));

// Define Path Constants
defined('ROOT_PATH') || define('ROOT_PATH', realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR));
defined('APPLICATION_PATH') || define('APPLICATION_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'application');
defined('DATA_PATH') || define('DATA_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'data');
defined('PUBLIC_PATH') || define('PUBLIC_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'public');
defined('CODEBLENDER_PATH') || define('CODEBLENDER_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'CodeBlender');

// Set up the include path for the Library files
set_include_path(implode(PATH_SEPARATOR, array(
        ROOT_PATH . '/library'
    )));

// Set up the for Local Development
if (APPLICATION_ENV == 'development') {

    // Put error viewing on for development
    ini_set('display_errors', 1);
    error_reporting(E_ALL ^ E_DEPRECATED);
}

// Catching any Exceptions
try {

    require_once 'Zend/Application.php';

    // Instantiate Zend Application and run the codeblender config.
    $application = new Zend_Application(
            APPLICATION_ENV,
            APPLICATION_PATH . '/configs/application.ini'
    );

    $application->bootstrap()->run();
} catch (exception $e) {

    if ($e->getPrevious()) {
        echo '[' . get_class($e) . '] has the previous exception of [' . get_class($e->getPrevious()) . ']';
    } else {
        echo '[' . get_class($e) . '] does not have a previous exception<br />';
    }

    echo "Caught exception: " . get_class($e) . "<br />";
    echo "Message: " . $e->getMessage() . "<br />";
    echo '<pre>';
    print_r($e);
    echo '</pre>';
}
