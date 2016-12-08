<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Catalog\Test\Repository;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class CatalogProductAttribute
 */
class CatalogProductAttribute extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['default'] = [
            'attribute_code' => 'attribute_label%isolation%',
            'frontend_label' => 'attribute_label%isolation%',
            'frontend_input' => 'Text Field',
            'is_required' => 'No',
        ];

        $this->_data['attribute_type_dropdown'] = [
            'frontend_label' => 'attribute_dropdown%isolation%',
            'attribute_code' => 'attribute_dropdown%isolation%',
            'frontend_input' => 'Select/Dropdown',
            'is_configurable' => 'Yes',
            'options' => [
                'dataset' => 'with_three_options',
            ],
        ];

        $this->_data['filterable_attribute'] = [
            'frontend_label' => 'filterable_attribute%isolation%',
            'attribute_code' => 'filterable_attribute%isolation%',
            'frontend_input' => 'Select/Dropdown',
            'is_configurable' => 'Yes',
            'is_filterable' => 'Filterable (with results)',
            'options' => [
                'dataset' => 'with_three_options',
            ],
        ];

        $this->_data['attribute_type_fpt'] = [
            'frontend_label' => 'fpt_%isolation%',
            'attribute_code' => 'fpt_%isolation%',
            'frontend_input' => 'Fixed Product Tax',
        ];
    }
}
