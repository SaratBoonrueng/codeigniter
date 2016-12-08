<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Install\Test\Fixture;

/**
 * Class Install
 */
class Install extends \Magento\Mtf\Fixture\InjectableFixture
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\Install\Test\Repository\Install';

    /**
     * @var string
     */
    protected $handlerInterface = 'Mage\Install\Test\Handler\Install\InstallInterface';


    /**
     * @var array
     */
    protected $locale = [
    ];

    /**
     * @var array
     */
    protected $timezone = [
    ];

    /**
     * @var array
     */
    protected $currency = [
    ];

    /**
     * @var array
     */
    protected $db_model = [
    ];

    /**
     * @var array
     */
    protected $db_host = [
    ];

    /**
     * @var array
     */
    protected $db_name = [
    ];

    /**
     * @var array
     */
    protected $db_user = [
    ];

    /**
     * @var array
     */
    protected $db_pass = [
    ];

    /**
     * @var array
     */
    protected $db_prefix = [
    ];

    /**
     * @var array
     */
    protected $unsecure_base_url = [
    ];

    /**
     * @var array
     */
    protected $admin_frontname = [
    ];

    /**
     * @var array
     */
    protected $enable_charts = [
    ];

    /**
     * @var array
     */
    protected $skip_base_url_validation = [
    ];

    /**
     * @var array
     */
    protected $use_rewrites = [
    ];

    /**
     * @var array
     */
    protected $use_secure = [
    ];

    /**
     * @var array
     */
    protected $session_save = [
    ];

    /**
     * @var array
     */
    protected $secure_base_url = [
    ];

    /**
     * @var array
     */
    protected $use_secure_admin = [
    ];

    /**
     * @var array
     */
    protected $skip_url_validation = [
    ];

    /**
     * @return mixed
     */
    public function getLocale()
    {
        return $this->getData('locale');
    }

    /**
     * @return mixed
     */
    public function getTimezone()
    {
        return $this->getData('timezone');
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->getData('currency');
    }

    /**
     * @return mixed
     */
    public function getDbModel()
    {
        return $this->getData('db_model');
    }

    /**
     * @return mixed
     */
    public function getDbHost()
    {
        return $this->getData('db_host');
    }

    /**
     * @return mixed
     */
    public function getDbName()
    {
        return $this->getData('db_name');
    }

    /**
     * @return mixed
     */
    public function getDbUser()
    {
        return $this->getData('db_user');
    }

    /**
     * @return mixed
     */
    public function getDbPass()
    {
        return $this->getData('db_pass');
    }

    /**
     * @return mixed
     */
    public function getDbPrefix()
    {
        return $this->getData('db_prefix');
    }

    /**
     * @return mixed
     */
    public function getUnsecureBaseUrl()
    {
        return $this->getData('unsecure_base_url');
    }

    /**
     * @return mixed
     */
    public function getAdminFrontname()
    {
        return $this->getData('admin_frontname');
    }

    /**
     * @return mixed
     */
    public function getEnableCharts()
    {
        return $this->getData('enable_charts');
    }

    /**
     * @return mixed
     */
    public function getSkipBaseUrlValidation()
    {
        return $this->getData('skip_base_url_validation');
    }

    /**
     * @return mixed
     */
    public function getUseRewrites()
    {
        return $this->getData('use_rewrites');
    }

    /**
     * @return mixed
     */
    public function getUseSecure()
    {
        return $this->getData('use_secure');
    }

    /**
     * @return mixed
     */
    public function getSessionSave()
    {
        return $this->getData('session_save');
    }

    /**
     * @return mixed
     */
    public function getSecureBaseUrl()
    {
        return $this->getData('secure_base_url');
    }

    /**
     * @return mixed
     */
    public function getUseSecureAdmin()
    {
        return $this->getData('use_secure_admin');
    }

    /**
     * @return mixed
     */
    public function getSkipUrlValidation()
    {
        return $this->getData('skip_url_validation');
    }
}
