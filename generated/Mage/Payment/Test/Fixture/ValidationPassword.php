<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Payment\Test\Fixture;

/**
 * Class ValidationPassword
 */
class ValidationPassword extends \Magento\Mtf\Fixture\InjectableFixture
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\Payment\Test\Repository\ValidationPassword';


    /**
     * @var array
     */
    protected $validationPassword = [
    ];

    /**
     * @return mixed
     */
    public function getValidationPassword()
    {
        return $this->getData('validationPassword');
    }
}
