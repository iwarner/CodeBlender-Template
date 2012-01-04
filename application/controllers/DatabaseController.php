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
class DatabaseController extends Zend_Controller_Action
{

    /**
     * Action
     */
    public function indexAction()
    {
        $userTable = new Default_Model_DbTable_User();
        $rowSet = $userTable->fetchAll();
        $row = $rowSet->current();

        Zend_Debug::dump($row->toArray());
    }

}
