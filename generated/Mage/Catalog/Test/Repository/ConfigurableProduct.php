<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Catalog\Test\Repository;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class ConfigurableProduct
 */
class ConfigurableProduct extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['default'] = [
            'name' => 'Configurable Product %isolation%',
            'sku' => 'sku_configurable_product_%isolation%',
            'type_id' => 'configurable',
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'url_key' => 'configurable-product-%isolation%',
            'configurable_options' => [
                'dataset' => 'default',
            ],
            'price' => [
                'value' => '100',
            ],
            'weight' => '12',
            'stock_data' => [
                'is_in_stock' => 'In Stock',
            ],
            'status' => 'Enabled',
            'visibility' => 'Catalog, Search',
            'description' => 'Description for default Configurable product with category',
            'short_description' => 'Short description for default Configurable product with category',
            'checkout_data' => [
                'dataset' => 'default',
            ],
            'website_ids' => [
                'datasets' => [
                    '0' => 'main_website',
                ],
            ],
        ];

        $this->_data['default_with_map_use_config'] = [
            'name' => 'Configurable Product %isolation%',
            'sku' => 'sku_configurable_product_%isolation%',
            'type_id' => 'configurable',
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'url_key' => 'configurable-product-%isolation%',
            'configurable_options' => [
                'dataset' => 'default',
            ],
            'price' => [
                'value' => '100',
            ],
            'weight' => '12',
            'stock_data' => [
                'is_in_stock' => 'In Stock',
            ],
            'status' => 'Enabled',
            'visibility' => 'Catalog, Search',
            'website_ids' => [
                'datasets' => [
                    '0' => 'main_website',
                ],
            ],
            'description' => 'Description for default Configurable product with category',
            'short_description' => 'Short description for default Configurable product with category',
            'msrp_enabled' => 'Yes',
            'msrp_display_actual_price_type' => 'Use config',
        ];

        $this->_data['default_with_map_in_cart'] = [
            'name' => 'Configurable Product %isolation%',
            'sku' => 'sku_configurable_product_%isolation%',
            'type_id' => 'configurable',
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'url_key' => 'configurable-product-%isolation%',
            'configurable_options' => [
                'dataset' => 'default',
            ],
            'price' => [
                'value' => '100',
            ],
            'weight' => '12',
            'stock_data' => [
                'is_in_stock' => 'In Stock',
            ],
            'status' => 'Enabled',
            'visibility' => 'Catalog, Search',
            'website_ids' => [
                'datasets' => [
                    '0' => 'main_website',
                ],
            ],
            'description' => 'Description for default Configurable product with category',
            'short_description' => 'Short description for default Configurable product with category',
            'msrp_enabled' => 'Yes',
            'msrp_display_actual_price_type' => 'In Cart',
        ];

        $this->_data['with_filterable_options'] = [
            'name' => 'Configurable Product %isolation%',
            'sku' => 'sku_configurable_product_%isolation%',
            'type_id' => 'configurable',
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'url_key' => 'configurable-product-%isolation%',
            'configurable_options' => [
                'dataset' => 'with_filterable_options',
            ],
            'price' => [
                'value' => '100',
            ],
            'weight' => '12',
            'stock_data' => [
                'is_in_stock' => 'In Stock',
            ],
            'status' => 'Enabled',
            'visibility' => 'Catalog, Search',
            'description' => 'Description for default Configurable product with category',
            'short_description' => 'Short description for default Configurable product with category',
            'website_ids' => [
                'datasets' => [
                    '0' => 'main_website',
                ],
            ],
        ];

        $this->_data['configurable_product_with_category'] = [
            'name' => 'Configurable Product %isolation%',
            'sku' => 'sku_configurable_product_%isolation%',
            'type_id' => 'configurable',
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'url_key' => 'configurable-product-%isolation%',
            'configurable_options' => [
                'dataset' => 'default',
            ],
            'price' => [
                'value' => '100',
            ],
            'weight' => '12',
            'stock_data' => [
                'is_in_stock' => 'In Stock',
            ],
            'status' => 'Enabled',
            'visibility' => 'Catalog, Search',
            'description' => 'Description for default Configurable product with category',
            'short_description' => 'Short description for default Configurable product with category',
            'checkout_data' => [
                'dataset' => 'default',
            ],
            'website_ids' => [
                'datasets' => [
                    '0' => 'main_website',
                ],
            ],
            'category_ids' => [
                'dataset' => 'default_subcategory',
            ],
        ];

        $this->_data['with_out_of_stock_items'] = [
            'name' => 'Configurable Product %isolation%',
            'sku' => 'sku_configurable_product_%isolation%',
            'type_id' => 'configurable',
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'url_key' => 'configurable-product-%isolation%',
            'configurable_options' => [
                'dataset' => 'with_out_of_stock_items',
            ],
            'price' => [
                'value' => '100',
            ],
            'weight' => '12',
            'stock_data' => [
                'is_in_stock' => 'In Stock',
            ],
            'status' => 'Enabled',
            'visibility' => 'Catalog, Search',
            'description' => 'Description for Configurable product with out of stock items',
            'short_description' => 'Short description for Configurable product with with out of stock items',
            'checkout_data' => [
                'dataset' => 'default',
            ],
            'website_ids' => [
                'datasets' => [
                    '0' => 'main_website',
                ],
            ],
        ];

        $this->_data['default_with_special_price'] = [
            'name' => 'Configurable Product %isolation%',
            'sku' => 'sku_configurable_product_%isolation%',
            'type_id' => 'configurable',
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'url_key' => 'configurable-product-%isolation%',
            'configurable_options' => [
                'dataset' => 'default',
            ],
            'price' => [
                'value' => '100',
            ],
            'special_price' => '10',
            'weight' => '12',
            'stock_data' => [
                'is_in_stock' => 'In Stock',
            ],
            'status' => 'Enabled',
            'visibility' => 'Catalog, Search',
            'description' => 'Description for default Configurable product with special price',
            'short_description' => 'Short description for default Configurable product with special price',
            'checkout_data' => [
                'dataset' => 'default',
            ],
            'website_ids' => [
                'datasets' => [
                    '0' => 'main_website',
                ],
            ],
        ];
    }
}
