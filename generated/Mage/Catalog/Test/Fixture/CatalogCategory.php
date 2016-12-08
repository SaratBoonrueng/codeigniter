<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Catalog\Test\Fixture;

/**
 * Class CatalogCategory
 */
class CatalogCategory extends \Magento\Mtf\Fixture\InjectableFixture
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\Catalog\Test\Repository\CatalogCategory';

    /**
     * @var string
     */
    protected $handlerInterface = 'Mage\Catalog\Test\Handler\CatalogCategory\CatalogCategoryInterface';


    /**
     * @var array
     */
    protected $all_children = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $available_sort_by = [
        'is_required' => '1',
        'group' => 'display_setting',
    ];

    /**
     * @var array
     */
    protected $available_product_listing_config = [
        'is_required' => '1',
        'group' => 'display_setting',
    ];

    /**
     * @var array
     */
    protected $default_product_listing_config = [
        'is_required' => '1',
        'group' => 'display_setting',
    ];

    /**
     * @var array
     */
    protected $default_sort_by = [
        'is_required' => '1',
        'group' => 'display_setting',
    ];

    /**
     * @var array
     */
    protected $children = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $children_count = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $custom_apply_to_products = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $custom_design = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $custom_design_from = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $custom_design_to = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $custom_layout_update = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $custom_use_parent_settings = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $parent_id = [
        'is_required' => '0',
        'group' => 'null',
        'source' => 'Mage\Catalog\Test\Fixture\CatalogCategory\ParentId',
    ];

    /**
     * @var array
     */
    protected $description = [
        'is_required' => '0',
        'group' => 'general_information',
    ];

    /**
     * @var array
     */
    protected $display_mode = [
        'is_required' => '0',
        'group' => 'display_setting',
    ];

    /**
     * @var array
     */
    protected $filter_price_range = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $image = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $include_in_menu = [
        'is_required' => '1',
        'group' => 'general_information',
    ];

    /**
     * @var array
     */
    protected $is_active = [
        'group' => 'general_information',
    ];

    /**
     * @var array
     */
    protected $is_anchor = [
        'group' => 'display_setting',
    ];

    /**
     * @var array
     */
    protected $landing_page = [
        'is_required' => '0',
        'group' => 'display_setting',
    ];

    /**
     * @var array
     */
    protected $level = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $meta_description = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $meta_keywords = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $meta_title = [
        'is_required' => '0',
        'group' => 'general_information',
    ];

    /**
     * @var array
     */
    protected $name = [
        'is_required' => '1',
        'group' => 'general_information',
    ];

    /**
     * @var array
     */
    protected $page_layout = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $path = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $path_in_store = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $position = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $url_key = [
        'is_required' => '0',
        'group' => 'general_information',
    ];

    /**
     * @var array
     */
    protected $url_path = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $id = [
        'group' => 'null',
    ];

    /**
     * @var array
     */
    protected $category_products = [
        'group' => 'category_products',
        'source' => 'Mage\Catalog\Test\Fixture\CatalogCategory\CategoryProducts',
    ];

    /**
     * @return mixed
     */
    public function getAllChildren()
    {
        return $this->getData('all_children');
    }

    /**
     * @return mixed
     */
    public function getAvailableSortBy()
    {
        return $this->getData('available_sort_by');
    }

    /**
     * @return mixed
     */
    public function getAvailableProductListingConfig()
    {
        return $this->getData('available_product_listing_config');
    }

    /**
     * @return mixed
     */
    public function getDefaultProductListingConfig()
    {
        return $this->getData('default_product_listing_config');
    }

    /**
     * @return mixed
     */
    public function getDefaultSortBy()
    {
        return $this->getData('default_sort_by');
    }

    /**
     * @return mixed
     */
    public function getChildren()
    {
        return $this->getData('children');
    }

    /**
     * @return mixed
     */
    public function getChildrenCount()
    {
        return $this->getData('children_count');
    }

    /**
     * @return mixed
     */
    public function getCustomApplyToProducts()
    {
        return $this->getData('custom_apply_to_products');
    }

    /**
     * @return mixed
     */
    public function getCustomDesign()
    {
        return $this->getData('custom_design');
    }

    /**
     * @return mixed
     */
    public function getCustomDesignFrom()
    {
        return $this->getData('custom_design_from');
    }

    /**
     * @return mixed
     */
    public function getCustomDesignTo()
    {
        return $this->getData('custom_design_to');
    }

    /**
     * @return mixed
     */
    public function getCustomLayoutUpdate()
    {
        return $this->getData('custom_layout_update');
    }

    /**
     * @return mixed
     */
    public function getCustomUseParentSettings()
    {
        return $this->getData('custom_use_parent_settings');
    }

    /**
     * @return mixed
     */
    public function getParentId()
    {
        return $this->getData('parent_id');
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->getData('description');
    }

    /**
     * @return mixed
     */
    public function getDisplayMode()
    {
        return $this->getData('display_mode');
    }

    /**
     * @return mixed
     */
    public function getFilterPriceRange()
    {
        return $this->getData('filter_price_range');
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->getData('image');
    }

    /**
     * @return mixed
     */
    public function getIncludeInMenu()
    {
        return $this->getData('include_in_menu');
    }

    /**
     * @return mixed
     */
    public function getIsActive()
    {
        return $this->getData('is_active');
    }

    /**
     * @return mixed
     */
    public function getIsAnchor()
    {
        return $this->getData('is_anchor');
    }

    /**
     * @return mixed
     */
    public function getLandingPage()
    {
        return $this->getData('landing_page');
    }

    /**
     * @return mixed
     */
    public function getLevel()
    {
        return $this->getData('level');
    }

    /**
     * @return mixed
     */
    public function getMetaDescription()
    {
        return $this->getData('meta_description');
    }

    /**
     * @return mixed
     */
    public function getMetaKeywords()
    {
        return $this->getData('meta_keywords');
    }

    /**
     * @return mixed
     */
    public function getMetaTitle()
    {
        return $this->getData('meta_title');
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->getData('name');
    }

    /**
     * @return mixed
     */
    public function getPageLayout()
    {
        return $this->getData('page_layout');
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->getData('path');
    }

    /**
     * @return mixed
     */
    public function getPathInStore()
    {
        return $this->getData('path_in_store');
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->getData('position');
    }

    /**
     * @return mixed
     */
    public function getUrlKey()
    {
        return $this->getData('url_key');
    }

    /**
     * @return mixed
     */
    public function getUrlPath()
    {
        return $this->getData('url_path');
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->getData('id');
    }

    /**
     * @return mixed
     */
    public function getCategoryProducts()
    {
        return $this->getData('category_products');
    }
}
