<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Catalog\Test\Repository\CatalogProductSimple;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class TierPriceOptions
 */
class TierPriceOptions extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['for_all_groups'] = [
            '0' => [
                'price' => '15.00',
                'price_qty' => '3',
                'customer_group' => 'ALL GROUPS',
            ],
            '1' => [
                'price' => '24.00',
                'price_qty' => '15',
                'customer_group' => 'ALL GROUPS',
            ],
        ];
    }
}
