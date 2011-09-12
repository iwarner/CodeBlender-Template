<?php

/**
 * CodeBlender
 *
 * @category  CodeBlender
 * @package   Template
 * @copyright Copyright (c) 2011 Triangle Solutions Ltd. (http://www.triangle-solutions.com/)
 * @license   http://codeblender.net/license
 */

/**
 * Bootstrap
 *
 * @category  CodeBlender
 * @package   Template
 * @copyright Copyright (c) 2011 Triangle Solutions Ltd. (http://www.triangle-solutions.com/)
 * @license   http://codeblender.net/license
 *
 * @todo Make these entries into Resource plugins
 */
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

    /**
     * Save the config into the registry and create some short cuts registry
     * objects from this
     *
     * @return object Zend_Config $config
     */
    protected function _initSessionNamespace()
    {
        define('CODEBLENDER_SITENAME', preg_replace('/www./', '', $_SERVER['SERVER_NAME']));
    }

    /**
     * Save the config into the registry and create some short cuts registry
     * objects from this
     *
     * @return object Zend_Config $config
     */
    protected function _initCodeBlenderLog()
    {
        // Set up the logging
        if ($this->hasPluginResource('log')) {
            $resource = $this->getPluginResource('log');
            $log = $resource->getLog();
            Zend_Registry::set('log', $log);
        }
    }

    /**
     * Bootstrap autoloader for application resources
     *
     * @return Zend_Application_Module_Autoloader
     */
    protected function _initCodeBlenderDefaultAutoload()
    {
        // Set the auto load for the Default Module.
        $autoLoader = new Zend_Application_Module_Autoloader(array(
                'namespace' => 'Default',
                'basePath' => APPLICATION_PATH
            ));

        return $autoLoader;
    }

    /**
     * Create the default meta cache for the database tables
     *
     * @return void
     */
    protected function _initCodeBlenderDbCache()
    {
        if ($this->hasPluginResource('db')) {

            $this->bootstrap('db');

            // Bootstrap cache
            $this->bootstrap('cachemanager');
            $cache = $this->getResource('cachemanager')->getCache('codeblender');

            // Set DB metadata cache
            Zend_Db_Table_Abstract::setDefaultMetadataCache($cache);
        }
    }

    /**
     * Method to setup any Javascript Libraries needed for the site
     *
     * @return void
     */
    protected function _initCodeBlenderJavaScript()
    {
        $extjs = $this->getOption('extjs');

        // Check to see if ExtJS should be enabled
        if (!empty($extjs['enabled'])) {

            // Get the front controller
            $this->bootstrap('view');
            $layout = $this->getResource('view');

            CodeBlender_ExtJS::enableView($layout);
        }
    }

}
