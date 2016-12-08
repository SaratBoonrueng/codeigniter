<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Catalog\Test\Repository\GroupedProduct;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class Associated
 */
class Associated extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['defaultSimpleProducts'] = [
            'assigned_products' => [
                '0' => [
                    'qty' => '3',
                ],
                '1' => [
                    'qty' => '2',
                ],
            ],
            'products' => 'catalogProductSimple::default,
                catalogProductSimple::100_dollar_product
            ',
        ];

        $this->_data['defaultSimpleProduct_with_specialPrice'] = [
            'assigned_products' => [
                '0' => [
                    'qty' => '2',
                ],
                '1' => [
                    'qty' => '4',
                ],
            ],
            'products' => '
                catalogProductSimple::product_with_special_price_and_category,catalogProductSimple::product_with_special_price_and_category
            ',
        ];

        $this->_data['defaultSimpleProduct_with_groupPrice'] = [
            'assigned_products' => [
                '0' => [
                    'qty' => '3',
                ],
                '1' => [
                    'qty' => '4',
                ],
            ],
            'products' => 'catalogProductSimple::simple_with_group_price,
                catalogProductSimple::simple_with_group_price
            ',
        ];

        $this->_data['defaultSimpleProduct_with_tierPrice'] = [
            'assigned_products' => [
                '0' => [
                    'qty' => '4',
                ],
                '1' => [
                    'qty' => '3',
                ],
            ],
            'products' => 'catalogProductSimple::simple_with_tier_price,
                catalogProductSimple::simple_with_tier_price
            ',
        ];

        $this->_data['defaultVirtualProducts'] = [
            'assigned_products' => [
                '0' => [
                    'qty' => '4',
                ],
                '1' => [
                    'qty' => '2',
                ],
            ],
            'products' => 'catalogProductVirtual::order_default,
                catalogProductVirtual::order_default
            ',
        ];

        $this->_data['three_simple_products'] = [
            'assigned_products' => [
                '0' => [
                    'qty' => '17',
                ],
                '1' => [
                    'qty' => '36',
                ],
                '2' => [
                    'qty' => '20',
                ],
            ],
            'products' => 'catalogProductSimple::grouped_default,
                catalogProductSimple::grouped_default,catalogProductSimple::100_dollar_product
            ',
        ];
    }
}
