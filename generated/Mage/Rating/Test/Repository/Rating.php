<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Rating\Test\Repository;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class Rating
 */
class Rating extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['visibleOnDefaultWebsite'] = [
            'rating_code' => 'rating_%isolation%',
            'stores' => [
                'datasets' => 'default',
            ],
            'is_active' => 'Yes',
        ];
    }
}
