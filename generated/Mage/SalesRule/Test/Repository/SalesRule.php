<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\SalesRule\Test\Repository;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class SalesRule
 */
class SalesRule extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['cart_rule'] = [
            'name' => 'Shopping Cart Price Rule %isolation%',
            'is_active' => 'Active',
            'customer_group_ids' => [
                '0' => 'NOT LOGGED IN',
                '1' => 'General',
                '2' => 'Wholesale',
                '3' => 'Retailer',
            ],
            'website_ids' => [
                '0' => 'main_website',
            ],
            'coupon_type' => 'No Coupon',
            'simple_action' => 'Percent of product price discount',
            'discount_amount' => '50',
        ];

        $this->_data['active_sales_rule_for_not_logged_users'] = [
            'name' => 'Shopping Cart Price Rule with Specific Coupon %isolation%',
            'description' => 'Description for Cart Price Rule',
            'is_active' => 'Active',
            'website_ids' => [
                '0' => 'main_website',
            ],
            'customer_group_ids' => [
                '0' => 'NOT LOGGED IN',
            ],
            'coupon_type' => 'Specific Coupon',
            'coupon_code' => '123-abc-ABC-987-%isolation%',
            'simple_action' => 'Percent of product price discount',
            'discount_amount' => '50',
            'store_labels' => [
                '0' => 'Shopping Cart price Rule with Specific Coupon',
                '1' => 'Shopping Cart price Rule with Specific Coupon',
            ],
        ];

        $this->_data['active_sales_rule_for_all_groups'] = [
            'name' => 'Shopping Cart Price Rule with Specific Coupon %isolation%',
            'description' => 'Description for Cart Price Rule',
            'is_active' => 'Active',
            'website_ids' => [
                '0' => 'main_website',
            ],
            'customer_group_ids' => [
                '0' => 'NOT LOGGED IN',
                '1' => 'General',
                '2' => 'Wholesale',
                '3' => 'Retailer',
            ],
            'coupon_type' => 'Specific Coupon',
            'coupon_code' => '123-abc-ABC-987-%isolation%',
            'simple_action' => 'Percent of product price discount',
            'discount_amount' => '50',
            'store_labels' => [
                '0' => 'Shopping Cart price Rule with Specific Coupon',
                '1' => 'Shopping Cart price Rule with Specific Coupon',
            ],
        ];

        $this->_data['active_sales_rule_for_all_groups_no_coupon'] = [
            'name' => 'Shopping Cart Price Rule with Specific Coupon %isolation%',
            'description' => 'Description for Cart Price Rule',
            'is_active' => 'Active',
            'website_ids' => [
                '0' => 'main_website',
            ],
            'customer_group_ids' => [
                '0' => 'NOT LOGGED IN',
                '1' => 'General',
                '2' => 'Wholesale',
                '3' => 'Retailer',
            ],
            'coupon_type' => 'No Coupon',
            'simple_action' => 'Percent of product price discount',
            'discount_amount' => '50',
        ];

        $this->_data['active_sales_rule_with_conditions'] = [
            'name' => 'Shopping Cart Price Rule with with conditions %isolation%',
            'description' => 'Shopping Cart Price Rule with conditions',
            'is_active' => 'Active',
            'website_ids' => [
                '0' => 'main_website',
            ],
            'customer_group_ids' => [
                '0' => 'NOT LOGGED IN',
                '1' => 'General',
                '2' => 'Wholesale',
                '3' => 'Retailer',
            ],
            'coupon_type' => 'Specific Coupon',
            'coupon_code' => '123-abc-ABC-987-%isolation%',
            'uses_per_coupon' => '13',
            'uses_per_customer' => '63',
            'from_date' => [
                'pattern' => '3/25/2014',
            ],
            'to_date' => [
                'pattern' => '6/29/2024',
            ],
            'sort_order' => '1',
            'is_rss' => 'Yes',
            'conditions_serialized' => '[Category|is|2]',
            'simple_action' => 'Percent of product price discount',
            'discount_amount' => '50',
            'discount_step' => '0',
            'apply_to_shipping' => 'Yes',
            'stop_rules_processing' => 'Yes',
            'simple_free_shipping' => 'For matching items only',
            'store_labels' => [
                '0' => 'Shopping Cart Price Rule with conditions',
                '1' => 'Shopping Cart Price Rule with conditions',
            ],
        ];

        $this->_data['inactive_sales_rule'] = [
            'name' => 'Inactive Cart Price Rule %isolation%',
            'is_active' => 'Inactive',
            'website_ids' => [
                '0' => 'main_website',
            ],
            'customer_group_ids' => [
                '0' => 'NOT LOGGED IN',
            ],
            'coupon_type' => 'No Coupon',
            'simple_action' => 'Percent of product price discount',
            'discount_amount' => '50',
        ];
    }
}
