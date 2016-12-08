<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Tax\Test\Repository;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class TaxRule
 */
class TaxRule extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['default'] = [
            'code' => 'DefaultTaxRule%isolation%',
            'tax_rate' => [
                'dataset' => [
                    '0' => 'US-CA-*-Rate 1',
                    '1' => 'US-NY-*-Rate 1',
                ],
            ],
        ];

        $this->_data['for_all_states'] = [
            'code' => 'TaxIdentifier%isolation%',
            'tax_rate' => [
                'dataset' => [
                    '0' => 'for_all_states',
                ],
            ],
            'priority' => '0',
        ];

        $this->_data['cross_border_tax_rule'] = [
            'code' => 'TaxIdentifier%isolation%',
            'tax_rate' => [
                'dataset' => [
                    '0' => 'tx_rate_10',
                    '1' => 'ny_rate_20',
                    '2' => 'ca_rate_30',
                ],
            ],
            'priority' => '0',
            'position' => '0',
        ];

        $this->_data['customer_equals_store_rate'] = [
            'code' => 'TaxIdentifier%isolation%',
            'tax_rate' => [
                'dataset' => [
                    '0' => 'us_ca_rate_8_25_no_zip',
                    '1' => 'us_ny_rate_8_25',
                ],
            ],
            'priority' => '0',
            'position' => '0',
        ];

        $this->_data['customer_greater_store_rate'] = [
            'code' => 'TaxIdentifier%isolation%',
            'tax_rate' => [
                'dataset' => [
                    '0' => 'us_ca_rate_8_25_no_zip',
                    '1' => 'us_ny_rate_8_375',
                ],
            ],
            'priority' => '0',
            'position' => '0',
        ];

        $this->_data['customer_less_store_rate'] = [
            'code' => 'TaxIdentifier%isolation%',
            'tax_rate' => [
                'dataset' => [
                    '0' => 'us_ca_rate_8_375',
                    '1' => 'us_ny_rate_8_25',
                ],
            ],
            'priority' => '0',
            'position' => '0',
        ];

        $this->_data['us_tax_rule'] = [
            'code' => 'TaxIdentifier%isolation%',
            'tax_rate' => [
                'dataset' => [
                    '0' => 'us_ca_rate_8_25',
                    '1' => 'us_ny_rate_8_375',
                ],
            ],
            'priority' => '0',
            'position' => '0',
        ];

        $this->_data['tax_rule_default'] = [
            'code' => 'TaxIdentifier%isolation%',
            'tax_rate' => [
                'dataset' => [
                    '0' => 'US-CA-Rate_1',
                ],
            ],
            'tax_customer_class' => [
                'dataset' => [
                    '0' => 'Retail Customer',
                ],
            ],
            'tax_product_class' => [
                'dataset' => [
                    '0' => 'Taxable Goods',
                ],
            ],
            'priority' => '1',
            'position' => '1',
        ];

        $this->_data['uk_tax_rule'] = [
            'code' => 'TaxIdentifier%isolation%',
            'tax_rate' => [
                'dataset' => [
                    '0' => 'uk-full-tax',
                ],
            ],
            'priority' => '0',
            'position' => '0',
        ];
    }
}
