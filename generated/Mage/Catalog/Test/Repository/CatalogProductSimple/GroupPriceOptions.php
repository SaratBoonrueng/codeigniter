<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Catalog\Test\Repository\CatalogProductSimple;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class GroupPriceOptions
 */
class GroupPriceOptions extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['for_not_logged_users'] = [
            '0' => [
                'price' => '90.00',
                'customer_group' => 'NOT LOGGED IN',
            ],
        ];

        $this->_data['tax_calculation'] = [
            '0' => [
                'price' => '90.99',
                'website' => 'All Websites [USD]',
                'customer_group' => 'General',
            ],
        ];
    }
}
