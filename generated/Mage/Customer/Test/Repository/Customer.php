<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Customer\Test\Repository;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class Customer
 */
class Customer extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['default'] = [
            'firstname' => 'John',
            'lastname' => 'Doe',
            'group_id' => [
                'dataset' => 'General',
            ],
            'email' => 'JohnDoe_%isolation%@example.com',
            'password' => '123123q',
            'confirmation' => '123123q',
        ];

        $this->_data['default_frontend'] = [
            'firstname' => 'John',
            'lastname' => 'Doe',
            'email' => 'JohnDoe_%isolation%@example.com',
        ];

        $this->_data['default_frontend_new'] = [
            'firstname' => 'John',
            'lastname' => 'Doe',
            'email' => 'JohnDoe_%isolation%@example.com',
            'password' => '123123q',
            'confirmation' => '123123q',
        ];

        $this->_data['frontend_register_multiship_address'] = [
            'firstname' => 'John',
            'lastname' => 'Doe',
            'email' => 'JohnDoe_%isolation%@example.com',
            'password' => '123123q',
            'confirmation' => '123123q',
            'address' => [
                'dataset' => 'customer_US_login_miltiship',
            ],
        ];

        $this->_data['johndoe_unique'] = [
            'firstname' => 'John',
            'lastname' => 'Doe%isolation%',
            'group_id' => [
                'dataset' => 'General',
            ],
            'email' => 'JohnDoe_%isolation%@example.com',
            'password' => '123123q',
            'confirmation' => '123123q',
            'address' => [
                'dataset' => 'US_address_NY',
            ],
        ];

        $this->_data['johndoe_unique_TX'] = [
            'firstname' => 'John',
            'lastname' => 'Doe%isolation%',
            'group_id' => [
                'dataset' => 'General',
            ],
            'email' => 'JohnDoe_%isolation%@example.com',
            'password' => '123123q',
            'confirmation' => '123123q',
            'address' => [
                'dataset' => 'US_address_TX',
            ],
        ];

        $this->_data['johndoe_conditions'] = [
            'firstname' => 'John',
            'lastname' => 'Doe',
            'group_id' => [
                'dataset' => 'Retailer',
            ],
            'email' => 'JohnDoe_%isolation%@example.com',
            'password' => '123123q',
            'confirmation' => '123123q',
            'address' => [
                'dataset' => 'US_address_NY',
            ],
            'dob' => '01/01/1990',
            'gender' => 'Male',
        ];

        $this->_data['customer_with_two_addresses'] = [
            'firstname' => 'John',
            'lastname' => 'Doe',
            'group_id' => [
                'dataset' => 'General',
            ],
            'email' => 'JohnDoe_%isolation%@example.com',
            'password' => '123123q',
            'confirmation' => '123123q',
            'address' => [
                'dataset' => 'US_address_NY,US_address_TX',
            ],
        ];

        $this->_data['johndoe_with_addresses'] = [
            'firstname' => 'John',
            'lastname' => 'Doe',
            'group_id' => [
                'dataset' => 'General',
            ],
            'email' => 'JohnDoe_%isolation%@example.com',
            'password' => '123123q',
            'confirmation' => '123123q',
            'address' => [
                'dataset' => 'US_address',
            ],
        ];

        $this->_data['uk_with_vat'] = [
            'firstname' => 'John',
            'lastname' => 'Doe',
            'group_id' => [
                'dataset' => 'General',
            ],
            'email' => 'JohnDoe_%isolation%@example.com',
            'password' => '123123q',
            'confirmation' => '123123q',
            'address' => [
                'dataset' => 'customer_UK_with_vat',
            ],
        ];
    }
}
