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
class Admin_IndexController extends Zend_Controller_Action
{

    /**
     * Action
     */
    public function indexAction()
    {
        // Layout
        Zend_Layout::getMvcInstance()->setLayoutPath(APPLICATION_PATH . '/layouts/scripts/admin');
    }

}
