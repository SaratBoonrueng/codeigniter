<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Catalog\Test\Repository;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class GroupedProduct
 */
class GroupedProduct extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['default'] = [
            'name' => 'Test grouped product %isolation%',
            'sku' => 'test_grouped_sku_%isolation%',
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'weight' => '12.0000',
            'stock_data' => [
                'qty' => '10.0000',
                'is_in_stock' => 'In Stock',
            ],
            'status' => 'Enabled',
            'associated' => [
                'dataset' => 'defaultSimpleProducts',
            ],
            'url_key' => 'test-grouped-product-%isolation%',
        ];

        $this->_data['three_simple_products'] = [
            'name' => 'Grouped product %isolation%',
            'sku' => 'grouped_product_%isolation%',
            'visibility' => 'Catalog, Search',
            'status' => 'Enabled',
            'associated' => [
                'dataset' => 'three_simple_products',
            ],
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'url_key' => 'test-grouped-product-%isolation%',
            'weight' => '12.0000',
            'description' => 'This is description for grouped product with three simple products',
            'short_description' => 'This is short description for grouped product with three simple products',
            'stock_data' => [
                'qty' => '10.0000',
                'is_in_stock' => 'In Stock',
            ],
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'attribute_set_id' => [
                'dataset' => 'default',
            ],
            'checkout_data' => [
                'dataset' => 'three_simple_products',
            ],
            'category_ids' => [
                'dataset' => 'default_subcategory',
            ],
        ];

        $this->_data['three_simple_products_without_category'] = [
            'name' => 'Grouped product %isolation%',
            'sku' => 'grouped_product_%isolation%',
            'visibility' => 'Catalog, Search',
            'status' => 'Enabled',
            'associated' => [
                'dataset' => 'three_simple_products',
            ],
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'url_key' => 'test-grouped-product-%isolation%',
            'weight' => '12.0000',
            'description' => 'This is description for grouped product with three simple products',
            'short_description' => 'This is short description for grouped product with three simple products',
            'stock_data' => [
                'qty' => '10.0000',
                'is_in_stock' => 'In Stock',
            ],
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'attribute_set_id' => [
                'dataset' => 'default',
            ],
            'checkout_data' => [
                'dataset' => 'three_simple_products',
            ],
        ];

        $this->_data['grouped_product_with_price'] = [
            'name' => 'Test grouped product with price %isolation%',
            'sku' => 'sku_test_grouped_product_with_price_%isolation%',
            'visibility' => 'Catalog, Search',
            'status' => 'Enabled',
            'description' => 'This is description for grouped product with price',
            'short_description' => 'This is short description for grouped product with price',
            'price' => [
                'value' => '-',
                'dataset' => 'starting-100',
            ],
            'associated' => [
                'dataset' => 'defaultSimpleProducts',
            ],
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'url_key' => 'test-grouped-product-with-price%isolation%',
            'weight' => '12.0000',
            'stock_data' => [
                'qty' => '10.0000',
                'is_in_stock' => 'In Stock',
            ],
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'attribute_set_id' => [
                'dataset' => 'default',
            ],
        ];
    }
}
