<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Catalog\Test\Fixture;

/**
 * Class CatalogProductSimple
 */
class CatalogProductSimple extends \Magento\Mtf\Fixture\InjectableFixture
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\Catalog\Test\Repository\CatalogProductSimple';

    /**
     * @var string
     */
    protected $handlerInterface = 'Mage\Catalog\Test\Handler\CatalogProductSimple\CatalogProductSimpleInterface';

    /**
     * @var array
     */
    protected $dataConfig = [
        'type_id' => 'simple',
        'create_url_params' => [
            'type' => 'simple',
            'set' => '4',
        ],
        'input_prefix' => 'product',
    ];


    /**
     * @var array
     */
    protected $category_ids = [
        'is_required' => '0',
        'group' => 'categories',
        'source' => 'Mage\Catalog\Test\Fixture\CatalogProductSimple\CategoryIds',
    ];

    /**
     * @var array
     */
    protected $attribute_set_id = [
        'group' => 'null',
        'source' => 'Mage\Catalog\Test\Fixture\CatalogProductSimple\AttributeSetId',
    ];

    /**
     * @var array
     */
    protected $color = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $country_of_manufacture = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $created_at = [
        'is_required' => '1',
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
    protected $description = [
        'is_required' => '1',
        'group' => 'general',
    ];

    /**
     * @var array
     */
    protected $gallery = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gift_message_available = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gift_wrapping_available = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gift_wrapping_price = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $group_price = [
        'is_required' => '0',
        'group' => 'prices',
        'repository' => 'Mage\Catalog\Test\Repository\CatalogProductSimple\GroupPriceOptions',
    ];

    /**
     * @var array
     */
    protected $has_options = [
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
    protected $image_label = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $is_recurring = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $is_returnable = [
        'is_required' => '0',
        'group' => 'autosettings',
    ];

    /**
     * @var array
     */
    protected $manufacturer = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $media_gallery = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $meta_description = [
        'is_required' => '0',
        'group' => 'search-engine-optimization',
    ];

    /**
     * @var array
     */
    protected $meta_keyword = [
        'is_required' => '0',
        'group' => 'search-engine-optimization',
    ];

    /**
     * @var array
     */
    protected $meta_title = [
        'is_required' => '0',
        'group' => 'search-engine-optimization',
    ];

    /**
     * @var array
     */
    protected $minimal_price = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $msrp = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $msrp_display_actual_price_type = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $msrp_enabled = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $name = [
        'is_required' => '1',
        'group' => 'general',
    ];

    /**
     * @var array
     */
    protected $news_from_date = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $news_to_date = [
        'is_required' => '0',
        'source' => 'Magento\Backend\Test\Fixture\Date',
    ];

    /**
     * @var array
     */
    protected $old_id = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $options_container = [
        'is_required' => '0',
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
    protected $price = [
        'is_required' => '1',
        'group' => 'prices',
        'source' => 'Mage\Catalog\Test\Fixture\CatalogProductSimple\Price',
        'repository' => 'Mage\Catalog\Test\Repository\CatalogProductSimple\Price',
    ];

    /**
     * @var array
     */
    protected $recurring_profile = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $related_tgtr_position_behavior = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $related_tgtr_position_limit = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $required_options = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $short_description = [
        'is_required' => '1',
        'group' => 'general',
    ];

    /**
     * @var array
     */
    protected $sku = [
        'is_required' => '1',
        'group' => 'general',
    ];

    /**
     * @var array
     */
    protected $small_image = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $small_image_label = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $special_from_date = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $special_price = [
        'is_required' => '0',
        'group' => 'prices',
    ];

    /**
     * @var array
     */
    protected $special_to_date = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $status = [
        'is_required' => '1',
        'group' => 'general',
    ];

    /**
     * @var array
     */
    protected $tax_class_id = [
        'is_required' => '1',
        'group' => 'prices',
        'source' => 'Mage\Catalog\Test\Fixture\CatalogProductSimple\TaxClass',
    ];

    /**
     * @var array
     */
    protected $thumbnail = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $thumbnail_label = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $tier_price = [
        'is_required' => '0',
        'group' => 'prices',
        'repository' => 'Mage\Catalog\Test\Repository\CatalogProductSimple\TierPriceOptions',
    ];

    /**
     * @var array
     */
    protected $updated_at = [
        'is_required' => '1',
    ];

    /**
     * @var array
     */
    protected $upsell_tgtr_position_behavior = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $upsell_tgtr_position_limit = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $url_key = [
        'is_required' => '0',
        'group' => 'general',
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
    protected $visibility = [
        'is_required' => '1',
        'group' => 'general',
    ];

    /**
     * @var array
     */
    protected $weight = [
        'is_required' => '1',
        'group' => 'general',
    ];

    /**
     * @var array
     */
    protected $id = [
    ];

    /**
     * @var array
     */
    protected $type_id = [
    ];

    /**
     * @var array
     */
    protected $custom_options = [
        'source' => 'Mage\Catalog\Test\Fixture\CatalogProductSimple\CustomOptions',
        'repository' => 'Mage\Catalog\Test\Repository\CatalogProductSimple\CustomOptions',
        'group' => 'custom-options',
    ];

    /**
     * @var array
     */
    protected $checkout_data = [
        'group' => 'null',
        'repository' => 'Mage\Catalog\Test\Repository\CatalogProductSimple\CheckoutData',
    ];

    /**
     * @var array
     */
    protected $attributes = [
        'group' => 'general',
        'source' => 'Mage\Catalog\Test\Fixture\CatalogProductSimple\Attributes',
        'repository' => 'Mage\Catalog\Test\Repository\CatalogProductSimple\Attributes',
    ];

    /**
     * @var array
     */
    protected $stock_data = [
        'group' => 'inventory',
    ];

    /**
     * @var array
     */
    protected $recurring_payment = [
        'group' => 'advanced-pricing',
    ];

    /**
     * @var array
     */
    protected $is_virtual = [
    ];

    /**
     * @var array
     */
    protected $isPersist = [
        'group' => 'null',
    ];

    /**
     * @var array
     */
    protected $related_products = [
        'group' => 'related-products',
        'source' => 'Mage\Catalog\Test\Fixture\CatalogProductSimple\RelatedProducts',
    ];

    /**
     * @var array
     */
    protected $cross_sell_products = [
        'group' => 'crosssells',
        'source' => 'Mage\Catalog\Test\Fixture\CatalogProductSimple\CrossSellProducts',
    ];

    /**
     * @var array
     */
    protected $up_sell_products = [
        'group' => 'up-sells',
        'source' => 'Mage\Catalog\Test\Fixture\CatalogProductSimple\UpSellProducts',
    ];

    /**
     * @var array
     */
    protected $website_ids = [
        'source' => 'Mage\Catalog\Test\Fixture\CatalogProductSimple\WebsiteIds',
    ];

    /**
     * @var array
     */
    protected $fpt = [
        'is_required' => '0',
        'group' => 'product-details',
        'repository' => 'Mage\Catalog\Test\Repository\CatalogProductSimple\Fpt',
        'source' => 'Mage\Catalog\Test\Fixture\CatalogProductSimple\Fpt',
    ];

    /**
     * @return mixed
     */
    public function getCategoryIds()
    {
        return $this->getData('category_ids');
    }

    /**
     * @return mixed
     */
    public function getAttributeSetId()
    {
        return $this->getData('attribute_set_id');
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->getData('color');
    }

    /**
     * @return mixed
     */
    public function getCountryOfManufacture()
    {
        return $this->getData('country_of_manufacture');
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->getData('created_at');
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
    public function getDescription()
    {
        return $this->getData('description');
    }

    /**
     * @return mixed
     */
    public function getGallery()
    {
        return $this->getData('gallery');
    }

    /**
     * @return mixed
     */
    public function getGiftMessageAvailable()
    {
        return $this->getData('gift_message_available');
    }

    /**
     * @return mixed
     */
    public function getGiftWrappingAvailable()
    {
        return $this->getData('gift_wrapping_available');
    }

    /**
     * @return mixed
     */
    public function getGiftWrappingPrice()
    {
        return $this->getData('gift_wrapping_price');
    }

    /**
     * @return mixed
     */
    public function getGroupPrice()
    {
        return $this->getData('group_price');
    }

    /**
     * @return mixed
     */
    public function getHasOptions()
    {
        return $this->getData('has_options');
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
    public function getImageLabel()
    {
        return $this->getData('image_label');
    }

    /**
     * @return mixed
     */
    public function getIsRecurring()
    {
        return $this->getData('is_recurring');
    }

    /**
     * @return mixed
     */
    public function getIsReturnable()
    {
        return $this->getData('is_returnable');
    }

    /**
     * @return mixed
     */
    public function getManufacturer()
    {
        return $this->getData('manufacturer');
    }

    /**
     * @return mixed
     */
    public function getMediaGallery()
    {
        return $this->getData('media_gallery');
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
    public function getMetaKeyword()
    {
        return $this->getData('meta_keyword');
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
    public function getMinimalPrice()
    {
        return $this->getData('minimal_price');
    }

    /**
     * @return mixed
     */
    public function getMsrp()
    {
        return $this->getData('msrp');
    }

    /**
     * @return mixed
     */
    public function getMsrpDisplayActualPriceType()
    {
        return $this->getData('msrp_display_actual_price_type');
    }

    /**
     * @return mixed
     */
    public function getMsrpEnabled()
    {
        return $this->getData('msrp_enabled');
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
    public function getNewsFromDate()
    {
        return $this->getData('news_from_date');
    }

    /**
     * @return mixed
     */
    public function getNewsToDate()
    {
        return $this->getData('news_to_date');
    }

    /**
     * @return mixed
     */
    public function getOldId()
    {
        return $this->getData('old_id');
    }

    /**
     * @return mixed
     */
    public function getOptionsContainer()
    {
        return $this->getData('options_container');
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
    public function getPrice()
    {
        return $this->getData('price');
    }

    /**
     * @return mixed
     */
    public function getRecurringProfile()
    {
        return $this->getData('recurring_profile');
    }

    /**
     * @return mixed
     */
    public function getRelatedTgtrPositionBehavior()
    {
        return $this->getData('related_tgtr_position_behavior');
    }

    /**
     * @return mixed
     */
    public function getRelatedTgtrPositionLimit()
    {
        return $this->getData('related_tgtr_position_limit');
    }

    /**
     * @return mixed
     */
    public function getRequiredOptions()
    {
        return $this->getData('required_options');
    }

    /**
     * @return mixed
     */
    public function getShortDescription()
    {
        return $this->getData('short_description');
    }

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->getData('sku');
    }

    /**
     * @return mixed
     */
    public function getSmallImage()
    {
        return $this->getData('small_image');
    }

    /**
     * @return mixed
     */
    public function getSmallImageLabel()
    {
        return $this->getData('small_image_label');
    }

    /**
     * @return mixed
     */
    public function getSpecialFromDate()
    {
        return $this->getData('special_from_date');
    }

    /**
     * @return mixed
     */
    public function getSpecialPrice()
    {
        return $this->getData('special_price');
    }

    /**
     * @return mixed
     */
    public function getSpecialToDate()
    {
        return $this->getData('special_to_date');
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->getData('status');
    }

    /**
     * @return mixed
     */
    public function getTaxClassId()
    {
        return $this->getData('tax_class_id');
    }

    /**
     * @return mixed
     */
    public function getThumbnail()
    {
        return $this->getData('thumbnail');
    }

    /**
     * @return mixed
     */
    public function getThumbnailLabel()
    {
        return $this->getData('thumbnail_label');
    }

    /**
     * @return mixed
     */
    public function getTierPrice()
    {
        return $this->getData('tier_price');
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->getData('updated_at');
    }

    /**
     * @return mixed
     */
    public function getUpsellTgtrPositionBehavior()
    {
        return $this->getData('upsell_tgtr_position_behavior');
    }

    /**
     * @return mixed
     */
    public function getUpsellTgtrPositionLimit()
    {
        return $this->getData('upsell_tgtr_position_limit');
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
    public function getVisibility()
    {
        return $this->getData('visibility');
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->getData('weight');
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
    public function getTypeId()
    {
        return $this->getData('type_id');
    }

    /**
     * @return mixed
     */
    public function getCustomOptions()
    {
        return $this->getData('custom_options');
    }

    /**
     * @return mixed
     */
    public function getCheckoutData()
    {
        return $this->getData('checkout_data');
    }

    /**
     * @return mixed
     */
    public function getAttributes()
    {
        return $this->getData('attributes');
    }

    /**
     * @return mixed
     */
    public function getStockData()
    {
        return $this->getData('stock_data');
    }

    /**
     * @return mixed
     */
    public function getRecurringPayment()
    {
        return $this->getData('recurring_payment');
    }

    /**
     * @return mixed
     */
    public function getIsVirtual()
    {
        return $this->getData('is_virtual');
    }

    /**
     * @return mixed
     */
    public function getIsPersist()
    {
        return $this->getData('isPersist');
    }

    /**
     * @return mixed
     */
    public function getRelatedProducts()
    {
        return $this->getData('related_products');
    }

    /**
     * @return mixed
     */
    public function getCrossSellProducts()
    {
        return $this->getData('cross_sell_products');
    }

    /**
     * @return mixed
     */
    public function getUpSellProducts()
    {
        return $this->getData('up_sell_products');
    }

    /**
     * @return mixed
     */
    public function getWebsiteIds()
    {
        return $this->getData('website_ids');
    }

    /**
     * @return mixed
     */
    public function getFpt()
    {
        return $this->getData('fpt');
    }
}
