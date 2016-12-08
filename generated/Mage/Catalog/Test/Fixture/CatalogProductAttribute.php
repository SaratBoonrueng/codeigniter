<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Catalog\Test\Fixture;

/**
 * Class CatalogProductAttribute
 */
class CatalogProductAttribute extends \Magento\Mtf\Fixture\InjectableFixture
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\Catalog\Test\Repository\CatalogProductAttribute';

    /**
     * @var string
     */
    protected $handlerInterface = 'Mage\Catalog\Test\Handler\CatalogProductAttribute\CatalogProductAttributeInterface';


    /**
     * @var array
     */
    protected $attribute_id = [
        'is_required' => '1',
    ];

    /**
     * @var array
     */
    protected $entity_type_id = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $default_value_text = [
        'is_required' => '0',
        'group' => 'attribute-properties',
    ];

    /**
     * @var array
     */
    protected $attribute_code = [
        'is_required' => '0',
        'group' => 'attribute-properties',
    ];

    /**
     * @var array
     */
    protected $attribute_model = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $backend_model = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $backend_type = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $backend_table = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $frontend_model = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $frontend_input = [
        'is_required' => '0',
        'group' => 'attribute-properties',
    ];

    /**
     * @var array
     */
    protected $frontend_label = [
        'is_required' => '0',
        'group' => 'manage-titles',
    ];

    /**
     * @var array
     */
    protected $frontend_class = [
        'is_required' => '0',
        'group' => 'attribute-properties',
    ];

    /**
     * @var array
     */
    protected $source_model = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $is_required = [
        'is_required' => '0',
        'group' => 'attribute-properties',
    ];

    /**
     * @var array
     */
    protected $is_user_defined = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $default_value = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $is_unique = [
        'is_required' => '0',
        'group' => 'attribute-properties',
    ];

    /**
     * @var array
     */
    protected $note = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $frontend_input_renderer = [
        'is_required' => '0',
        'group' => 'attribute-properties',
    ];

    /**
     * @var array
     */
    protected $is_global = [
        'is_required' => '0',
        'group' => 'attribute-properties',
    ];

    /**
     * @var array
     */
    protected $is_visible = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $is_searchable = [
        'is_required' => '0',
        'group' => 'frontend-properties',
    ];

    /**
     * @var array
     */
    protected $is_filterable = [
        'is_required' => '0',
        'group' => 'frontend-properties',
    ];

    /**
     * @var array
     */
    protected $is_comparable = [
        'is_required' => '0',
        'group' => 'frontend-properties',
    ];

    /**
     * @var array
     */
    protected $is_visible_on_front = [
        'is_required' => '0',
        'group' => 'frontend-properties',
    ];

    /**
     * @var array
     */
    protected $is_html_allowed_on_front = [
        'is_required' => '0',
        'group' => 'frontend-properties',
    ];

    /**
     * @var array
     */
    protected $is_used_for_price_rules = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $is_filterable_in_search = [
        'is_required' => '0',
        'group' => 'frontend-properties',
    ];

    /**
     * @var array
     */
    protected $used_in_product_listing = [
        'is_required' => '0',
        'group' => 'frontend-properties',
    ];

    /**
     * @var array
     */
    protected $used_for_sort_by = [
        'is_required' => '0',
        'group' => 'frontend-properties',
    ];

    /**
     * @var array
     */
    protected $is_configurable = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $apply_to = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $is_visible_in_advanced_search = [
        'is_required' => '0',
        'group' => 'frontend-properties',
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
    protected $is_wysiwyg_enabled = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $is_used_for_promo_rules = [
        'is_required' => '0',
        'group' => 'frontend-properties',
    ];

    /**
     * @var array
     */
    protected $search_weight = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $options = [
        'is_required' => '0',
        'group' => 'manage-options',
        'source' => 'Mage\Catalog\Test\Fixture\CatalogProductAttribute\Options',
        'repository' => 'Mage\Catalog\Test\Repository\CatalogProductAttribute\Options',
    ];

    /**
     * @var array
     */
    protected $manage_frontend_label = [
        'is_required' => '0',
        'group' => 'manage-titles',
    ];

    /**
     * @return mixed
     */
    public function getAttributeId()
    {
        return $this->getData('attribute_id');
    }

    /**
     * @return mixed
     */
    public function getEntityTypeId()
    {
        return $this->getData('entity_type_id');
    }

    /**
     * @return mixed
     */
    public function getDefaultValueText()
    {
        return $this->getData('default_value_text');
    }

    /**
     * @return mixed
     */
    public function getAttributeCode()
    {
        return $this->getData('attribute_code');
    }

    /**
     * @return mixed
     */
    public function getAttributeModel()
    {
        return $this->getData('attribute_model');
    }

    /**
     * @return mixed
     */
    public function getBackendModel()
    {
        return $this->getData('backend_model');
    }

    /**
     * @return mixed
     */
    public function getBackendType()
    {
        return $this->getData('backend_type');
    }

    /**
     * @return mixed
     */
    public function getBackendTable()
    {
        return $this->getData('backend_table');
    }

    /**
     * @return mixed
     */
    public function getFrontendModel()
    {
        return $this->getData('frontend_model');
    }

    /**
     * @return mixed
     */
    public function getFrontendInput()
    {
        return $this->getData('frontend_input');
    }

    /**
     * @return mixed
     */
    public function getFrontendLabel()
    {
        return $this->getData('frontend_label');
    }

    /**
     * @return mixed
     */
    public function getFrontendClass()
    {
        return $this->getData('frontend_class');
    }

    /**
     * @return mixed
     */
    public function getSourceModel()
    {
        return $this->getData('source_model');
    }

    /**
     * @return mixed
     */
    public function getIsRequired()
    {
        return $this->getData('is_required');
    }

    /**
     * @return mixed
     */
    public function getIsUserDefined()
    {
        return $this->getData('is_user_defined');
    }

    /**
     * @return mixed
     */
    public function getDefaultValue()
    {
        return $this->getData('default_value');
    }

    /**
     * @return mixed
     */
    public function getIsUnique()
    {
        return $this->getData('is_unique');
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->getData('note');
    }

    /**
     * @return mixed
     */
    public function getFrontendInputRenderer()
    {
        return $this->getData('frontend_input_renderer');
    }

    /**
     * @return mixed
     */
    public function getIsGlobal()
    {
        return $this->getData('is_global');
    }

    /**
     * @return mixed
     */
    public function getIsVisible()
    {
        return $this->getData('is_visible');
    }

    /**
     * @return mixed
     */
    public function getIsSearchable()
    {
        return $this->getData('is_searchable');
    }

    /**
     * @return mixed
     */
    public function getIsFilterable()
    {
        return $this->getData('is_filterable');
    }

    /**
     * @return mixed
     */
    public function getIsComparable()
    {
        return $this->getData('is_comparable');
    }

    /**
     * @return mixed
     */
    public function getIsVisibleOnFront()
    {
        return $this->getData('is_visible_on_front');
    }

    /**
     * @return mixed
     */
    public function getIsHtmlAllowedOnFront()
    {
        return $this->getData('is_html_allowed_on_front');
    }

    /**
     * @return mixed
     */
    public function getIsUsedForPriceRules()
    {
        return $this->getData('is_used_for_price_rules');
    }

    /**
     * @return mixed
     */
    public function getIsFilterableInSearch()
    {
        return $this->getData('is_filterable_in_search');
    }

    /**
     * @return mixed
     */
    public function getUsedInProductListing()
    {
        return $this->getData('used_in_product_listing');
    }

    /**
     * @return mixed
     */
    public function getUsedForSortBy()
    {
        return $this->getData('used_for_sort_by');
    }

    /**
     * @return mixed
     */
    public function getIsConfigurable()
    {
        return $this->getData('is_configurable');
    }

    /**
     * @return mixed
     */
    public function getApplyTo()
    {
        return $this->getData('apply_to');
    }

    /**
     * @return mixed
     */
    public function getIsVisibleInAdvancedSearch()
    {
        return $this->getData('is_visible_in_advanced_search');
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
    public function getIsWysiwygEnabled()
    {
        return $this->getData('is_wysiwyg_enabled');
    }

    /**
     * @return mixed
     */
    public function getIsUsedForPromoRules()
    {
        return $this->getData('is_used_for_promo_rules');
    }

    /**
     * @return mixed
     */
    public function getSearchWeight()
    {
        return $this->getData('search_weight');
    }

    /**
     * @return mixed
     */
    public function getOptions()
    {
        return $this->getData('options');
    }

    /**
     * @return mixed
     */
    public function getManageFrontendLabel()
    {
        return $this->getData('manage_frontend_label');
    }
}
