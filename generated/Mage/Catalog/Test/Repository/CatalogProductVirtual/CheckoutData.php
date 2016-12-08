<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Catalog\Test\Repository\CatalogProductVirtual;

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
                'price' => '10',
                'qty' => '3',
                'subtotal' => '30',
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
                'price' => '120.00',
                'subtotal' => '240.00',
            ],
        ];

        $this->_data['with_special_price'] = [
            'qty' => '2',
            'cartItem' => [
                'price' => '10',
                'qty' => '3',
                'subtotal' => '20',
            ],
        ];

        $this->_data['with_tier_price'] = [
            'qty' => '4',
            'cartItem' => [
                'price' => '15',
                'qty' => '4',
                'subtotal' => '60',
            ],
        ];

        $this->_data['with_grouped_price'] = [
            'qty' => '2',
            'cartItem' => [
                'price' => '90.00',
                'subtotal' => '180.00',
            ],
        ];

        $this->_data['three_simple_products'] = [
            'options' => [
                '0' => [
                    'name' => 'product_key_0',
                    'qty' => '3',
                ],
                '1' => [
                    'name' => 'product_key_1',
                    'qty' => '1',
                ],
                '2' => [
                    'name' => 'product_key_2',
                    'qty' => '2',
                ],
            ],
            'cartItem' => [
                'price' => [
                    'product_key_0' => '560',
                    'product_key_1' => '40',
                    'product_key_2' => '100',
                ],
                'qty' => [
                    'product_key_0' => '3',
                    'product_key_1' => '1',
                    'product_key_2' => '2',
                ],
                'subtotal' => [
                    'product_key_0' => '1680',
                    'product_key_1' => '40',
                    'product_key_2' => '200',
                ],
            ],
        ];
    }
}
