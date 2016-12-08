<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\CatalogRule\Test\Repository;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class CatalogRule
 */
class CatalogRule extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['default'] = [
            'name' => 'CatalogPriceRule %isolation%',
            'description' => 'Catalog Price Rule Description',
            'website_ids' => [
                'dataSets' => [
                    '0' => 'main_website',
                ],
            ],
            'customer_group_ids' => [
                '0' => 'NOT LOGGED IN',
            ],
            'simple_action' => 'By Percentage of the Original Price',
            'discount_amount' => '50',
        ];

        $this->_data['catalog_price_rule_priority_0'] = [
            'name' => 'catalog_price_rule_priority_0 %isolation%',
            'description' => '-50% of price, Priority = 0',
            'is_active' => 'Active',
            'website_ids' => [
                'datasets' => [
                    '0' => 'main_website',
                ],
            ],
            'customer_group_ids' => [
                '0' => 'NOT LOGGED IN',
            ],
            'sort_order' => '0',
            'simple_action' => 'By Percentage of the Original Price',
            'discount_amount' => '50',
        ];

        $this->_data['catalog_price_rule_priority_1_stop_further_rules'] = [
            'name' => 'catalog_price_rule_priority_1_stop_further_rules %isolation%',
            'description' => 'Priority 1, -5 By fixed amount',
            'is_active' => 'Active',
            'website_ids' => [
                'datasets' => [
                    '0' => 'main_website',
                ],
            ],
            'customer_group_ids' => [
                '0' => 'NOT LOGGED IN',
            ],
            'sort_order' => '1',
            'simple_action' => 'By Fixed Amount',
            'discount_amount' => '5',
            'stop_rules_processing' => 'Yes',
        ];

        $this->_data['catalog_price_rule_priority_2'] = [
            'name' => 'catalog_price_rule_priority_2 %isolation%',
            'description' => 'Priority 2, -10 By fixed amount',
            'is_active' => 'Active',
            'website_ids' => [
                'datasets' => [
                    '0' => 'main_website',
                ],
            ],
            'customer_group_ids' => [
                '0' => 'NOT LOGGED IN',
            ],
            'sort_order' => '2',
            'simple_action' => 'By Fixed Amount',
            'discount_amount' => '10',
        ];

        $this->_data['active_catalog_price_rule_with_conditions'] = [
            'name' => 'Active Catalog Rule with conditions %isolation%',
            'description' => 'Rule Description',
            'is_active' => 'Active',
            'website_ids' => [
                'datasets' => [
                    '0' => 'main_website',
                ],
            ],
            'customer_group_ids' => [
                '0' => 'NOT LOGGED IN',
                '1' => 'General',
                '2' => 'Wholesale',
                '3' => 'Retailer',
            ],
            'rule' => '[Category|is|2]',
            'simple_action' => 'By Percentage of the Original Price',
            'discount_amount' => '10',
        ];
    }
}
