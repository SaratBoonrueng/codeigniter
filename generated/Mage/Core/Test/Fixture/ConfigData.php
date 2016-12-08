<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Core\Test\Fixture;

/**
 * Class ConfigData
 */
class ConfigData extends \Magento\Mtf\Fixture\InjectableFixture
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\Core\Test\Repository\ConfigData';

    /**
     * @var string
     */
    protected $handlerInterface = 'Mage\Core\Test\Handler\ConfigData\ConfigDataInterface';


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
    protected $section = [
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
    public function getSection()
    {
        return $this->getData('section');
    }
}
