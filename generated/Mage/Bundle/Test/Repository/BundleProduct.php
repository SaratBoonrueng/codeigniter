<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Bundle\Test\Repository;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class BundleProduct
 */
class BundleProduct extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['default'] = [
            'name' => 'BundleProduct %isolation%',
            'sku_type' => 'Dynamic',
            'price_type' => 'Dynamic',
            'weight_type' => 'Dynamic',
            'description' => 'Bundle product %isolation%',
            'short_description' => 'Short description bundle product %isolation%',
            'status' => 'Enabled',
            'visibility' => 'Catalog, Search',
            'url_key' => 'bundleproduct-%isolation%',
        ];

        $this->_data['bundle_dynamic_product'] = [
            'name' => 'Bundle dynamic product %isolation%',
            'sku' => 'sku_bundle_dynamic_product_%isolation%',
            'sku_type' => 'Dynamic',
            'price_type' => 'Dynamic',
            'price' => [
                'value' => '-',
                'dataset' => 'default_dynamic',
            ],
            'weight_type' => 'Dynamic',
            'shipment_type' => 'Separately',
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'stock_data' => [
                'manage_stock' => 'Yes',
                'use_config_enable_qty_increments' => 'Yes',
                'use_config_qty_increments' => 'Yes',
                'is_in_stock' => 'In Stock',
            ],
            'url_key' => 'bundle-dynamic-product-%isolation%',
            'visibility' => 'Catalog, Search',
            'bundle_selections' => [
                'dataset' => 'default_dynamic',
            ],
            'attribute_set_id' => 'Default',
            'checkout_data' => [
                'dataset' => 'default_dynamic',
            ],
            'description' => 'Description for bundle dynamic product',
            'short_description' => 'Short description for bundle dynamic product',
            'status' => 'Enabled',
        ];

        $this->_data['bundle_fixed_product'] = [
            'name' => 'Bundle fixed product %isolation%',
            'sku' => 'sku_bundle_fixed_product_%isolation%',
            'sku_type' => 'Fixed',
            'price_type' => 'Fixed',
            'price' => [
                'value' => '750.00',
                'dataset' => 'default_bundle_fixed',
            ],
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'weight' => '1.0000',
            'weight_type' => 'Fixed',
            'shipment_type' => 'Together',
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'stock_data' => [
                'manage_stock' => 'Yes',
                'use_config_enable_qty_increments' => 'Yes',
                'use_config_qty_increments' => 'Yes',
                'is_in_stock' => 'In Stock',
            ],
            'url_key' => 'bundle-fixed-product-%isolation%',
            'visibility' => 'Catalog, Search',
            'bundle_selections' => [
                'dataset' => 'default_fixed',
            ],
            'attribute_set_id' => 'Default',
            'checkout_data' => [
                'dataset' => 'default_fixed',
            ],
            'description' => 'Description for bundle dynamic product',
            'short_description' => 'Short description for bundle dynamic product',
            'status' => 'Enabled',
        ];
    }
}
