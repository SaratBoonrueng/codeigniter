<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Bundle\Test\Repository\BundleProduct;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class BundleSelections
 */
class BundleSelections extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['default_dynamic'] = [
            'bundle_options' => [
                '0' => [
                    'title' => 'Drop-down Option',
                    'type' => 'Drop-down',
                    'required' => 'Yes',
                    'position' => '1',
                    'assigned_products' => [
                        '0' => [
                            'sku' => '%product_sku%',
                            'selection_qty' => '2',
                            'selection_can_change_qty' => 'Yes',
                        ],
                        '1' => [
                            'sku' => '%product_sku%',
                            'selection_qty' => '3',
                            'selection_can_change_qty' => 'Yes',
                        ],
                    ],
                ],
            ],
            'products' => [
                '0' => [
                    '0' => 'catalogProductSimple::default',
                    '1' => 'catalogProductSimple::50_dollar_product',
                ],
            ],
        ];

        $this->_data['default_fixed'] = [
            'bundle_options' => [
                '0' => [
                    'title' => 'Drop-down Option',
                    'type' => 'Drop-down',
                    'required' => 'Yes',
                    'position' => '0',
                    'assigned_products' => [
                        '0' => [
                            'sku' => '%product_sku%',
                            'selection_price_value' => '5',
                            'selection_price_type' => 'Fixed',
                            'selection_qty' => '2',
                            'selection_can_change_qty' => 'Yes',
                        ],
                        '1' => [
                            'sku' => '%product_sku%',
                            'selection_price_value' => '6',
                            'selection_price_type' => 'Fixed',
                            'selection_qty' => '3',
                            'selection_can_change_qty' => 'Yes',
                        ],
                    ],
                ],
            ],
            'products' => [
                '0' => [
                    '0' => 'catalogProductSimple::default',
                    '1' => 'catalogProductSimple::50_dollar_product',
                ],
            ],
        ];

        $this->_data['all_types_fixed'] = [
            'bundle_options' => [
                '0' => [
                    'title' => 'Drop-down Option',
                    'type' => 'Drop-down',
                    'required' => 'Yes',
                    'position' => '1',
                    'assigned_products' => [
                        '0' => [
                            'sku' => '%product_sku%',
                            'selection_price_value' => '5',
                            'selection_price_type' => 'Fixed',
                            'selection_qty' => '2',
                            'selection_can_change_qty' => 'Yes',
                        ],
                        '1' => [
                            'sku' => '%product_sku%',
                            'selection_price_value' => '6',
                            'selection_price_type' => 'Fixed',
                            'selection_qty' => '3',
                            'selection_can_change_qty' => 'Yes',
                        ],
                    ],
                ],
                '1' => [
                    'title' => 'Radio Button Option',
                    'type' => 'Radio Buttons',
                    'required' => 'Yes',
                    'position' => '2',
                    'assigned_products' => [
                        '0' => [
                            'sku' => '%product_sku%',
                            'selection_price_value' => '5',
                            'selection_price_type' => 'Fixed',
                            'selection_qty' => '2',
                            'selection_can_change_qty' => 'Yes',
                        ],
                        '1' => [
                            'sku' => '%product_sku%',
                            'selection_price_value' => '6',
                            'selection_price_type' => 'Fixed',
                            'selection_qty' => '3',
                            'selection_can_change_qty' => 'Yes',
                        ],
                    ],
                ],
                '2' => [
                    'title' => 'Checkbox Option',
                    'type' => 'Checkbox',
                    'required' => 'Yes',
                    'position' => '3',
                    'assigned_products' => [
                        '0' => [
                            'sku' => '%product_sku%',
                            'selection_price_value' => '5',
                            'selection_price_type' => 'Fixed',
                            'selection_qty' => '2',
                        ],
                        '1' => [
                            'sku' => '%product_sku%',
                            'selection_price_value' => '6',
                            'selection_price_type' => 'Fixed',
                            'selection_qty' => '3',
                        ],
                    ],
                ],
                '3' => [
                    'title' => 'Multiple Select Option',
                    'type' => 'Multiple Select',
                    'required' => 'Yes',
                    'position' => '4',
                    'assigned_products' => [
                        '0' => [
                            'sku' => '%product_sku%',
                            'selection_price_value' => '5',
                            'selection_price_type' => 'Fixed',
                            'selection_qty' => '2',
                        ],
                        '1' => [
                            'sku' => '%product_sku%',
                            'selection_price_value' => '6',
                            'selection_price_type' => 'Fixed',
                            'selection_qty' => '3',
                        ],
                    ],
                ],
            ],
            'products' => [
                '0' => [
                    '0' => 'catalogProductSimple::default',
                    '1' => 'catalogProductSimple::50_dollar_product',
                ],
                '1' => [
                    '0' => 'catalogProductSimple::default',
                    '1' => 'catalogProductSimple::50_dollar_product',
                ],
                '2' => [
                    '0' => 'catalogProductSimple::default',
                    '1' => 'catalogProductSimple::50_dollar_product',
                ],
                '3' => [
                    '0' => 'catalogProductSimple::default',
                    '1' => 'catalogProductSimple::50_dollar_product',
                ],
            ],
        ];

        $this->_data['all_types_dynamic'] = [
            'bundle_options' => [
                '0' => [
                    'title' => 'Drop-down Option',
                    'type' => 'Drop-down',
                    'required' => 'Yes',
                    'position' => '1',
                    'assigned_products' => [
                        '0' => [
                            'sku' => '%product_sku%',
                            'selection_qty' => '2',
                            'selection_can_change_qty' => 'Yes',
                        ],
                        '1' => [
                            'sku' => '%product_sku%',
                            'selection_qty' => '3',
                            'selection_can_change_qty' => 'Yes',
                        ],
                    ],
                ],
                '1' => [
                    'title' => 'Radio Button Option',
                    'type' => 'Radio Buttons',
                    'required' => 'Yes',
                    'position' => '2',
                    'assigned_products' => [
                        '0' => [
                            'sku' => '%product_sku%',
                            'selection_qty' => '2',
                            'selection_can_change_qty' => 'Yes',
                        ],
                        '1' => [
                            'sku' => '%product_sku%',
                            'selection_qty' => '3',
                            'selection_can_change_qty' => 'Yes',
                        ],
                    ],
                ],
                '2' => [
                    'title' => 'Checkbox Option',
                    'type' => 'Checkbox',
                    'required' => 'Yes',
                    'position' => '3',
                    'assigned_products' => [
                        '0' => [
                            'sku' => '%product_sku%',
                            'selection_qty' => '2',
                        ],
                        '1' => [
                            'sku' => '%product_sku%',
                            'selection_qty' => '3',
                        ],
                    ],
                ],
                '3' => [
                    'title' => 'Multiple Select Option',
                    'type' => 'Multiple Select',
                    'required' => 'Yes',
                    'position' => '4',
                    'assigned_products' => [
                        '0' => [
                            'sku' => '%product_sku%',
                            'selection_qty' => '2',
                        ],
                        '1' => [
                            'sku' => '%product_sku%',
                            'selection_qty' => '3',
                        ],
                    ],
                ],
            ],
            'products' => [
                '0' => [
                    '0' => 'catalogProductSimple::default',
                    '1' => 'catalogProductSimple::50_dollar_product',
                ],
                '1' => [
                    '0' => 'catalogProductSimple::default',
                    '1' => 'catalogProductSimple::50_dollar_product',
                ],
                '2' => [
                    '0' => 'catalogProductSimple::default',
                    '1' => 'catalogProductSimple::50_dollar_product',
                ],
                '3' => [
                    '0' => 'catalogProductSimple::default',
                    '1' => 'catalogProductSimple::50_dollar_product',
                ],
            ],
        ];

        $this->_data['with_not_required_options'] = [
            'bundle_options' => [
                '0' => [
                    'title' => 'Drop-down Option',
                    'type' => 'Drop-down',
                    'required' => 'No',
                    'position' => '0',
                    'assigned_products' => [
                        '0' => [
                            'sku' => '%product_sku%',
                            'selection_qty' => '2',
                            'selection_price_value' => '45',
                            'selection_price_type' => 'Fixed',
                            'selection_can_change_qty' => 'Yes',
                        ],
                        '1' => [
                            'sku' => '%product_sku%',
                            'selection_qty' => '3',
                            'selection_price_value' => '43',
                            'selection_price_type' => 'Fixed',
                            'selection_can_change_qty' => 'Yes',
                        ],
                    ],
                ],
                '1' => [
                    'title' => 'Radio Button Option',
                    'type' => 'Radio Buttons',
                    'required' => 'No',
                    'position' => '0',
                    'assigned_products' => [
                        '0' => [
                            'sku' => '%product_sku%',
                            'selection_qty' => '2',
                            'selection_price_value' => '45',
                            'selection_price_type' => 'Fixed',
                            'selection_can_change_qty' => 'Yes',
                        ],
                        '1' => [
                            'sku' => '%product_sku%',
                            'selection_qty' => '3',
                            'selection_price_value' => '43',
                            'selection_price_type' => 'Fixed',
                            'selection_can_change_qty' => 'Yes',
                        ],
                    ],
                ],
            ],
            'products' => [
                '0' => [
                    '0' => 'catalogProductSimple::default',
                    '1' => 'catalogProductSimple::50_dollar_product',
                ],
                '1' => [
                    '0' => 'catalogProductSimple::default',
                    '1' => 'catalogProductSimple::50_dollar_product',
                ],
            ],
        ];
    }
}
