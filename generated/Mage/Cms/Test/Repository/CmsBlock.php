<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Cms\Test\Repository;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class CmsBlock
 */
class CmsBlock extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['default'] = [
            'title' => 'cms-block-title-%isolation%',
            'identifier' => 'cms-block-identifier-%isolation%',
            'content' => [
                'content' => 'cms block text content',
            ],
            'is_active' => 'Enabled',
        ];
    }
}
