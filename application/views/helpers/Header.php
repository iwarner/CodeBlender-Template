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
 * Helper
 *
 * @category  CodeBlender
 * @package   Template
 * @copyright Copyright (c) 2011 Triangle Solutions Ltd. (http://www.triangle-solutions.com/)
 * @license   http://codeblender.net/license
 */
class Default_View_Helper_Header extends Zend_View_Helper_Abstract
{

    /**
     * Header
     */
    public function header()
    {
        // Google Library
        $this->view->google_AjaxLibraries(array(
            'library' => 'jquery',
            'version' => 1
        ));

        // Google Library
        $this->view->google_AjaxLibraries(array(
            'library' => 'jqueryui',
            'version' => 1
        ));

        $this->view->headScript()->appendFile('http://cdn.jquerytools.org/1.2.4/tiny/jquery.tools.min.js', 'text/javascript');
        $this->view->headScript()->appendFile($this->view->jsPath . '/main.js', 'text/javascript');
    }

}
