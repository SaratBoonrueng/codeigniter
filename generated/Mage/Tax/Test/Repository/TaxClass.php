<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Tax\Test\Repository;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class TaxClass
 */
class TaxClass extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['Taxable Goods'] = [
            'class_id' => '2',
            'class_name' => 'Taxable Goods',
            'class_type' => 'PRODUCT',
            'id' => '2',
            'mtf_dataset_name' => 'Taxable Goods',
        ];

        $this->_data['None'] = [
            'class_name' => 'None',
            'class_type' => 'PRODUCT',
            'id' => '0',
        ];

        $this->_data['Retail Customer'] = [
            'class_id' => '3',
            'class_name' => 'Retail Customer',
            'class_type' => 'CUSTOMER',
            'id' => '3',
            'mtf_dataset_name' => 'Retail Customer',
        ];

        $this->_data['customer_tax_class'] = [
            'class_name' => 'Customer Tax Class %isolation%',
            'class_type' => 'CUSTOMER',
        ];

        $this->_data['product_tax_class'] = [
            'class_name' => 'Product Tax Class %isolation%',
            'class_type' => 'PRODUCT',
        ];
    }
}
