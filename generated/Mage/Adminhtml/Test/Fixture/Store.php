<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Adminhtml\Test\Fixture;

/**
 * Class Store
 */
class Store extends \Magento\Mtf\Fixture\InjectableFixture
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\Adminhtml\Test\Repository\Store';

    /**
     * @var string
     */
    protected $handlerInterface = 'Mage\Adminhtml\Test\Handler\Store\StoreInterface';


    /**
     * @var array
     */
    protected $store_id = [
        'is_required' => '1',
    ];

    /**
     * @var array
     */
    protected $code = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $website_id = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $group_id = [
        'is_required' => '0',
        'source' => 'Mage\Adminhtml\Test\Fixture\Store\GroupId',
    ];

    /**
     * @var array
     */
    protected $name = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $sort_order = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $is_active = [
        'is_required' => '0',
    ];

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
    public function getCode()
    {
        return $this->getData('code');
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
    public function getGroupId()
    {
        return $this->getData('group_id');
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
    public function getSortOrder()
    {
        return $this->getData('sort_order');
    }

    /**
     * @return mixed
     */
    public function getIsActive()
    {
        return $this->getData('is_active');
    }
}
