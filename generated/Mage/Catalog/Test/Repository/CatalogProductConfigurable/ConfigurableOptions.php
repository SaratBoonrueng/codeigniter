<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Catalog\Test\Repository\CatalogProductConfigurable;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class ConfigurableOptions
 */
class ConfigurableOptions extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['default'] = [
            'attributeSet' => [
                'dataset' => 'custom_attribute_set',
            ],
            'attributes_data' => [
                'attribute_key_0' => [
                    'options' => [
                        'option_key_0' => [
                            'price' => '12',
                            'price_type' => 'Percentage',
                        ],
                        'option_key_1' => [
                            'price' => '20',
                            'price_type' => 'Percentage',
                        ],
                        'option_key_2' => [
                            'price' => '18',
                            'price_type' => 'Percentage',
                        ],
                    ],
                ],
                'attribute_key_1' => [
                    'options' => [
                        'option_key_0' => [
                            'price' => '42.00',
                            'price_type' => 'Fixed',
                        ],
                        'option_key_1' => [
                            'price' => '40.00',
                            'price_type' => 'Fixed',
                        ],
                        'option_key_2' => [
                            'price' => '48.00',
                            'price_type' => 'Fixed',
                        ],
                    ],
                ],
            ],
            'products' => [
                'attribute_key_0:option_key_0 attribute_key_1:option_key_0' => 'catalogProductSimple::default',
                'attribute_key_0:option_key_1 attribute_key_1:option_key_1' => 'catalogProductSimple::default',
                'attribute_key_0:option_key_2 attribute_key_1:option_key_2' => 'catalogProductSimple::default',
            ],
        ];

        $this->_data['with_filterable_options'] = [
            'attributeSet' => [
                'dataset' => 'with_filterable_options',
            ],
            'attributes_data' => [
                'attribute_key_0' => [
                    'options' => [
                        'option_key_0' => [
                            'price' => '12',
                            'price_type' => 'Percentage',
                        ],
                        'option_key_1' => [
                            'price' => '20',
                            'price_type' => 'Percentage',
                        ],
                        'option_key_2' => [
                            'price' => '18',
                            'price_type' => 'Percentage',
                        ],
                    ],
                ],
                'attribute_key_1' => [
                    'options' => [
                        'option_key_0' => [
                            'price' => '42.00',
                            'price_type' => 'Fixed',
                        ],
                        'option_key_1' => [
                            'price' => '40.00',
                            'price_type' => 'Fixed',
                        ],
                        'option_key_2' => [
                            'price' => '48.00',
                            'price_type' => 'Fixed',
                        ],
                    ],
                ],
            ],
            'products' => [
                'attribute_key_0:option_key_0 attribute_key_1:option_key_0' => 'catalogProductSimple::default',
                'attribute_key_0:option_key_1 attribute_key_1:option_key_1' => 'catalogProductSimple::default',
                'attribute_key_0:option_key_2 attribute_key_1:option_key_2' => 'catalogProductSimple::default',
            ],
        ];

        $this->_data['quickCreation'] = [
            'attributes_data' => [
                'attribute_key_0' => [
                    'options' => [
                        'option_key_0' => [
                            'price' => '121.00',
                            'price_type' => 'Percentage',
                        ],
                    ],
                ],
                'attribute_key_1' => [
                    'options' => [
                        'option_key_0' => [
                            'price' => '412.00',
                            'price_type' => 'Fixed',
                        ],
                    ],
                ],
            ],
            'products' => [
                'attribute_key_0:option_key_0 attribute_key_1:option_key_0' => 'catalogProductSimple::quickCreation',
            ],
        ];

        $this->_data['createEmpty'] = [
            'attributes_data' => [
                'attribute_key_0' => [
                    'options' => [
                        'option_key_1' => [
                            'price' => '11.00',
                            'price_type' => 'Percentage',
                        ],
                    ],
                ],
                'attribute_key_1' => [
                    'options' => [
                        'option_key_1' => [
                            'price' => '76.00',
                            'price_type' => 'Fixed',
                        ],
                    ],
                ],
            ],
            'products' => [
                'attribute_key_0:option_key_1 attribute_key_1:option_key_1' => 'catalogProductSimple::withoutPersist',
            ],
        ];

        $this->_data['copyFromConfigurable'] = [
            'attributes_data' => [
                'attribute_key_0' => [
                    'options' => [
                        'option_key_2' => [
                            'price' => '33.00',
                            'price_type' => 'Percentage',
                        ],
                    ],
                ],
                'attribute_key_1' => [
                    'options' => [
                        'option_key_2' => [
                            'price' => '62.00',
                            'price_type' => 'Fixed',
                        ],
                    ],
                ],
            ],
            'products' => [
                'attribute_key_0:option_key_2 attribute_key_1:option_key_2' => 'catalogProductSimple::withoutPersist',
            ],
        ];

        $this->_data['with_out_of_stock_items'] = [
            'attributeSet' => [
                'dataset' => 'custom_attribute_set',
            ],
            'attributes_data' => [
                'attribute_key_0' => [
                    'options' => [
                        'option_key_0' => [
                            'price' => '12',
                            'price_type' => 'Percentage',
                        ],
                        'option_key_1' => [
                            'price' => '20',
                            'price_type' => 'Percentage',
                        ],
                        'option_key_2' => [
                            'price' => '18',
                            'price_type' => 'Percentage',
                        ],
                    ],
                ],
                'attribute_key_1' => [
                    'options' => [
                        'option_key_0' => [
                            'price' => '42.00',
                            'price_type' => 'Fixed',
                        ],
                        'option_key_1' => [
                            'price' => '40.00',
                            'price_type' => 'Fixed',
                        ],
                        'option_key_2' => [
                            'price' => '48.00',
                            'price_type' => 'Fixed',
                        ],
                    ],
                ],
            ],
            'products' => [
                'attribute_key_0:option_key_0 attribute_key_1:option_key_0' => 'catalogProductSimple::out_of_stock',
                'attribute_key_0:option_key_1 attribute_key_1:option_key_1' => 'catalogProductSimple::out_of_stock',
                'attribute_key_0:option_key_2 attribute_key_1:option_key_2' => 'catalogProductSimple::out_of_stock',
            ],
        ];
    }
}
