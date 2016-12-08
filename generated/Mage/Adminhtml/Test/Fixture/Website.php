<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Adminhtml\Test\Fixture;

/**
 * Class Website
 */
class Website extends \Magento\Mtf\Fixture\InjectableFixture
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\Adminhtml\Test\Repository\Website';

    /**
     * @var string
     */
    protected $handlerInterface = 'Mage\Adminhtml\Test\Handler\Website\WebsiteInterface';


    /**
     * @var array
     */
    protected $website_id = [
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
    protected $default_group_id = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $is_default = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $is_staging = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $master_login = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $master_password = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $visibility = [
        'is_required' => '0',
    ];

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
    public function getCode()
    {
        return $this->getData('code');
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
    public function getDefaultGroupId()
    {
        return $this->getData('default_group_id');
    }

    /**
     * @return mixed
     */
    public function getIsDefault()
    {
        return $this->getData('is_default');
    }

    /**
     * @return mixed
     */
    public function getIsStaging()
    {
        return $this->getData('is_staging');
    }

    /**
     * @return mixed
     */
    public function getMasterLogin()
    {
        return $this->getData('master_login');
    }

    /**
     * @return mixed
     */
    public function getMasterPassword()
    {
        return $this->getData('master_password');
    }

    /**
     * @return mixed
     */
    public function getVisibility()
    {
        return $this->getData('visibility');
    }
}
