<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Downloadable\Test\Repository\DownloadableProduct;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class GroupPriceOptions
 */
class GroupPriceOptions extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['for_not_logged_users'] = [
            '0' => [
                'price' => '90',
                'customer_group' => 'NOT LOGGED IN',
            ],
        ];

        $this->_data['downloadable_with_tax'] = [
            '0' => [
                'price' => '20',
                'customer_group' => 'General',
            ],
        ];
    }
}
