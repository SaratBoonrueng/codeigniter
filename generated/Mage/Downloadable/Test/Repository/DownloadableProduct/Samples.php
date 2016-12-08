<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Downloadable\Test\Repository\DownloadableProduct;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class Samples
 */
class Samples extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['default'] = [
            'title' => 'Samples%isolation%',
            'downloadable' => [
                'sample' => [
                    '0' => [
                        'title' => 'sample1%isolation%',
                        'sample_type_url' => 'Yes',
                        'sample_url' => 'http://example.com',
                        'sort_order' => '0',
                    ],
                    '1' => [
                        'title' => 'sample2%isolation%',
                        'sample_type_url' => 'Yes',
                        'sample_url' => 'http://example2.com',
                        'sort_order' => '1',
                    ],
                ],
            ],
        ];
    }
}
