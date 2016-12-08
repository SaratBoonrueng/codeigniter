<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Sales\Test\Repository;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class Order
 */
class Order extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['default'] = [
            'customer_id' => [
                'dataset' => 'default',
            ],
            'base_currency_code' => 'false',
            'store_id' => [
                'dataset' => 'default',
            ],
            'order_currency_code' => 'USD',
            'shipping_method' => 'flatrate_flatrate',
            'payment_auth_expiration' => [
                'method' => 'checkmo',
            ],
            'payment_authorization_amount' => [
                'method' => 'free',
            ],
            'billing_address_id' => [
                'dataset' => 'US_address',
            ],
            'entity_id' => [
                'products' => 'catalogProductSimple::default',
            ],
        ];

        $this->_data['configurable'] = [
            'customer_id' => [
                'dataset' => 'default',
            ],
            'base_currency_code' => 'false',
            'store_id' => [
                'dataset' => 'default',
            ],
            'order_currency_code' => 'USD',
            'shipping_method' => 'flatrate_flatrate',
            'payment_auth_expiration' => [
                'method' => 'checkmo',
            ],
            'payment_authorization_amount' => [
                'method' => 'free',
            ],
            'billing_address_id' => [
                'dataset' => 'US_address',
            ],
            'entity_id' => [
                'products' => 'configurableProduct::default',
            ],
        ];

        $this->_data['bundle_fixed'] = [
            'customer_id' => [
                'dataset' => 'default',
            ],
            'base_currency_code' => 'false',
            'store_id' => [
                'dataset' => 'default',
            ],
            'order_currency_code' => 'USD',
            'shipping_method' => 'flatrate_flatrate',
            'payment_auth_expiration' => [
                'method' => 'checkmo',
            ],
            'payment_authorization_amount' => [
                'method' => 'free',
            ],
            'billing_address_id' => [
                'dataset' => 'US_address',
            ],
            'entity_id' => [
                'products' => 'bundleProduct::bundle_fixed_product',
            ],
        ];

        $this->_data['with_simple_qty_3'] = [
            'customer_id' => [
                'dataset' => 'default',
            ],
            'base_currency_code' => 'false',
            'store_id' => [
                'dataset' => 'default',
            ],
            'order_currency_code' => 'USD',
            'shipping_method' => 'flatrate_flatrate',
            'payment_auth_expiration' => [
                'method' => 'checkmo',
            ],
            'payment_authorization_amount' => [
                'method' => 'free',
            ],
            'billing_address_id' => [
                'dataset' => 'US_address',
            ],
            'entity_id' => [
                'products' => 'catalogProductSimple::wit_qty_3',
            ],
        ];

        $this->_data['order_with_configurable_and_bundle'] = [
            'customer_id' => [
                'dataset' => 'default',
            ],
            'base_currency_code' => 'false',
            'store_id' => [
                'dataset' => 'default',
            ],
            'order_currency_code' => 'USD',
            'shipping_method' => 'flatrate_flatrate',
            'payment_auth_expiration' => [
                'method' => 'checkmo',
            ],
            'payment_authorization_amount' => [
                'method' => 'free',
            ],
            'billing_address_id' => [
                'dataset' => 'US_address',
            ],
            'entity_id' => [
                'products' => 'bundleProduct::bundle_fixed_product,configurableProduct::default',
            ],
        ];
    }
}
