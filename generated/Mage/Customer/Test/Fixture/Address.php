<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Customer\Test\Fixture;

/**
 * Class Address
 */
class Address extends \Magento\Mtf\Fixture\InjectableFixture
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\Customer\Test\Repository\Address';

    /**
     * @var string
     */
    protected $handlerInterface = 'Mage\Customer\Test\Handler\Address\AddressInterface';


    /**
     * @var array
     */
    protected $city = [
        'is_required' => '1',
    ];

    /**
     * @var array
     */
    protected $company = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $country_id = [
        'is_required' => '1',
    ];

    /**
     * @var array
     */
    protected $fax = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $firstname = [
        'is_required' => '1',
    ];

    /**
     * @var array
     */
    protected $lastname = [
        'is_required' => '1',
    ];

    /**
     * @var array
     */
    protected $middlename = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $postcode = [
        'is_required' => '1',
    ];

    /**
     * @var array
     */
    protected $prefix = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $region = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $region_id = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $street = [
        'is_required' => '1',
    ];

    /**
     * @var array
     */
    protected $suffix = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $telephone = [
        'is_required' => '1',
    ];

    /**
     * @var array
     */
    protected $vat_id = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $vat_is_valid = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $vat_request_date = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $vat_request_id = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $vat_request_success = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $email = [
    ];

    /**
     * @var array
     */
    protected $default_billing = [
        'is_required' => '1',
    ];

    /**
     * @var array
     */
    protected $default_shipping = [
        'is_required' => '1',
    ];

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->getData('city');
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->getData('company');
    }

    /**
     * @return mixed
     */
    public function getCountryId()
    {
        return $this->getData('country_id');
    }

    /**
     * @return mixed
     */
    public function getFax()
    {
        return $this->getData('fax');
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->getData('firstname');
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->getData('lastname');
    }

    /**
     * @return mixed
     */
    public function getMiddlename()
    {
        return $this->getData('middlename');
    }

    /**
     * @return mixed
     */
    public function getPostcode()
    {
        return $this->getData('postcode');
    }

    /**
     * @return mixed
     */
    public function getPrefix()
    {
        return $this->getData('prefix');
    }

    /**
     * @return mixed
     */
    public function getRegion()
    {
        return $this->getData('region');
    }

    /**
     * @return mixed
     */
    public function getRegionId()
    {
        return $this->getData('region_id');
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->getData('street');
    }

    /**
     * @return mixed
     */
    public function getSuffix()
    {
        return $this->getData('suffix');
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->getData('telephone');
    }

    /**
     * @return mixed
     */
    public function getVatId()
    {
        return $this->getData('vat_id');
    }

    /**
     * @return mixed
     */
    public function getVatIsValid()
    {
        return $this->getData('vat_is_valid');
    }

    /**
     * @return mixed
     */
    public function getVatRequestDate()
    {
        return $this->getData('vat_request_date');
    }

    /**
     * @return mixed
     */
    public function getVatRequestId()
    {
        return $this->getData('vat_request_id');
    }

    /**
     * @return mixed
     */
    public function getVatRequestSuccess()
    {
        return $this->getData('vat_request_success');
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->getData('email');
    }

    /**
     * @return mixed
     */
    public function getDefaultBilling()
    {
        return $this->getData('default_billing');
    }

    /**
     * @return mixed
     */
    public function getDefaultShipping()
    {
        return $this->getData('default_shipping');
    }
}
