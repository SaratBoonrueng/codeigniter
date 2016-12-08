<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Admin\Test\Repository;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class Role
 */
class Role extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['administrators'] = [
            'rolename' => 'Administrators',
            'resource_access' => 'All',
            'role_id' => '1',
        ];

        $this->_data['custom'] = [
            'rolename' => 'Custom%isolation%',
            'gws_is_all' => 'All',
            'current_password' => '123123q',
            'resource_access' => 'Custom',
            'roles_resources' => [
                'preset' => 'sales',
            ],
        ];

        $this->_data['custom_with_gws_scope'] = [
            'rolename' => 'Custom%isolation%',
            'gws_is_all' => 'Custom',
            'current_password' => '123123q',
            'resource_access' => 'Custom',
            'roles_resources' => [
                'preset' => 'sales',
            ],
            'gws_store_groups' => [
                'datasets' => 'custom',
            ],
        ];
    }
}
