<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Admin\Test\Repository;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class User
 */
class User extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['default'] = [
            'username' => 'AdminUser%isolation%',
            'firstname' => 'FirstName%isolation%',
            'lastname' => 'LastName%isolation%',
            'email' => 'email%isolation%@example.com',
            'password' => '123123q',
            'password_confirmation' => '123123q',
            'is_active' => 'Active',
            'current_password' => '123123q',
        ];

        $this->_data['custom_admin'] = [
            'username' => 'AdminUser%isolation%',
            'firstname' => 'FirstName%isolation%',
            'lastname' => 'LastName%isolation%',
            'email' => 'email%isolation%@example.com',
            'password' => '123123q',
            'password_confirmation' => '123123q',
            'current_password' => '123123q',
            'is_active' => 'Active',
            'role_id' => [
                'dataset' => 'administrators',
            ],
        ];

        $this->_data['admin_without_role'] = [
            'username' => 'AdminUser%isolation%',
            'firstname' => 'FirstName%isolation%',
            'lastname' => 'LastName%isolation%',
            'email' => 'email%isolation%@example.com',
            'password' => '123123q',
            'password_confirmation' => '123123q',
            'current_password' => '123123q',
            'is_active' => 'Active',
        ];

        $this->_data['admin_for_installation'] = [
            'username' => 'AdminUserInstall%isolation%',
            'firstname' => 'FirstName%isolation%',
            'lastname' => 'LastName%isolation%',
            'email' => 'email%isolation%@example.com',
            'password' => '123123q',
            'password_confirmation' => '123123q',
        ];

        $this->_data['admin_install_admin'] = [
            'username' => 'admin',
            'firstname' => 'FirstName%isolation%',
            'lastname' => 'LastName%isolation%',
            'email' => 'email%isolation%@example.com',
            'password' => '123123q',
            'password_confirmation' => '123123q',
        ];
    }
}
