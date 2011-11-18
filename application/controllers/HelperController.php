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
 * Controller
 *
 * @category  CodeBlender
 * @package   Template
 * @copyright Copyright (c) 2011 Triangle Solutions Ltd. (http://www.triangle-solutions.com/)
 * @license   http://codeblender.net/license
 */
class HelperController extends Zend_Controller_Action
{

    /**
     * Init
     */
    public function init()
    {
        // Layout
        Zend_Layout::getMvcInstance()->setLayoutPath(APPLICATION_PATH . '/layouts/scripts/default');
    }

    /**
     * Action
     */
    public function indexAction()
    {

    }

    /**
     * Action
     */
    public function facebookAction()
    {

    }

    /**
     * Action
     */
    public function googleAction()
    {

    }

    /**
     * Action
     */
    public function messageAction()
    {

    }

    /**
     * Action
     */
    public function socialAction()
    {

    }
}
