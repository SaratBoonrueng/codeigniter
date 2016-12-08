<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\SalesRule\Test\Fixture;

/**
 * Class SalesRule
 */
class SalesRule extends \Magento\Mtf\Fixture\InjectableFixture
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\SalesRule\Test\Repository\SalesRule';

    /**
     * @var string
     */
    protected $handlerInterface = 'Mage\SalesRule\Test\Handler\SalesRule\SalesRuleInterface';


    /**
     * @var array
     */
    protected $rule_id = [
        'is_required' => '1',
    ];

    /**
     * @var array
     */
    protected $name = [
        'is_required' => '0',
        'group' => 'rule_information',
    ];

    /**
     * @var array
     */
    protected $description = [
        'is_required' => '0',
        'group' => 'rule_information',
    ];

    /**
     * @var array
     */
    protected $from_date = [
        'is_required' => '0',
        'group' => 'rule_information',
    ];

    /**
     * @var array
     */
    protected $to_date = [
        'is_required' => '0',
        'group' => 'rule_information',
    ];

    /**
     * @var array
     */
    protected $uses_per_customer = [
        'is_required' => '0',
        'group' => 'rule_information',
    ];

    /**
     * @var array
     */
    protected $is_active = [
        'is_required' => '0',
        'group' => 'rule_information',
    ];

    /**
     * @var array
     */
    protected $conditions_serialized = [
        'is_required' => '0',
        'group' => 'conditions',
    ];

    /**
     * @var array
     */
    protected $actions_serialized = [
        'is_required' => '0',
        'group' => 'actions',
    ];

    /**
     * @var array
     */
    protected $stop_rules_processing = [
        'is_required' => '0',
        'group' => 'actions',
    ];

    /**
     * @var array
     */
    protected $is_advanced = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $product_ids = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $sort_order = [
        'is_required' => '0',
        'group' => 'rule_information',
    ];

    /**
     * @var array
     */
    protected $simple_action = [
        'is_required' => '0',
        'group' => 'actions',
    ];

    /**
     * @var array
     */
    protected $discount_amount = [
        'is_required' => '0',
        'group' => 'actions',
    ];

    /**
     * @var array
     */
    protected $discount_qty = [
        'is_required' => '0',
        'group' => 'actions',
    ];

    /**
     * @var array
     */
    protected $discount_step = [
        'is_required' => '0',
        'group' => 'actions',
    ];

    /**
     * @var array
     */
    protected $simple_free_shipping = [
        'is_required' => '0',
        'group' => 'actions',
    ];

    /**
     * @var array
     */
    protected $apply_to_shipping = [
        'is_required' => '0',
        'group' => 'actions',
    ];

    /**
     * @var array
     */
    protected $times_used = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $is_rss = [
        'is_required' => '0',
        'group' => 'rule_information',
    ];

    /**
     * @var array
     */
    protected $coupon_type = [
        'is_required' => '0',
        'group' => 'rule_information',
    ];

    /**
     * @var array
     */
    protected $use_auto_generation = [
        'is_required' => '0',
        'group' => 'rule_information',
    ];

    /**
     * @var array
     */
    protected $uses_per_coupon = [
        'is_required' => '0',
        'group' => 'rule_information',
    ];

    /**
     * @var array
     */
    protected $customer_group_ids = [
        'group' => 'rule_information',
    ];

    /**
     * @var array
     */
    protected $store_labels = [
        'group' => 'labels',
    ];

    /**
     * @var array
     */
    protected $coupon_code = [
        'group' => 'rule_information',
    ];

    /**
     * @var array
     */
    protected $website_ids = [
        'group' => 'rule_information',
        'repository' => 'Mage\SalesRule\Test\Repository\SalesRule\WebsiteIds',
        'source' => 'Mage\SalesRule\Test\Fixture\SalesRule\WebsiteIds',
    ];

    /**
     * @return mixed
     */
    public function getRuleId()
    {
        return $this->getData('rule_id');
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
    public function getDescription()
    {
        return $this->getData('description');
    }

    /**
     * @return mixed
     */
    public function getFromDate()
    {
        return $this->getData('from_date');
    }

    /**
     * @return mixed
     */
    public function getToDate()
    {
        return $this->getData('to_date');
    }

    /**
     * @return mixed
     */
    public function getUsesPerCustomer()
    {
        return $this->getData('uses_per_customer');
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
    public function getConditionsSerialized()
    {
        return $this->getData('conditions_serialized');
    }

    /**
     * @return mixed
     */
    public function getActionsSerialized()
    {
        return $this->getData('actions_serialized');
    }

    /**
     * @return mixed
     */
    public function getStopRulesProcessing()
    {
        return $this->getData('stop_rules_processing');
    }

    /**
     * @return mixed
     */
    public function getIsAdvanced()
    {
        return $this->getData('is_advanced');
    }

    /**
     * @return mixed
     */
    public function getProductIds()
    {
        return $this->getData('product_ids');
    }

    /**
     * @return mixed
     */
    public function getSortOrder()
    {
        return $this->getData('sort_order');
    }

    /**
     * @return mixed
     */
    public function getSimpleAction()
    {
        return $this->getData('simple_action');
    }

    /**
     * @return mixed
     */
    public function getDiscountAmount()
    {
        return $this->getData('discount_amount');
    }

    /**
     * @return mixed
     */
    public function getDiscountQty()
    {
        return $this->getData('discount_qty');
    }

    /**
     * @return mixed
     */
    public function getDiscountStep()
    {
        return $this->getData('discount_step');
    }

    /**
     * @return mixed
     */
    public function getSimpleFreeShipping()
    {
        return $this->getData('simple_free_shipping');
    }

    /**
     * @return mixed
     */
    public function getApplyToShipping()
    {
        return $this->getData('apply_to_shipping');
    }

    /**
     * @return mixed
     */
    public function getTimesUsed()
    {
        return $this->getData('times_used');
    }

    /**
     * @return mixed
     */
    public function getIsRss()
    {
        return $this->getData('is_rss');
    }

    /**
     * @return mixed
     */
    public function getCouponType()
    {
        return $this->getData('coupon_type');
    }

    /**
     * @return mixed
     */
    public function getUseAutoGeneration()
    {
        return $this->getData('use_auto_generation');
    }

    /**
     * @return mixed
     */
    public function getUsesPerCoupon()
    {
        return $this->getData('uses_per_coupon');
    }

    /**
     * @return mixed
     */
    public function getCustomerGroupIds()
    {
        return $this->getData('customer_group_ids');
    }

    /**
     * @return mixed
     */
    public function getStoreLabels()
    {
        return $this->getData('store_labels');
    }

    /**
     * @return mixed
     */
    public function getCouponCode()
    {
        return $this->getData('coupon_code');
    }

    /**
     * @return mixed
     */
    public function getWebsiteIds()
    {
        return $this->getData('website_ids');
    }
}
