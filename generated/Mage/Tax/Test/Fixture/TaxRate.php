<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Tax\Test\Fixture;

/**
 * Class TaxRate
 */
class TaxRate extends \Magento\Mtf\Fixture\InjectableFixture
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\Tax\Test\Repository\TaxRate';

    /**
     * @var string
     */
    protected $handlerInterface = 'Mage\Tax\Test\Handler\TaxRate\TaxRateInterface';


    /**
     * @var array
     */
    protected $tax_calculation_rate_id = [
        'is_required' => '1',
    ];

    /**
     * @var array
     */
    protected $tax_country_id = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $tax_region_id = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $tax_postcode = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $code = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $rate = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $zip_is_range = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $zip_from = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $zip_to = [
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
    public function getTaxCalculationRateId()
    {
        return $this->getData('tax_calculation_rate_id');
    }

    /**
     * @return mixed
     */
    public function getTaxCountryId()
    {
        return $this->getData('tax_country_id');
    }

    /**
     * @return mixed
     */
    public function getTaxRegionId()
    {
        return $this->getData('tax_region_id');
    }

    /**
     * @return mixed
     */
    public function getTaxPostcode()
    {
        return $this->getData('tax_postcode');
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->getData('code');
    }

    /**
     * @return mixed
     */
    public function getRate()
    {
        return $this->getData('rate');
    }

    /**
     * @return mixed
     */
    public function getZipIsRange()
    {
        return $this->getData('zip_is_range');
    }

    /**
     * @return mixed
     */
    public function getZipFrom()
    {
        return $this->getData('zip_from');
    }

    /**
     * @return mixed
     */
    public function getZipTo()
    {
        return $this->getData('zip_to');
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->getData('id');
    }
}
