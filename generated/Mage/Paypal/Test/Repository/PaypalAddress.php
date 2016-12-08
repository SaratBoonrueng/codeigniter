<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Paypal\Test\Repository;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class PaypalAddress
 */
class PaypalAddress extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['customer_US'] = [
            'firstname' => 'Dmytro',
            'lastname' => 'Aponasenko',
            'street' => '1 Main St',
            'city' => 'Culver City',
            'region_id' => 'California',
            'postcode' => '90230',
            'country_id' => 'United States',
            'telephone' => 'T: 408-618-6006',
        ];
    }
}
