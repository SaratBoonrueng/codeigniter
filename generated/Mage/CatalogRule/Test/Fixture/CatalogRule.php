<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\CatalogRule\Test\Fixture;

/**
 * Class CatalogRule
 */
class CatalogRule extends \Magento\Mtf\Fixture\InjectableFixture
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\CatalogRule\Test\Repository\CatalogRule';

    /**
     * @var string
     */
    protected $handlerInterface = 'Mage\CatalogRule\Test\Handler\CatalogRule\CatalogRuleInterface';


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
    protected $is_active = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $conditions_serialized = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $actions_serialized = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $stop_rules_processing = [
        'is_required' => '0',
        'group' => 'rule_information',
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
    protected $sub_is_enable = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $sub_simple_action = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $sub_discount_amount = [
        'group' => 'rule_information',
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
    protected $customer_group_ids = [
        'group' => 'rule_information',
    ];

    /**
     * @var array
     */
    protected $condition_type = [
        'group' => 'conditions',
    ];

    /**
     * @var array
     */
    protected $condition_value = [
        'group' => 'conditions',
    ];

    /**
     * @var array
     */
    protected $rule = [
        'group' => 'conditions',
    ];

    /**
     * @var array
     */
    protected $conditions = [
        'group' => 'conditions',
    ];

    /**
     * @var array
     */
    protected $id = [
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
    public function getSubIsEnable()
    {
        return $this->getData('sub_is_enable');
    }

    /**
     * @return mixed
     */
    public function getSubSimpleAction()
    {
        return $this->getData('sub_simple_action');
    }

    /**
     * @return mixed
     */
    public function getSubDiscountAmount()
    {
        return $this->getData('sub_discount_amount');
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
    public function getCustomerGroupIds()
    {
        return $this->getData('customer_group_ids');
    }

    /**
     * @return mixed
     */
    public function getConditionType()
    {
        return $this->getData('condition_type');
    }

    /**
     * @return mixed
     */
    public function getConditionValue()
    {
        return $this->getData('condition_value');
    }

    /**
     * @return mixed
     */
    public function getRule()
    {
        return $this->getData('rule');
    }

    /**
     * @return mixed
     */
    public function getConditions()
    {
        return $this->getData('conditions');
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->getData('id');
    }
}
