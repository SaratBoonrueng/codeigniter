<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Catalog\Test\Repository\CatalogProductVirtual;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class Price
 */
class Price extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['default'] = [
            '0' => [
                'category_price' => '100.00',
                'category_special_price' => '90.00',
                'product_price' => '100.00',
                'product_special_price' => '90.00',
                'cart_price' => '126.00',
            ],
        ];

        $this->_data['with_tier_price'] = [
            '0' => [
                'percent' => '85',
            ],
            '1' => [
                'percent' => '76',
            ],
        ];
    }
}
