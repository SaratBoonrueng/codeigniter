<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Adminhtml\Test\Repository;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class StoreGroup
 */
class StoreGroup extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['default'] = [
            'website_id' => [
                'dataset' => 'main_website',
            ],
            'name' => 'Main Website Store',
            'group_id' => '1',
            'root_category_id' => [
                'dataset' => 'default_category',
            ],
        ];

        $this->_data['custom'] = [
            'website_id' => [
                'dataset' => 'main_website',
            ],
            'name' => 'store_name_%isolation%',
            'root_category_id' => [
                'dataset' => 'default_category',
            ],
        ];

        $this->_data['custom_with_custom_web_site'] = [
            'website_id' => [
                'dataset' => 'custom_website',
            ],
            'name' => 'store_name_%isolation%',
            'root_category_id' => [
                'dataset' => 'default_category',
            ],
        ];
    }
}
