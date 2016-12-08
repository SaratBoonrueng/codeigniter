<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Adminhtml\Test\Fixture;

/**
 * Class StoreGroup
 */
class StoreGroup extends \Magento\Mtf\Fixture\InjectableFixture
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\Adminhtml\Test\Repository\StoreGroup';

    /**
     * @var string
     */
    protected $handlerInterface = 'Mage\Adminhtml\Test\Handler\StoreGroup\StoreGroupInterface';


    /**
     * @var array
     */
    protected $group_id = [
        'is_required' => '1',
    ];

    /**
     * @var array
     */
    protected $website_id = [
        'is_required' => '0',
        'source' => 'Mage\Adminhtml\Test\Fixture\StoreGroup\WebsiteId',
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
    protected $root_category_id = [
        'is_required' => '0',
        'source' => 'Mage\Adminhtml\Test\Fixture\StoreGroup\CategoryId',
    ];

    /**
     * @var array
     */
    protected $default_store_id = [
        'is_required' => '0',
    ];

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
    public function getWebsiteId()
    {
        return $this->getData('website_id');
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
    public function getRootCategoryId()
    {
        return $this->getData('root_category_id');
    }

    /**
     * @return mixed
     */
    public function getDefaultStoreId()
    {
        return $this->getData('default_store_id');
    }
}
