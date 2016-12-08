<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Catalog\Test\Repository\CatalogProductConfigurable;

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
        $this->_data['with_tier_price'] = [
            '0' => [
                'percent' => '86',
            ],
            '1' => [
                'percent' => '77',
            ],
        ];
    }
}
