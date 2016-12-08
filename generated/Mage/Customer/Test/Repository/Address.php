<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Customer\Test\Repository;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class Address
 */
class Address extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['customer_US'] = [
            'firstname' => 'John',
            'lastname' => 'Doe',
            'email' => 'JohnDoe_%isolation%@example.com',
            'company' => 'Magento %isolation%',
            'city' => 'Culver City',
            'street' => '6161 West Centinela Avenue',
            'postcode' => '90230',
            'country_id' => 'United States',
            'region_id' => 'California',
            'telephone' => '555-55-555-55',
            'fax' => '555-55-555-55',
        ];

        $this->_data['customer_US_login'] = [
            'firstname' => 'John',
            'lastname' => 'Doe',
            'company' => 'Magento %isolation%',
            'city' => 'Culver City',
            'street' => '6161 West Centinela Avenue',
            'postcode' => '90230',
            'country_id' => 'United States',
            'region_id' => 'California',
            'telephone' => '555-55-555-55',
            'fax' => '555-55-555-55',
        ];

        $this->_data['customer_US_login_miltiship'] = [
            'firstname' => 'John',
            'lastname' => 'Doe',
            'company' => 'Magento %isolation%',
            'street' => '3222 Cliffside Drive',
            'city' => 'Binghamton',
            'region_id' => 'New York',
            'postcode' => '13901',
            'country_id' => 'United States',
            'telephone' => '607-481-7802',
        ];

        $this->_data['US_address_NY'] = [
            'firstname' => 'John',
            'lastname' => 'Doe',
            'email' => 'John.Doe%isolation%@example.com',
            'company' => 'Magento %isolation%',
            'street' => '3222 Cliffside Drive',
            'city' => 'Binghamton',
            'region_id' => 'New York',
            'postcode' => '13901',
            'country_id' => 'United States',
            'telephone' => '607-481-7802',
            'default_billing' => 'Yes',
            'default_shipping' => 'Yes',
        ];

        $this->_data['Estimate_US_address_NY'] = [
            'region_id' => 'New York',
            'postcode' => '13901',
            'country_id' => 'United States',
        ];

        $this->_data['US_address_TX'] = [
            'firstname' => 'John',
            'lastname' => 'Doe',
            'email' => 'John.Doe%isolation%@example.com',
            'company' => 'Magento %isolation%',
            'street' => '7700 W. Parmer Lane Bldg. D',
            'city' => 'Austin',
            'region_id' => 'Texas',
            'postcode' => '78729',
            'country_id' => 'United States',
            'telephone' => '512-691-4400',
            'default_billing' => 'Yes',
            'default_shipping' => 'Yes',
        ];

        $this->_data['customer_DE'] = [
            'firstname' => 'Jane',
            'lastname' => 'Jansen',
            'email' => 'JaneJansen%isolation%@example.com',
            'company' => 'Magento %isolation%',
            'city' => 'Berlin',
            'street' => 'Augsburger Strabe 41',
            'postcode' => '10789',
            'country_id' => 'Germany',
            'region_id' => 'Berlin',
            'telephone' => '333-33-333-33',
        ];

        $this->_data['customer_UK'] = [
            'firstname' => 'Jane',
            'lastname' => 'Doe',
            'company' => 'Magento %isolation%',
            'city' => 'London',
            'street' => '172, Westminster Bridge Rd',
            'postcode' => 'SE1 7RW',
            'country_id' => 'United Kingdom',
            'telephone' => '444-44-444-44',
        ];

        $this->_data['customer_UK_with_vat'] = [
            'firstname' => 'Jane',
            'lastname' => 'Doe',
            'company' => 'Magento %isolation%',
            'city' => 'London',
            'street' => '172, Westminster Bridge Rd',
            'postcode' => 'SE1 7RW',
            'country_id' => 'United Kingdom',
            'telephone' => '444-44-444-44',
            'vat_id' => '584451913',
            'default_billing' => 'Yes',
        ];

        $this->_data['US_address_without_email'] = [
            'firstname' => 'John',
            'lastname' => 'Doe',
            'company' => 'Magento %isolation%',
            'street' => '6161 West Centinela Avenue',
            'city' => 'Culver City',
            'region_id' => 'California',
            'postcode' => '90230',
            'country_id' => 'United States',
            'telephone' => '555-55-555-55',
        ];

        $this->_data['US_address'] = [
            'firstname' => 'John',
            'lastname' => 'Doe',
            'email' => 'John.Doe%isolation%@example.com',
            'company' => 'Magento %isolation%',
            'street' => '6161 West Centinela Avenue',
            'city' => 'Culver City',
            'region_id' => 'California',
            'postcode' => '90230',
            'country_id' => 'United States',
            'telephone' => '555-55-555-55',
            'default_billing' => 'Yes',
            'default_shipping' => 'Yes',
        ];

        $this->_data['US_address_for_checkout'] = [
            'firstname' => 'John',
            'lastname' => 'Doe',
            'email' => 'John.Doe%isolation%@example.com',
            'company' => 'Magento %isolation%',
            'street' => '6161 West Centinela Avenue',
            'city' => 'Culver City',
            'region_id' => 'California',
            'postcode' => '90230',
            'country_id' => 'United States',
            'telephone' => '555-55-555-55',
        ];

        $this->_data['customer_US_for_checkout'] = [
            'firstname' => 'John',
            'lastname' => 'Doe',
            'company' => 'Magento %isolation%',
            'city' => 'Culver City',
            'street' => '6161 West Centinela Avenue',
            'postcode' => '90230',
            'country_id' => 'United States',
            'region_id' => 'California',
            'telephone' => '555-55-555-55',
            'fax' => '555-55-555-55',
        ];
    }
}
