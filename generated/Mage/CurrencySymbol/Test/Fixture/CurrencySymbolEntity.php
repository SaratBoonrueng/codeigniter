<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\CurrencySymbol\Test\Fixture;

/**
 * Class CurrencySymbolEntity
 */
class CurrencySymbolEntity extends \Magento\Mtf\Fixture\InjectableFixture
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\CurrencySymbol\Test\Repository\CurrencySymbolEntity';

    /**
     * @var string
     */
    protected $handlerInterface = 'Mage\CurrencySymbol\Test\Handler\CurrencySymbolEntity\CurrencySymbolEntityInterface';


    /**
     * @var array
     */
    protected $config_id = [
        'is_required' => '1',
    ];

    /**
     * @var array
     */
    protected $scope = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $scope_id = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $path = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $value = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $inherit_custom_currency_symbol = [
    ];

    /**
     * @var array
     */
    protected $custom_currency_symbol = [
    ];

    /**
     * @var array
     */
    protected $code = [
    ];

    /**
     * @return mixed
     */
    public function getConfigId()
    {
        return $this->getData('config_id');
    }

    /**
     * @return mixed
     */
    public function getScope()
    {
        return $this->getData('scope');
    }

    /**
     * @return mixed
     */
    public function getScopeId()
    {
        return $this->getData('scope_id');
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->getData('path');
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->getData('value');
    }

    /**
     * @return mixed
     */
    public function getInheritCustomCurrencySymbol()
    {
        return $this->getData('inherit_custom_currency_symbol');
    }

    /**
     * @return mixed
     */
    public function getCustomCurrencySymbol()
    {
        return $this->getData('custom_currency_symbol');
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->getData('code');
    }
}
