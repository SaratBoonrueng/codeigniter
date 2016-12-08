<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Catalog\Test\Repository;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class CatalogProductSimple
 */
class CatalogProductSimple extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['default'] = [
            'name' => 'Test simple product %isolation%',
            'description' => 'Simple product description %isolation%',
            'short_description' => 'Simple product short description %isolation%',
            'sku' => 'test_simple_sku_%isolation%',
            'weight' => '12.0000',
            'status' => 'Enabled',
            'url_key' => 'test-simple-product-%isolation%',
            'visibility' => 'Catalog, Search',
            'price' => [
                'value' => '100.00',
            ],
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'stock_data' => [
                'qty' => '1000',
                'is_in_stock' => 'In Stock',
            ],
            'category_ids' => [
                'dataset' => 'default_subcategory',
            ],
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'checkout_data' => [
                'dataset' => 'default',
            ],
        ];

        $this->_data['order_default'] = [
            'name' => 'Simple Product %isolation%',
            'description' => 'Description for default Simple product with category',
            'short_description' => 'Short description for default Simple product with category',
            'status' => 'Enabled',
            'visibility' => 'Catalog, Search',
            'sku' => 'sku_simple_product_%isolation%',
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'price' => [
                'value' => '100',
            ],
            'weight' => '12',
            'stock_data' => [
                'qty' => '10',
                'is_in_stock' => 'In Stock',
            ],
            'attribute_set_id' => [
                'dataset' => 'default',
            ],
            'checkout_data' => [
                'dataset' => 'order_default',
            ],
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'url_key' => 'simple-product-%isolation%',
        ];

        $this->_data['product_with_category'] = [
            'name' => 'Test simple product %isolation%',
            'description' => 'Description for Simple product with category',
            'short_description' => 'Short description for Simple product with category',
            'status' => 'Enabled',
            'visibility' => 'Catalog, Search',
            'sku' => 'test_simple_sku_%isolation%',
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'price' => [
                'value' => '100',
            ],
            'weight' => '12',
            'stock_data' => [
                'qty' => '10',
                'is_in_stock' => 'In Stock',
            ],
            'category_ids' => [
                'dataset' => 'default_subcategory',
            ],
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'url_key' => 'test-simple-product-%isolation%',
        ];

        $this->_data['simple_for_salesrule_1'] = [
            'name' => 'Simple Product for sales rule 1 %isolation%',
            'description' => 'Description for Simple product for sales rule 1',
            'short_description' => 'Short description for Simple product for sales rule 1.',
            'sku' => 'sku_simple_product_%isolation%',
            'attribute_set_id' => [
                'dataset' => 'default',
            ],
            'status' => 'Enabled',
            'type_id' => 'simple',
            'stock_data' => [
                'qty' => '666',
                'is_in_stock' => 'In Stock',
            ],
            'price' => [
                'value' => '100',
            ],
            'weight' => '100',
            'category_ids' => [
                'dataset' => 'default_subcategory',
            ],
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'url_key' => 'simple-product-for-sales-rule-1-%isolation%',
        ];

        $this->_data['simple_for_salesrule_2'] = [
            'name' => 'Simple Product for sales rule 2 %isolation%',
            'description' => 'Description for Simple product for sales rule 2',
            'short_description' => 'Short description for Simple product for sales rule 2.',
            'sku' => 'sku_simple_product_%isolation%',
            'attribute_set_id' => [
                'dataset' => 'default',
            ],
            'status' => 'Enabled',
            'type_id' => 'simple',
            'stock_data' => [
                'qty' => '666',
                'is_in_stock' => 'In Stock',
            ],
            'price' => [
                'value' => '50',
            ],
            'weight' => '50',
            'category_ids' => [
                'dataset' => 'default_subcategory',
            ],
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'url_key' => 'simple-product-for-sales-rule-2-%isolation%',
        ];

        $this->_data['100_dollar_product'] = [
            'sku' => '100_dollar_product%isolation%',
            'name' => '100_dollar_product%isolation%',
            'description' => 'Description for 100_dollar_product.',
            'short_description' => 'Short description for 100_dollar_product.',
            'type_id' => 'simple',
            'stock_data' => [
                'qty' => '666',
                'is_in_stock' => 'In Stock',
            ],
            'weight' => '1',
            'attribute_set_id' => [
                'dataset' => 'default',
            ],
            'status' => 'Enabled',
            'price' => [
                'value' => '100',
            ],
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'url_key' => '100-dollar-product%isolation%',
        ];

        $this->_data['product_with_special_price_and_category'] = [
            'name' => 'Simple product with special price and category %isolation%',
            'description' => 'Description for Simple product with special price and category',
            'short_description' => 'Short description for Simple product with special price and category',
            'status' => 'Enabled',
            'visibility' => 'Catalog, Search',
            'sku' => 'simple_product_with_special_price_and_category%isolation%',
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'attribute_set_id' => [
                'dataset' => 'default',
            ],
            'price' => [
                'value' => '100',
            ],
            'special_price' => '90',
            'stock_data' => [
                'qty' => '10',
                'is_in_stock' => 'In Stock',
            ],
            'weight' => '1',
            'category_ids' => [
                'dataset' => 'default_subcategory',
            ],
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'url_key' => 'simple-product-with-special-price-and-category-%isolation%',
            'checkout_data' => [
                'qty' => '3',
            ],
        ];

        $this->_data['with_one_custom_option_and_category'] = [
            'name' => 'Simple Product %isolation%',
            'description' => 'Description for Simple product with category and one custom option',
            'short_description' => 'Short description for Simple product with category and one custom option',
            'status' => 'Enabled',
            'visibility' => 'Catalog, Search',
            'sku' => 'sku_simple_product_%isolation%',
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'attribute_set_id' => [
                'dataset' => 'default',
            ],
            'price' => [
                'value' => '300',
            ],
            'stock_data' => [
                'qty' => '10',
                'is_in_stock' => 'In Stock',
            ],
            'weight' => '1',
            'custom_options' => [
                'dataset' => 'drop_down_with_one_option_percent_price',
            ],
            'checkout_data' => [
                'dataset' => 'drop_down_with_one_option_percent_price',
            ],
            'category_ids' => [
                'dataset' => 'default_subcategory',
            ],
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'url_key' => 'simple-product-%isolation%',
        ];

        $this->_data['with_default_website'] = [
            'name' => 'Simple Product with default website %isolation%.',
            'description' => 'Description for default Simple product with default website.',
            'short_description' => 'Short description for default Simple product with category.',
            'status' => 'Enabled',
            'visibility' => 'Catalog, Search',
            'sku' => 'sku_simple_product_%isolation%',
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'price' => [
                'value' => '100',
            ],
            'weight' => '12',
            'stock_data' => [
                'qty' => '10',
                'is_in_stock' => 'In Stock',
            ],
            'attribute_set_id' => [
                'dataset' => 'default',
            ],
            'checkout_data' => [
                'dataset' => 'default',
            ],
            'website_ids' => [
                'datasets' => [
                    '0' => 'main_website',
                ],
            ],
            'url_key' => 'simple-product-with-default-website-%isolation%',
        ];

        $this->_data['50_dollar_product'] = [
            'sku' => '50_dollar_product%isolation%',
            'name' => '50_dollar_product%isolation%',
            'description' => 'Description for 50_dollar_product.',
            'short_description' => 'Short description for 50_dollar_product.',
            'type_id' => 'simple',
            'stock_data' => [
                'qty' => '666',
                'is_in_stock' => 'In Stock',
            ],
            'weight' => '1',
            'attribute_set_id' => [
                'dataset' => 'default',
            ],
            'status' => 'Enabled',
            'price' => [
                'value' => '50',
            ],
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'url_key' => '50-dollar-product%isolation%',
        ];

        $this->_data['product_with_map_use_config'] = [
            'name' => 'Test simple product %isolation%',
            'description' => 'Description for Simple product with category',
            'short_description' => 'Short description for Simple product with category',
            'status' => 'Enabled',
            'visibility' => 'Catalog, Search',
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'sku' => 'test_simple_sku_%isolation%',
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'price' => [
                'value' => '100',
            ],
            'weight' => '12',
            'stock_data' => [
                'qty' => '10',
                'is_in_stock' => 'In Stock',
            ],
            'msrp_enabled' => 'Yes',
            'msrp_display_actual_price_type' => 'Use config',
            'url_key' => 'test-simple-product-%isolation%',
        ];

        $this->_data['product_with_map_in_cart'] = [
            'name' => 'Test simple product %isolation%',
            'description' => 'Description for Simple product with category',
            'short_description' => 'Short description for Simple product with category',
            'status' => 'Enabled',
            'visibility' => 'Catalog, Search',
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'sku' => 'test_simple_sku_%isolation%',
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'price' => [
                'value' => '100',
            ],
            'weight' => '12',
            'stock_data' => [
                'qty' => '10',
                'is_in_stock' => 'In Stock',
            ],
            'msrp_enabled' => 'Yes',
            'msrp_display_actual_price_type' => 'In Cart',
            'url_key' => 'test-simple-product-%isolation%',
        ];

        $this->_data['simple_with_group_price'] = [
            'name' => 'Simple product with group price and category %isolation%',
            'description' => 'Description for Simple product with group price and category',
            'short_description' => 'Short description for Simple product with group price and category',
            'status' => 'Enabled',
            'visibility' => 'Catalog, Search',
            'sku' => 'simple_product_with_group_price_and_category%isolation%',
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'attribute_set_id' => [
                'dataset' => 'default',
            ],
            'price' => [
                'value' => '100',
            ],
            'stock_data' => [
                'qty' => '10',
                'is_in_stock' => 'In Stock',
            ],
            'weight' => '1',
            'category_ids' => [
                'dataset' => 'default_subcategory',
            ],
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'group_price' => [
                'dataset' => 'for_not_logged_users',
            ],
            'url_key' => 'test-simple-product-%isolation%',
            'checkout_data' => [
                'qty' => '3',
            ],
        ];

        $this->_data['simple_with_group_price_and_category'] = [
            'name' => 'Simple product with group price and category %isolation%',
            'description' => 'Description for Simple product with group price and category',
            'short_description' => 'Short description for Simple product with group price and category',
            'status' => 'Enabled',
            'visibility' => 'Catalog, Search',
            'sku' => 'simple_product_with_group_price_and_category%isolation%',
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'attribute_set_id' => [
                'dataset' => 'default',
            ],
            'price' => [
                'value' => '100',
            ],
            'stock_data' => [
                'qty' => '10',
                'is_in_stock' => 'In Stock',
            ],
            'weight' => '1',
            'category_ids' => [
                'dataset' => 'default_subcategory',
            ],
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'group_price' => [
                'dataset' => 'tax_calculation',
            ],
            'url_key' => 'test-simple-product-%isolation%',
            'checkout_data' => [
                'qty' => '3',
            ],
        ];

        $this->_data['simple_with_tier_price'] = [
            'name' => 'Simple product with tier price and category %isolation%',
            'description' => 'Description for Simple product with tier price and category',
            'short_description' => 'Short description for Simple product with tier price and category',
            'status' => 'Enabled',
            'visibility' => 'Catalog, Search',
            'sku' => 'simple_product_with_tier_price_and_category%isolation%',
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'attribute_set_id' => [
                'dataset' => 'default',
            ],
            'price' => [
                'value' => '300',
                'dataset' => 'with_tier_price',
            ],
            'stock_data' => [
                'qty' => '10',
                'is_in_stock' => 'In Stock',
            ],
            'weight' => '1',
            'category_ids' => [
                'dataset' => 'default_subcategory',
            ],
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'tier_price' => [
                'dataset' => 'for_all_groups',
            ],
            'url_key' => 'test-simple-product-%isolation%',
            'checkout_data' => [
                'qty' => '3',
            ],
        ];

        $this->_data['simple_for_composite_products'] = [
            'name' => 'simple_for_composite_products%isolation%',
            'description' => 'Description for Simple composite products',
            'short_description' => 'Short description for Simple composite products',
            'status' => 'Enabled',
            'visibility' => 'Catalog, Search',
            'sku' => 'simple_for_composite_products%isolation%',
            'price' => [
                'value' => '560',
                'dataset' => '-',
            ],
            'attribute_set_id' => [
                'dataset' => 'default',
            ],
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'weight' => '1',
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'stock_data' => [
                'qty' => '10',
                'is_in_stock' => 'In Stock',
            ],
            'url_key' => 'simple-for-composite-products%isolation%',
        ];

        $this->_data['5_dollar_product_for_payments'] = [
            'name' => 'Simple Product %isolation%',
            'description' => 'Description for default Simple product with category',
            'short_description' => 'Short description for default Simple product with category',
            'status' => 'Enabled',
            'visibility' => 'Catalog, Search',
            'sku' => 'sku_simple_product_%isolation%',
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'price' => [
                'value' => '5',
            ],
            'weight' => '12',
            'stock_data' => [
                'qty' => '100',
                'is_in_stock' => 'In Stock',
            ],
            'attribute_set_id' => [
                'dataset' => 'default',
            ],
            'checkout_data' => [
                'dataset' => 'default',
            ],
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'url_key' => 'simple-product-%isolation%',
        ];

        $this->_data['with_two_custom_option'] = [
            'type_id' => 'simple',
            'name' => 'Simple Product %isolation%',
            'description' => 'Description for simple product with two custom option',
            'short_description' => 'Short description for simple product with two custom option',
            'status' => 'Enabled',
            'url_key' => 'simple-product-%isolation%',
            'sku' => 'sku_simple_product_%isolation%',
            'visibility' => 'Catalog, Search',
            'attribute_set_id' => [
                'dataset' => 'default',
            ],
            'price' => [
                'value' => '300',
            ],
            'stock_data' => [
                'qty' => '100',
                'is_in_stock' => 'In Stock',
            ],
            'weight' => '1',
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'custom_options' => [
                'dataset' => 'two_options',
            ],
            'checkout_data' => [
                'dataset' => 'with_two_custom_option',
            ],
        ];

        $this->_data['product_with_anchor_category'] = [
            'type_id' => 'simple',
            'name' => 'Simple Product%isolation%',
            'description' => 'Description for simple product with category with anchor',
            'short_description' => 'Short description for simple product with category with anchor',
            'status' => 'Enabled',
            'url_key' => 'simple-product-with-category-with-anchor%isolation%',
            'sku' => 'sku_simple_product_with_category_with_anchor%isolation%',
            'visibility' => 'Catalog, Search',
            'stock_data' => [
                'qty' => '100',
                'is_in_stock' => 'In Stock',
            ],
            'weight' => '1',
            'price' => [
                'value' => '100',
            ],
            'category_ids' => [
                'dataset' => 'anchor_category',
            ],
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'attributes' => [
                'dataset' => 'with_one_attribute',
            ],
        ];

        $this->_data['wit_qty_3'] = [
            'name' => 'Simple Product %isolation%',
            'description' => 'Description for default Simple product with category',
            'short_description' => 'Short description for default Simple product with category',
            'status' => 'Enabled',
            'visibility' => 'Catalog, Search',
            'sku' => 'sku_simple_product_%isolation%',
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'price' => [
                'value' => '100',
            ],
            'weight' => '12',
            'stock_data' => [
                'qty' => '3',
                'is_in_stock' => 'In Stock',
            ],
            'attribute_set_id' => [
                'dataset' => 'default',
            ],
            'checkout_data' => [
                'dataset' => 'default',
            ],
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'url_key' => 'simple-product-%isolation%',
        ];

        $this->_data['quickCreation'] = [
            'name' => 'Simple Product %isolation%',
            'sku' => 'sku_simple_product_%isolation%',
            'status' => 'Enabled',
            'visibility' => 'Catalog, Search',
            'weight' => '12',
            'stock_data' => [
                'qty' => '100',
                'is_in_stock' => 'In Stock',
            ],
            'isPersist' => 'No',
        ];

        $this->_data['withoutPersist'] = [
            'name' => 'Simple Product %isolation%',
            'description' => 'Description for default Simple product with category',
            'short_description' => 'Short description for default Simple product with category',
            'status' => 'Enabled',
            'visibility' => 'Catalog, Search',
            'sku' => 'sku_simple_product_%isolation%',
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'price' => [
                'value' => '100',
            ],
            'weight' => '12',
            'stock_data' => [
                'qty' => '100',
                'is_in_stock' => 'In Stock',
            ],
            'attribute_set_id' => [
                'dataset' => 'default',
            ],
            'checkout_data' => [
                'dataset' => 'default',
            ],
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'url_key' => 'simple-product-%isolation%',
            'isPersist' => 'No',
        ];

        $this->_data['out_of_stock'] = [
            'name' => 'Out of Stock Simple Product %isolation%',
            'description' => 'Description for Out of Stock default Simple product with category',
            'short_description' => 'Short description for Out of Stock default Simple product with category',
            'status' => 'Enabled',
            'visibility' => 'Catalog, Search',
            'sku' => 'sku_simple_product_%isolation%',
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'price' => [
                'value' => '100',
            ],
            'weight' => '12',
            'stock_data' => [
                'qty' => '100',
                'is_in_stock' => 'Out of Stock',
            ],
            'attribute_set_id' => [
                'dataset' => 'default',
            ],
            'checkout_data' => [
                'dataset' => 'default',
            ],
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'url_key' => 'simple-product-%isolation%',
        ];

        $this->_data['offline'] = [
            'name' => 'Simple Product offline %isolation%',
            'description' => 'Description for offline default Simple product with category',
            'short_description' => 'Short description for offline default Simple product with category',
            'status' => 'Disabled',
            'visibility' => 'Catalog, Search',
            'sku' => 'sku_simple_product_%isolation%',
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'price' => [
                'value' => '100',
            ],
            'weight' => '12',
            'stock_data' => [
                'qty' => '100',
                'is_in_stock' => 'In Stock',
            ],
            'attribute_set_id' => [
                'dataset' => 'default',
            ],
            'checkout_data' => [
                'dataset' => 'default',
            ],
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'url_key' => 'simple-product-%isolation%',
        ];

        $this->_data['not_visible_individually'] = [
            'name' => 'Simple Product not visible %isolation%',
            'description' => 'Description for not visible default Simple product with category',
            'short_description' => 'Short description for not visible default Simple product with category',
            'status' => 'Enabled',
            'visibility' => 'Not Visible Individually',
            'sku' => 'sku_not_visible_simple_product_%isolation%',
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'price' => [
                'value' => '100',
            ],
            'weight' => '12',
            'stock_data' => [
                'qty' => '100',
                'is_in_stock' => 'In Stock',
            ],
            'attribute_set_id' => [
                'dataset' => 'default',
            ],
            'checkout_data' => [
                'dataset' => 'default',
            ],
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'url_key' => 'simple-product-%isolation%',
        ];

        $this->_data['simple_with_cart_limits'] = [
            'name' => 'Simple Product with cart limit %isolation%',
            'description' => 'Description for default Simple product with cart limit and category',
            'short_description' => 'Short description for default Simple product cart limit and category',
            'status' => 'Enabled',
            'visibility' => 'Catalog, Search',
            'sku' => 'sku_simple_product_%isolation%',
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'price' => [
                'value' => '100',
            ],
            'weight' => '12',
            'stock_data' => [
                'min_sale_qty' => '2',
                'max_sale_qty' => '5',
            ],
            'attribute_set_id' => [
                'dataset' => 'default',
            ],
            'checkout_data' => [
                'dataset' => 'default',
            ],
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'url_key' => 'simple-product-%isolation%',
        ];

        $this->_data['simple_with_qty_increments'] = [
            'name' => 'Simple Product with qty increments %isolation%',
            'description' => 'Description for default Simple product with qty increments and category',
            'short_description' => 'Short description for default Simple product with qty increments and category',
            'status' => 'Enabled',
            'visibility' => 'Catalog, Search',
            'sku' => 'sku_simple_product_with_qty_increments_%isolation%',
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'price' => [
                'value' => '100',
            ],
            'weight' => '12',
            'stock_data' => [
                'enable_qty_increments' => 'Yes',
                'qty_increments' => '2',
            ],
            'attribute_set_id' => [
                'dataset' => 'default',
            ],
            'checkout_data' => [
                'dataset' => 'default',
            ],
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'url_key' => 'simple-product-%isolation%',
        ];

        $this->_data['product_with_map_use_before_order_confirmation'] = [
            'name' => 'Test simple product %isolation%',
            'description' => 'Description for Simple product with category',
            'short_description' => 'Short description for Simple product with category',
            'status' => 'Enabled',
            'visibility' => 'Catalog, Search',
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'sku' => 'test_simple_sku_%isolation%',
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'price' => [
                'value' => '100',
            ],
            'weight' => '12',
            'stock_data' => [
                'qty' => '10',
                'is_in_stock' => 'In Stock',
            ],
            'msrp_enabled' => 'Yes',
            'msrp_display_actual_price_type' => 'Before Order Confirmation',
            'url_key' => 'test-simple-product-%isolation%',
        ];

        $this->_data['with_custom_option_and_fpt'] = [
            'attribute_set_id' => [
                'dataset' => 'default',
            ],
            'category_ids' => [
                'dataset' => 'default_subcategory',
            ],
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'description' => 'Description for Simple product',
            'short_description' => 'Short description for Simple product',
            'status' => 'Enabled',
            'name' => 'Simple Product With Fpt %isolation%',
            'sku' => 'sku_simple_product_%isolation%',
            'price' => [
                'value' => '70',
            ],
            'stock_data' => [
                'qty' => '10',
                'is_in_stock' => 'In Stock',
            ],
            'weight' => '1',
            'custom_options' => [
                'dataset' => 'drop_down_with_one_option_fixed_price',
            ],
            'checkout_data' => [
                'dataset' => 'drop_down_with_one_option_fixed_price',
            ],
            'url_key' => 'simple-product-%isolation%',
            'fpt' => [
                'dataset' => 'one_fpt_for_all_states',
            ],
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
        ];

        $this->_data['with_special_price_and_fpt'] = [
            'attribute_set_id' => [
                'dataset' => 'default',
            ],
            'category_ids' => [
                'dataset' => 'default_subcategory',
            ],
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'description' => 'Description for Simple product',
            'short_description' => 'Short description for Simple product',
            'status' => 'Enabled',
            'name' => 'Simple Product With Fpt %isolation%',
            'sku' => 'sku_simple_product_%isolation%',
            'price' => [
                'value' => '110',
            ],
            'stock_data' => [
                'qty' => '10',
                'is_in_stock' => 'In Stock',
            ],
            'special_price' => '100',
            'weight' => '1',
            'url_key' => 'simple-product-%isolation%',
            'fpt' => [
                'dataset' => 'one_fpt_for_all_states',
            ],
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
        ];

        $this->_data['grouped_default'] = [
            'name' => 'simple product %isolation%',
            'description' => 'Description for default Simple product with category',
            'short_description' => 'Short description for default Simple product with category',
            'status' => 'Enabled',
            'visibility' => 'Catalog, Search',
            'sku' => 'sku_simple_product_%isolation%',
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'price' => [
                'value' => '100',
            ],
            'weight' => '12',
            'stock_data' => [
                'qty' => '10',
                'is_in_stock' => 'In Stock',
            ],
            'attribute_set_id' => [
                'dataset' => 'default',
            ],
            'checkout_data' => [
                'dataset' => 'order_default',
            ],
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'url_key' => 'simple-product-%isolation%',
        ];
    }
}
