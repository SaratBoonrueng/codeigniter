<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Paypal\Test\Fixture;

/**
 * Class PaypalAddress
 */
class PaypalAddress extends \Mage\Customer\Test\Fixture\Address
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\Paypal\Test\Repository\PaypalAddress';

}
