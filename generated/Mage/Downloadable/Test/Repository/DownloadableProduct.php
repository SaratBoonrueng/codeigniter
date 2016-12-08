<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Downloadable\Test\Repository;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class DownloadableProduct
 */
class DownloadableProduct extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['default'] = [
            'name' => 'DownloadableProduct_%isolation%',
            'sku' => 'DownloadableProduct_%isolation%',
            'visibility' => 'Catalog, Search',
            'status' => 'Enabled',
            'url_key' => 'downloadable-product-%isolation%',
            'price' => [
                'value' => '100.00',
            ],
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'description' => 'This is description for downloadable product.',
            'short_description' => 'This is short description for downloadable product.',
            'stock_data' => [
                'qty' => '1.0000',
                'is_in_stock' => 'In Stock',
            ],
            'is_virtual' => 'Yes',
            'downloadable_links' => [
                'dataset' => 'default',
            ],
            'downloadable_sample' => [
                'dataset' => 'default',
            ],
            'category_ids' => [
                'dataset' => 'default_subcategory',
            ],
            'website_ids' => [
                'datasets' => [
                    '0' => 'main_website',
                ],
            ],
        ];

        $this->_data['with_two_separately_links'] = [
            'name' => 'Downloadable product %isolation%',
            'sku' => 'downloadable_product_%isolation%',
            'visibility' => 'Catalog, Search',
            'status' => 'Enabled',
            'url_key' => 'downloadable-product-%isolation%',
            'price' => [
                'value' => '20',
            ],
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'description' => 'This is description for downloadable product with two separately
                links
            ',
            'short_description' => 'This is short description for downloadable product with
                two separately links
            ',
            'stock_data' => [
                'qty' => '111',
                'is_in_stock' => 'In Stock',
            ],
            'is_virtual' => 'Yes',
            'downloadable_links' => [
                'dataset' => 'with_two_separately_links',
            ],
            'downloadable_sample' => [
                'dataset' => 'default',
            ],
            'checkout_data' => [
                'dataset' => 'with_two_separately_links',
            ],
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
        ];

        $this->_data['with_two_separately_links_special_price_and_category'] = [
            'name' => 'Downloadable product %isolation%',
            'sku' => 'downloadable_product_%isolation%',
            'url_key' => 'downloadable-product-%isolation%',
            'price' => [
                'value' => '30',
            ],
            'special_price' => '20',
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'stock_data' => [
                'qty' => '1111',
                'is_in_stock' => 'In Stock',
            ],
            'description' => 'This is description for downloadable product with special
                price
            ',
            'short_description' => 'This is short description for downloadable product with
                special price
            ',
            'status' => 'Enabled',
            'category_ids' => [
                'dataset' => 'default_subcategory',
            ],
            'visibility' => 'Catalog, Search',
            'is_virtual' => 'Yes',
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'downloadable_links' => [
                'dataset' => 'with_two_separately_links',
            ],
            'checkout_data' => [
                'dataset' => 'with_two_bought_links',
            ],
        ];

        $this->_data['with_two_separately_links_group_price_and_category'] = [
            'name' => 'Downloadable product %isolation%',
            'sku' => 'downloadable_product_%isolation%',
            'url_key' => 'downloadable-product-%isolation%',
            'price' => [
                'value' => '30',
            ],
            'group_price' => [
                'dataset' => 'downloadable_with_tax',
            ],
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'stock_data' => [
                'qty' => '1111',
                'is_in_stock' => 'In Stock',
            ],
            'description' => 'This is description for downloadable product with group price
            ',
            'short_description' => 'This is short description for downloadable product with
                group price
            ',
            'status' => 'Enabled',
            'category_ids' => [
                'dataset' => 'default_subcategory',
            ],
            'visibility' => 'Catalog, Search',
            'is_virtual' => 'Yes',
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'downloadable_links' => [
                'dataset' => 'with_two_separately_links',
            ],
            'checkout_data' => [
                'dataset' => 'with_two_bought_links',
            ],
        ];

        $this->_data['with_two_separately_links_custom_options_and_category'] = [
            'name' => 'Downloadable product %isolation%',
            'sku' => 'downloadable_product_%isolation%',
            'url_key' => 'downloadable-product-%isolation%',
            'price' => [
                'value' => '20',
            ],
            'tax_class_id' => [
                'dataset' => 'Taxable Goods',
            ],
            'stock_data' => [
                'qty' => '1111',
                'is_in_stock' => 'In Stock',
            ],
            'description' => 'This is description for downloadable product with custom
                options
            ',
            'short_description' => 'This is short description for downloadable product with
                custom options
            ',
            'status' => 'Enabled',
            'category_ids' => [
                'dataset' => 'default_subcategory',
            ],
            'visibility' => 'Catalog, Search',
            'is_virtual' => 'Yes',
            'website_ids' => [
                'dataset' => [
                    '0' => 'main_website',
                ],
            ],
            'downloadable_links' => [
                'dataset' => 'with_two_separately_links',
            ],
            'custom_options' => [
                'dataset' => 'drop_down_with_one_option_percent_price',
            ],
            'checkout_data' => [
                'dataset' => 'one_custom_option_and_downloadable_link',
            ],
        ];
    }
}
