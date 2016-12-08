<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Paypal\Test\Fixture;

/**
 * Class PaypalCustomer
 */
class PaypalCustomer extends \Mage\Customer\Test\Fixture\Customer
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\Paypal\Test\Repository\PaypalCustomer';


    /**
     * @var array
     */
    protected $address = [
        'source' => 'Mage\Paypal\Test\Fixture\PaypalCustomer\Address',
        'group' => 'addresses',
    ];

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->getData('address');
    }
}
