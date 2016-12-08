<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Widget\Test\Repository;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class Widget
 */
class Widget extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['default'] = [
            'title' => 'Test Frontend App',
            'store_ids' => [
                'dataset' => 'default',
            ],
            'widget_instance' => [
                '0' => [
                    'page_group' => 'all_pages',
                    'all_pages' => [
                        'layout_handle' => 'default',
                        'for' => 'all',
                        'block' => 'content',
                        'template' => 'widget/block.phtml',
                    ],
                ],
            ],
            'parameters' => [
                'display_mode' => 'catalogrule',
            ],
            'theme_id' => '2',
        ];

        $this->_data['cms_page_link'] = [
            'code' => 'CMS Page Link',
            'title' => 'Cms Page Link %isolation%',
            'store_ids' => [
                'dataset' => 'default',
            ],
            'widget_instance' => [
                '0' => [
                    'page_group' => 'All Pages',
                    'all_pages' => [
                        'block' => 'Main Content Area',
                        'template' => 'CMS Page Link Block Template',
                    ],
                ],
            ],
            'parameters' => [
                'display_mode' => 'fixed',
                'anchor_text' => 'text',
                'title' => 'anchor title',
            ],
            'page_id' => [
                'dataset' => 'default',
            ],
            'theme_id' => 'Magento Blank',
            'widgetOptions' => [
                '0' => [
                    'type_id' => 'cmsPageLink',
                ],
            ],
        ];
    }
}
