<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Catalog\Test\Repository\CatalogProductAttribute;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class Options
 */
class Options extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['default'] = [
            '0' => [
                'is_default' => 'Yes',
                'admin' => 'blue',
                'view' => 'blue',
            ],
            '1' => [
                'admin' => 'black',
                'view' => 'black',
            ],
        ];

        $this->_data['with_three_options'] = [
            '0' => [
                'is_default' => 'Yes',
                'admin' => 'black',
                'view' => 'option_0_%isolation%',
            ],
            '1' => [
                'is_default' => 'No',
                'admin' => 'white',
                'view' => 'option_1_%isolation%',
            ],
            '2' => [
                'is_default' => 'No',
                'admin' => 'green',
                'view' => 'option_2_%isolation%',
            ],
        ];
    }
}
