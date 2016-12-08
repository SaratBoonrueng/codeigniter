<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Catalog\Test\Repository;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class CatalogAttributeSet
 */
class CatalogAttributeSet extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['default'] = [
            'attribute_set_name' => 'Default',
            'attribute_set_id' => '4',
        ];

        $this->_data['custom_attribute_set'] = [
            'attribute_set_name' => 'Custom_attribute_set%isolation%',
            'skeleton_set' => [
                'dataset' => 'default',
            ],
            'assigned_attributes' => [
                'dataset' => 'attribute_type_dropdown,attribute_type_dropdown',
            ],
        ];

        $this->_data['custom_attribute_set_without_attributes'] = [
            'attribute_set_name' => 'Custom_attribute_set%isolation%',
            'skeleton_set' => [
                'dataset' => 'default',
            ],
        ];

        $this->_data['with_filterable_options'] = [
            'attribute_set_name' => 'Filterable_attribute_set%isolation%',
            'skeleton_set' => [
                'dataset' => 'default',
            ],
            'assigned_attributes' => [
                'dataset' => 'filterable_attribute,filterable_attribute',
            ],
        ];

        $this->_data['custom_attribute_set_with_fpt'] = [
            'attribute_set_name' => 'Custom_attribute_set%isolation%',
            'skeleton_set' => [
                'dataset' => 'default',
            ],
            'assigned_attributes' => [
                'dataset' => 'attribute_type_fpt',
            ],
        ];
    }
}
