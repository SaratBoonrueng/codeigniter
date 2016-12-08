<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Paypal\Test\Repository;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class PaypalCustomer
 */
class PaypalCustomer extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['default'] = [
            'firstname' => 'Dmytro',
            'lastname' => 'Aponasenko',
            'email' => '%PAYPAL_EMAIL%',
            'password' => '%PAYPAL_PASSWORD%',
            'address' => [
                'presets' => 'customer_US',
            ],
        ];
    }
}
