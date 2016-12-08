<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Customer\Test\Fixture;

/**
 * Class Customer
 */
class Customer extends \Magento\Mtf\Fixture\InjectableFixture
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\Customer\Test\Repository\Customer';

    /**
     * @var string
     */
    protected $handlerInterface = 'Mage\Customer\Test\Handler\Customer\CustomerInterface';


    /**
     * @var array
     */
    protected $confirmation = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $created_at = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $created_in = [
        'is_required' => '0',
        'group' => 'account_information',
    ];

    /**
     * @var array
     */
    protected $default_billing = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $default_shipping = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $disable_auto_group_change = [
        'is_required' => '0',
        'group' => 'account_information',
    ];

    /**
     * @var array
     */
    protected $dob = [
        'is_required' => '0',
        'group' => 'account_information',
    ];

    /**
     * @var array
     */
    protected $email = [
        'is_required' => '1',
        'group' => 'account_information',
    ];

    /**
     * @var array
     */
    protected $firstname = [
        'is_required' => '1',
        'group' => 'account_information',
    ];

    /**
     * @var array
     */
    protected $gender = [
        'is_required' => '0',
        'group' => 'account_information',
    ];

    /**
     * @var array
     */
    protected $group_id = [
        'is_required' => '1',
        'group' => 'account_information',
        'source' => 'Mage\Customer\Test\Fixture\Customer\GroupId',
    ];

    /**
     * @var array
     */
    protected $lastname = [
        'is_required' => '1',
        'group' => 'account_information',
    ];

    /**
     * @var array
     */
    protected $middlename = [
        'is_required' => '0',
        'group' => 'account_information',
    ];

    /**
     * @var array
     */
    protected $password_hash = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $prefix = [
        'is_required' => '0',
        'group' => 'account_information',
    ];

    /**
     * @var array
     */
    protected $reward_update_notification = [
        'is_required' => '1',
    ];

    /**
     * @var array
     */
    protected $reward_warning_notification = [
        'is_required' => '1',
    ];

    /**
     * @var array
     */
    protected $rp_token = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $rp_token_created_at = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $store_id = [
        'is_required' => '1',
        'group' => 'account_information',
    ];

    /**
     * @var array
     */
    protected $suffix = [
        'is_required' => '0',
        'group' => 'account_information',
    ];

    /**
     * @var array
     */
    protected $taxvat = [
        'is_required' => '0',
        'group' => 'account_information',
    ];

    /**
     * @var array
     */
    protected $website_id = [
        'is_required' => '1',
        'group' => 'account_information',
    ];

    /**
     * @var array
     */
    protected $address = [
        'group' => 'addresses',
        'source' => 'Mage\Customer\Test\Fixture\Customer\Address',
        'repository' => 'Mage\Customer\Test\Repository\Address',
    ];

    /**
     * @var array
     */
    protected $is_subscribed = [
    ];

    /**
     * @var array
     */
    protected $password = [
    ];

    /**
     * @var array
     */
    protected $password_confirmation = [
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
    protected $current_password = [
    ];

    /**
     * @var array
     */
    protected $amount_delta = [
        'group' => 'store_credit',
    ];

    /**
     * @return mixed
     */
    public function getConfirmation()
    {
        return $this->getData('confirmation');
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
    public function getCreatedIn()
    {
        return $this->getData('created_in');
    }

    /**
     * @return mixed
     */
    public function getDefaultBilling()
    {
        return $this->getData('default_billing');
    }

    /**
     * @return mixed
     */
    public function getDefaultShipping()
    {
        return $this->getData('default_shipping');
    }

    /**
     * @return mixed
     */
    public function getDisableAutoGroupChange()
    {
        return $this->getData('disable_auto_group_change');
    }

    /**
     * @return mixed
     */
    public function getDob()
    {
        return $this->getData('dob');
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->getData('email');
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->getData('firstname');
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->getData('gender');
    }

    /**
     * @return mixed
     */
    public function getGroupId()
    {
        return $this->getData('group_id');
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->getData('lastname');
    }

    /**
     * @return mixed
     */
    public function getMiddlename()
    {
        return $this->getData('middlename');
    }

    /**
     * @return mixed
     */
    public function getPasswordHash()
    {
        return $this->getData('password_hash');
    }

    /**
     * @return mixed
     */
    public function getPrefix()
    {
        return $this->getData('prefix');
    }

    /**
     * @return mixed
     */
    public function getRewardUpdateNotification()
    {
        return $this->getData('reward_update_notification');
    }

    /**
     * @return mixed
     */
    public function getRewardWarningNotification()
    {
        return $this->getData('reward_warning_notification');
    }

    /**
     * @return mixed
     */
    public function getRpToken()
    {
        return $this->getData('rp_token');
    }

    /**
     * @return mixed
     */
    public function getRpTokenCreatedAt()
    {
        return $this->getData('rp_token_created_at');
    }

    /**
     * @return mixed
     */
    public function getStoreId()
    {
        return $this->getData('store_id');
    }

    /**
     * @return mixed
     */
    public function getSuffix()
    {
        return $this->getData('suffix');
    }

    /**
     * @return mixed
     */
    public function getTaxvat()
    {
        return $this->getData('taxvat');
    }

    /**
     * @return mixed
     */
    public function getWebsiteId()
    {
        return $this->getData('website_id');
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->getData('address');
    }

    /**
     * @return mixed
     */
    public function getIsSubscribed()
    {
        return $this->getData('is_subscribed');
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->getData('password');
    }

    /**
     * @return mixed
     */
    public function getPasswordConfirmation()
    {
        return $this->getData('password_confirmation');
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
    public function getCurrentPassword()
    {
        return $this->getData('current_password');
    }

    /**
     * @return mixed
     */
    public function getAmountDelta()
    {
        return $this->getData('amount_delta');
    }
}
