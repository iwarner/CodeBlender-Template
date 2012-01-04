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
class PortfolioController extends Zend_Controller_Action
{

    /**
     * Action
     */
    public function indexAction()
    {
        // Portfolio Table
        $portfolioTable = new Default_Model_DbTable_Portfolio();

        // Get All
        $rowSet = $portfolioTable->getAll();
    }

    /**
     * Action
     */
    public function viewAction()
    {
        // Invoke the Config
        $this->view->project = $this->_getParam('project');
    }

}
