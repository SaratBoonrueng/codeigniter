<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Adminhtml\Test\Repository;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class Store
 */
class Store extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['default'] = [
            'group_id' => [
                'dataset' => 'default',
            ],
            'name' => 'Default Store View',
            'code' => 'base',
            'is_active' => 'Enabled',
            'store_id' => '1',
        ];

        $this->_data['custom'] = [
            'group_id' => [
                'dataset' => 'default',
            ],
            'name' => 'Custom_Store_%isolation%',
            'code' => 'code_%isolation%',
            'is_active' => 'Enabled',
        ];

        $this->_data['custom_with_custom_store_group'] = [
            'group_id' => [
                'dataset' => 'custom_with_custom_web_site',
            ],
            'name' => 'Custom_Store_%isolation%',
            'code' => 'code_%isolation%',
            'is_active' => 'Enabled',
        ];
    }
}
