<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Sitemap\Test\Repository;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class Sitemap
 */
class Sitemap extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['default'] = [
            'sitemap_filename' => 'sitemap.xml',
            'sitemap_path' => '/',
            'store_id' => [
                '0' => '0',
            ],
        ];
    }
}
