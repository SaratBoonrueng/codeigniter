<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Catalog\Test\Repository\CatalogProductSimple;

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
        $this->_data['default'] = [
            'qty' => '3',
            'cartItem' => [
                'price' => '100.00',
                'subtotal' => '300.00',
            ],
        ];

        $this->_data['order_default'] = [
            'qty' => '1',
            'cartItem' => [
                'price' => '100.00',
                'subtotal' => '100.00',
            ],
        ];

        $this->_data['with_one_custom_option'] = [
            'options' => [
                'custom_options' => [
                    '0' => [
                        'title' => 'attribute_key_0',
                        'value' => 'option_key_0',
                    ],
                ],
            ],
            'qty' => '2',
            'cartItem' => [
                'price' => '10034.00',
                'subtotal' => '20068.00',
            ],
        ];

        $this->_data['drop_down_with_one_option_percent_price'] = [
            'options' => [
                'custom_options' => [
                    '0' => [
                        'title' => 'attribute_key_0',
                        'value' => 'option_key_0',
                    ],
                ],
            ],
        ];

        $this->_data['with_two_custom_option'] = [
            'options' => [
                'custom_options' => [
                    '0' => [
                        'title' => 'attribute_key_0',
                        'value' => 'option_key_0',
                    ],
                    '1' => [
                        'title' => 'attribute_key_1',
                        'value' => 'Content option %isolation%',
                    ],
                ],
            ],
            'qty' => '1',
            'cartItem' => [
                'price' => '340',
                'subtotal' => '340',
            ],
        ];

        $this->_data['drop_down_with_one_option_fixed_price'] = [
            'options' => [
                'custom_options' => [
                    '0' => [
                        'title' => 'attribute_key_0',
                        'value' => 'option_key_0',
                    ],
                ],
            ],
        ];
    }
}
