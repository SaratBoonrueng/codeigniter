<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Payment\Test\Fixture;

/**
 * Class Cc
 */
class Cc extends \Magento\Mtf\Fixture\InjectableFixture
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\Payment\Test\Repository\Cc';


    /**
     * @var array
     */
    protected $cc_type = [
    ];

    /**
     * @var array
     */
    protected $cc_number = [
    ];

    /**
     * @var array
     */
    protected $cc_exp_month = [
    ];

    /**
     * @var array
     */
    protected $cc_exp_year = [
    ];

    /**
     * @var array
     */
    protected $cc_cid = [
    ];

    /**
     * @var array
     */
    protected $validationPassword = [
    ];

    /**
     * @return mixed
     */
    public function getCcType()
    {
        return $this->getData('cc_type');
    }

    /**
     * @return mixed
     */
    public function getCcNumber()
    {
        return $this->getData('cc_number');
    }

    /**
     * @return mixed
     */
    public function getCcExpMonth()
    {
        return $this->getData('cc_exp_month');
    }

    /**
     * @return mixed
     */
    public function getCcExpYear()
    {
        return $this->getData('cc_exp_year');
    }

    /**
     * @return mixed
     */
    public function getCcCid()
    {
        return $this->getData('cc_cid');
    }

    /**
     * @return mixed
     */
    public function getValidationPassword()
    {
        return $this->getData('validationPassword');
    }
}
