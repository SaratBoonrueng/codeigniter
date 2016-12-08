<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Install\Test\Fixture;

/**
 * Class InstallLocale
 */
class InstallLocale extends \Magento\Mtf\Fixture\InjectableFixture
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\Install\Test\Repository\InstallLocale';

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
}
