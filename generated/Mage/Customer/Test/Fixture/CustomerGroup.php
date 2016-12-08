<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Customer\Test\Fixture;

/**
 * Class CustomerGroup
 */
class CustomerGroup extends \Magento\Mtf\Fixture\InjectableFixture
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\Customer\Test\Repository\CustomerGroup';

    /**
     * @var string
     */
    protected $handlerInterface = 'Mage\Customer\Test\Handler\CustomerGroup\CustomerGroupInterface';


    /**
     * @var array
     */
    protected $customer_group_id = [
    ];

    /**
     * @var array
     */
    protected $customer_group_code = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $tax_class_id = [
        'is_required' => '1',
        'source' => 'Mage\Customer\Test\Fixture\CustomerGroup\TaxClassIds',
    ];

    /**
     * @return mixed
     */
    public function getCustomerGroupId()
    {
        return $this->getData('customer_group_id');
    }

    /**
     * @return mixed
     */
    public function getCustomerGroupCode()
    {
        return $this->getData('customer_group_code');
    }

    /**
     * @return mixed
     */
    public function getTaxClassId()
    {
        return $this->getData('tax_class_id');
    }
}
