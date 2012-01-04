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
        // Create any core page elements
        $this->view->siteTitle = 'CodeBlender Admin Template';
    }
}
