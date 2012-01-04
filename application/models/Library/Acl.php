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
 * ACL
 *
 * @category  CodeBlender
 * @package   Template
 * @copyright Copyright (c) 2011 Triangle Solutions Ltd. (http://www.triangle-solutions.com/)
 * @license   http://codeblender.net/license
 */
class Default_Model_Library_Acl extends Zend_Acl
{

    /**
     * Construct
     */
    public function __construct()
    {
        // Default Module
        $this->add(new Zend_Acl_Resource('default'));
        $this->add(new Zend_Acl_Resource('defaultindex'));
        $this->add(new Zend_Acl_Resource('defaulthelper'));

        // Admin Module
        $this->add(new Zend_Acl_Resource('admin'));

        // Core Module
        $this->add(new Zend_Acl_Resource('core'));
        $this->add(new Zend_Acl_Resource('corecache'));
        $this->add(new Zend_Acl_Resource('corelogin'));
        $this->add(new Zend_Acl_Resource('corelogout'));
        $this->add(new Zend_Acl_Resource('coreregister'));

        // Add Roles
        $this->addRole(new Zend_Acl_Role('guest'));
        $this->addRole(new Zend_Acl_Role('administrator'));

        // Add Access Rules
        // Rule #1: Guests can access the home page
        $this->deny('guest');

        // Rule #2: Guests can access the following pages
        $this->allow('guest', array('core', 'corelogin', 'coreregister', 'default', 'admin'));

        // Rule #1: Allow login to be accessible by anyone except logged in people
        $this->deny('administrator', array('corelogin', 'coreregister'));

        // Rule #3: Administrators can access everything
        $this->allow('administrator');
    }

}
