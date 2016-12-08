<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Catalog\Test\Repository;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class CatalogCategory
 */
class CatalogCategory extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['default'] = [
            'name' => 'Category%isolation%',
            'path' => 'Default Category',
            'url_key' => 'category%isolation%',
            'is_active' => 'Yes',
            'include_in_menu' => 'Yes',
            'parent_id' => '2',
        ];

        $this->_data['default_category'] = [
            'name' => 'Default Category',
            'parent_id' => '1',
            'is_active' => 'Yes',
            'id' => '2',
        ];

        $this->_data['default_subcategory'] = [
            'name' => 'DefaultSubcategory%isolation%',
            'url_key' => 'default-subcategory-%isolation%',
            'parent_id' => [
                'dataset' => 'default_category',
            ],
            'is_active' => 'Yes',
            'include_in_menu' => 'Yes',
        ];

        $this->_data['root_category'] = [
            'name' => 'RootCategory%isolation%',
            'url_key' => 'root-category-%isolation%',
            'parent_id' => '1',
            'is_active' => 'Yes',
            'include_in_menu' => 'Yes',
        ];

        $this->_data['anchor_category'] = [
            'name' => 'AnchorSubcategory%isolation%',
            'url_key' => 'anchor-subcategory-%isolation%',
            'parent_id' => [
                'dataset' => 'default_category',
            ],
            'is_active' => 'Yes',
            'include_in_menu' => 'Yes',
            'is_anchor' => 'Yes',
        ];

        $this->_data['subcategory_with_assigned_products'] = [
            'name' => 'DefaultSubcategory%isolation%',
            'url_key' => 'default-subcategory-%isolation%',
            'parent_id' => [
                'dataset' => 'default_category',
            ],
            'is_active' => 'Yes',
            'include_in_menu' => 'Yes',
            'category_products' => [
                'dataset' => 'catalogProductSimple::default,catalogProductSimple::default,catalogProductSimple::default',
            ],
        ];
    }
}
