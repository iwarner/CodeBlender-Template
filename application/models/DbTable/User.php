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
 * Model
 *
 * @category  CodeBlender
 * @package   Template
 * @copyright Copyright (c) 2011 Triangle Solutions Ltd. (http://www.triangle-solutions.com/)
 * @license   http://codeblender.net/license
 */
class Default_Model_DbTable_User extends CodeBlender_Db_Table_Abstract
{

    /**
     * Validate
     *
     * @param array  $data
     */
    public function validate($data)
    {
        // Filters
        $filters = array(
            '*' => array('StringTrim', 'StripTags')
        );

        // Vaidators
        $validators = array(
            'id' => array(
                'Digits'
            ),
            'ip' => array(
                array('Ip',
                    array('allowipv6' => false)
            )),
            'name' => array(
                array('Alnum', true)
            ),
            'email' => array(
                'presence' => 'required',
                array('EmailAddress'),
                array('StringLength', 5, 150)
            ),
            'phone' => array(
                'Digits'
            ),
            'subject' => array(
                'Alpha'
            ),
            'creation_date' => array(
                'Digits'
            ),
            'revision_date' => array(
                'Digits'
            ),
            'status' => array(
                'Alpha'
            )
        );

        // Process
        return parent::validateProcess($filters, $validators, $data);
    }

}
