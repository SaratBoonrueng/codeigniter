<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Bundle\Test\Repository\BundleProduct;

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
        $this->_data['default_dynamic'] = [
            'price_from' => '150.00',
            'price_to' => '200.00',
        ];

        $this->_data['default_fixed'] = [
            'price_from' => '760.00',
            'price_to' => '768.00',
        ];

        $this->_data['default_bundle_fixed'] = [
            'price_from' => '760.00',
            'price_to' => '768.00',
        ];

        $this->_data['dynamic_with_tier_price'] = [
            'price_from' => '150.00',
            'price_to' => '200.00',
        ];

        $this->_data['dynamic_with_group_price'] = [
            'price_from' => '15.00',
            'price_to' => '20.00',
        ];

        $this->_data['fixed_with_special_price'] = [
            'price_from' => '11.00',
            'price_to' => '11.80',
        ];

        $this->_data['dynamic_as_low_as_price'] = [
            'price_from' => '150.00',
        ];

        $this->_data['fixed_as_low_as_price'] = [
            'price_from' => '110.00',
        ];

        $this->_data['all_types_bundle_fixed_and_custom_options'] = [
            'price_from' => '290.00',
            'price_to' => '372.00',
        ];
    }
}
