<?php

/**
 * CodeBlender
 *
 * @category  CodeBlender
 * @package   BootStrap
 * @copyright Copyright (c) 2011 Triangle Solutions Ltd. (http://www.triangle-solutions.com/)
 * @license   http://codeblender.net/license
 */

/**
 * Bootstrap script
 *
 * @category  CodeBlender
 * @package   BootStrap
 * @copyright Copyright (c) 2011 Triangle Solutions Ltd. (http://www.triangle-solutions.com/)
 * @license   http://codeblender.net/license
 */
class Admin_Bootstrap extends Zend_Application_Module_Bootstrap
{

    /**
     * Autoloader
     *
     * @return Zend_Application_Module_Autoloader
     */
    protected function _initCodeBlenderAdminAutoload()
    {
        // Set the auto load for the Default Module.
        $moduleLoader = new Zend_Application_Module_Autoloader(array(
                'namespace' => 'Admin',
                'basePath' => APPLICATION_PATH . '/modules/admin'
            ));

        return $moduleLoader;
    }

}
