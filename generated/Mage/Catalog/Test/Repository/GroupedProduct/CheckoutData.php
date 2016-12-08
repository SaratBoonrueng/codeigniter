<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Catalog\Test\Repository\GroupedProduct;

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
                    'product_key_0' => '100',
                    'product_key_1' => '100',
                    'product_key_2' => '100',
                ],
                'qty' => [
                    'product_key_0' => '3',
                    'product_key_1' => '1',
                    'product_key_2' => '2',
                ],
                'subtotal' => [
                    'product_key_0' => '300',
                    'product_key_1' => '100',
                    'product_key_2' => '200',
                ],
            ],
        ];
    }
}
