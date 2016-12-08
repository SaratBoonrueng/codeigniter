<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Catalog\Test\Repository\CatalogProductConfigurable;

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
            'options' => [
                'configurable_options' => [
                    '0' => [
                        'title' => 'attribute_key_0',
                        'value' => 'option_key_1',
                    ],
                    '1' => [
                        'title' => 'attribute_key_1',
                        'value' => 'option_key_1',
                    ],
                ],
            ],
            'qty' => '2',
            'cartItem' => [
                'price' => '160.00',
                'qty' => '2',
                'subtotal' => '320.00',
            ],
        ];

        $this->_data['with_custom_options'] = [
            'options' => [
                'configurable_options' => [
                    '0' => [
                        'title' => 'attribute_key_0',
                        'value' => 'option_key_1',
                    ],
                    '1' => [
                        'title' => 'attribute_key_1',
                        'value' => 'option_key_1',
                    ],
                ],
                'custom_options' => [
                    '0' => [
                        'title' => 'attribute_key_0',
                        'value' => 'option_key_0',
                    ],
                ],
            ],
            'qty' => '2',
            'cartItem' => [
                'price' => '194.80',
                'qty' => '2',
                'subtotal' => '389.60',
            ],
        ];
    }
}
