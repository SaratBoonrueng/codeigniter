<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Catalog\Test\Repository;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class CatalogProductVirtual
 */
class CatalogProductVirtual extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['default'] = [
            'name' => 'Test virtual product %isolation%',
            'sku' => 'test_virtual_sku_%isolation%',
            'price' => [
                'value' => '100.00',
            ],
            'stock_data' => [
                'qty' => '10.0000',
                'is_in_stock' => 'In Stock',
            ],
            'is_virtual' => 'Yes',
            'url_key' => 'test-virtual-product-%isolation%',
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
        ];

        $this->_data['order_default'] = [
            'name' => 'Virtual Product %isolation%',
            'description' => 'Description for default Virtual product with category',
            'short_description' => 'Short description for default Virtual product with category',
            'status' => 'Enabled',
            'visibility' => 'Catalog, Search',
            'sku' => 'sku_virtual_product_%isolation%',
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'price' => [
                'value' => '100',
            ],
            'is_virtual' => 'Yes',
            'stock_data' => [
                'qty' => '10',
                'is_in_stock' => 'In Stock',
            ],
            'checkout_data' => [
                'dataset' => 'order_default',
            ],
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'url_key' => 'virtual-product-%isolation%',
        ];

        $this->_data['order_default_expensive'] = [
            'name' => 'Virtual Product %isolation%',
            'description' => 'Description for default Virtual product with category',
            'short_description' => 'Short description for default Virtual product with category',
            'status' => 'Enabled',
            'visibility' => 'Catalog, Search',
            'sku' => 'sku_virtual_product_%isolation%',
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'price' => [
                'value' => '1000',
            ],
            'is_virtual' => 'Yes',
            'stock_data' => [
                'qty' => '10',
                'is_in_stock' => 'In Stock',
            ],
            'checkout_data' => [
                'dataset' => 'order_default',
            ],
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'url_key' => 'virtual-product-%isolation%',
        ];
    }
}
