<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Catalog\Test\Repository\CatalogProductSimple;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class Fpt
 */
class Fpt extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['one_fpt_for_all_states'] = [
            '0' => [
                'price' => '10',
                'website' => 'All Websites [USD]',
                'country_name' => 'United States',
                'state_name' => '*',
            ],
        ];
    }
}
