<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Cms\Test\Repository;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class CmsPage
 */
class CmsPage extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['default'] = [
            'title' => 'test-%isolation%',
            'identifier' => 'test-%isolation%',
            'store_id' => [
                'dataset' => [
                    '0' => 'default',
                ],
            ],
            'content' => [
                'content' => 'text content',
            ],
            'content_heading' => 'Test-%isolation%',
            'page_layout' => '1 column',
        ];

        $this->_data['3_column_template'] = [
            'title' => 'page-compare-%isolation%',
            'identifier' => 'page-compare-%isolation%',
            'store_id' => [
                'dataset' => [
                    '0' => 'default',
                ],
            ],
            'content' => [
                'content' => 'Test Content',
            ],
            'page_layout' => '3 columns',
        ];
    }
}
