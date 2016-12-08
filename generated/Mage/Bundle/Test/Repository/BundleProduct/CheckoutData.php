<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Bundle\Test\Repository\BundleProduct;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class CheckoutData
 */
class CheckoutData extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['default_dynamic'] = [
            'options' => [
                'bundle_options' => [
                    'option_key_0' => [
                        'title' => 'Drop-down Option',
                        'type' => 'Drop-down',
                        'value' => [
                            'name' => 'product_key_1',
                            'qty' => '2',
                        ],
                    ],
                ],
            ],
            'cartItem' => [
                'options' => [
                    'bundle_options' => [
                        'option_key_0' => [
                            'price' => '50',
                        ],
                    ],
                ],
                'price' => '100',
                'subtotal' => '100',
            ],
        ];

        $this->_data['default_fixed'] = [
            'options' => [
                'bundle_options' => [
                    'option_key_0' => [
                        'title' => 'Drop-down Option',
                        'type' => 'Drop-down',
                        'value' => [
                            'name' => 'product_key_1',
                            'qty' => '3',
                        ],
                    ],
                ],
            ],
            'qty' => '1',
            'cartItem' => [
                'options' => [
                    'bundle_options' => [
                        'option_key_0' => [
                            'price' => '6',
                        ],
                    ],
                ],
                'price' => '768',
                'subtotal' => '768',
            ],
        ];

        $this->_data['dynamic_with_tier_price'] = [
            'options' => [
                'bundle_options' => [
                    'option_key_0' => [
                        'value' => [
                            'name' => 'product_key_0',
                            'qty' => '2',
                        ],
                    ],
                ],
            ],
            'qty' => '15',
            'cartItem' => [
                'options' => [
                    'bundle_options' => [
                        'option_key_0' => [
                            'price' => '76',
                        ],
                    ],
                ],
                'price' => '152',
                'subtotal' => '2,280.00',
            ],
        ];

        $this->_data['dynamic_with_group_price'] = [
            'options' => [
                'bundle_options' => [
                    'option_key_0' => [
                        'value' => [
                            'name' => 'product_key_0',
                            'qty' => '4',
                        ],
                    ],
                ],
            ],
            'qty' => '7',
            'cartItem' => [
                'options' => [
                    'bundle_options' => [
                        'option_key_0' => [
                            'price' => '10',
                        ],
                    ],
                ],
                'price' => '40',
                'subtotal' => '40',
            ],
        ];

        $this->_data['fixed_with_special_price'] = [
            'options' => [
                'bundle_options' => [
                    'option_key_0' => [
                        'value' => [
                            'name' => 'product_key_1',
                            'qty' => '3',
                        ],
                    ],
                ],
            ],
            'qty' => '2',
            'cartItem' => [
                'options' => [
                    'bundle_options' => [
                        'option_key_0' => [
                            'price' => '0.6',
                        ],
                    ],
                ],
                'price' => '11.8',
                'subtotal' => '23.6',
            ],
        ];

        $this->_data['dynamic_as_low_as_price'] = [
            'options' => [
                'bundle_options' => [
                    'option_key_0' => [
                        'value' => [
                            'name' => 'product_key_1',
                            'qty' => '1',
                        ],
                    ],
                ],
            ],
            'qty' => '3',
            'cartItem' => [
                'options' => [
                    'bundle_options' => [
                        'option_key_0' => [
                            'price' => '50',
                        ],
                    ],
                ],
                'price' => '50',
                'subtotal' => '150',
            ],
        ];

        $this->_data['fixed_as_low_as_price'] = [
            'options' => [
                'bundle_options' => [
                    'option_key_0' => [
                        'value' => [
                            'name' => 'product_key_1',
                            'qty' => '2',
                        ],
                    ],
                ],
            ],
            'qty' => '4',
            'cartItem' => [
                'options' => [
                    'bundle_options' => [
                        'option_key_0' => [
                            'price' => '6',
                        ],
                    ],
                ],
                'price' => '112',
                'subtotal' => '448',
            ],
        ];

        $this->_data['all_types_bundle_fixed_and_custom_options'] = [
            'options' => [
                'bundle_options' => [
                    'option_key_0' => [
                        'value' => [
                            'name' => 'product_key_0',
                            'qty' => '2',
                        ],
                    ],
                    'option_key_1' => [
                        'value' => [
                            'name' => 'product_key_0',
                            'qty' => '2',
                        ],
                    ],
                    'option_key_2' => [
                        'value' => [
                            'name' => 'product_key_0',
                        ],
                    ],
                    'option_key_3' => [
                        'value' => [
                            'name' => 'product_key_0',
                        ],
                    ],
                ],
                'custom_options' => [
                    '0' => [
                        'title' => 'attribute_key_0',
                        'value' => 'Field',
                    ],
                    '1' => [
                        'title' => 'attribute_key_1',
                        'value' => 'Area',
                    ],
                    '2' => [
                        'title' => 'attribute_key_3',
                        'value' => 'option_key_0',
                    ],
                    '3' => [
                        'title' => 'attribute_key_4',
                        'value' => 'option_key_0',
                    ],
                    '4' => [
                        'title' => 'attribute_key_5',
                        'value' => 'option_key_0',
                    ],
                    '5' => [
                        'title' => 'attribute_key_6',
                        'value' => 'option_key_0',
                    ],
                    '6' => [
                        'title' => 'attribute_key_7',
                        'value' => '12/12/2014',
                    ],
                    '7' => [
                        'title' => 'attribute_key_8',
                        'value' => '12/12/2014/12/30/AM',
                    ],
                    '8' => [
                        'title' => 'attribute_key_9',
                        'value' => '12/12/AM',
                    ],
                ],
            ],
            'qty' => '4',
            'cartItem' => [
                'options' => [
                    'bundle_options' => [
                        'option_key_0' => [
                            'price' => '5',
                        ],
                        'option_key_1' => [
                            'price' => '5',
                        ],
                        'option_key_2' => [
                            'price' => '5',
                        ],
                        'option_key_3' => [
                            'price' => '5',
                        ],
                    ],
                ],
                'price' => '290',
                'subtotal' => '1,160.00',
            ],
        ];
    }
}
