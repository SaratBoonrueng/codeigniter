<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Tax\Test\Fixture;

/**
 * Class TaxClass
 */
class TaxClass extends \Magento\Mtf\Fixture\InjectableFixture
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\Tax\Test\Repository\TaxClass';

    /**
     * @var string
     */
    protected $handlerInterface = 'Mage\Tax\Test\Handler\TaxClass\TaxClassInterface';


    /**
     * @var array
     */
    protected $class_id = [
        'is_required' => '1',
    ];

    /**
     * @var array
     */
    protected $class_name = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $class_type = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $id = [
    ];

    /**
     * @return mixed
     */
    public function getClassId()
    {
        return $this->getData('class_id');
    }

    /**
     * @return mixed
     */
    public function getClassName()
    {
        return $this->getData('class_name');
    }

    /**
     * @return mixed
     */
    public function getClassType()
    {
        return $this->getData('class_type');
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->getData('id');
    }
}
