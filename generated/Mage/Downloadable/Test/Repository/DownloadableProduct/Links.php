<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Downloadable\Test\Repository\DownloadableProduct;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class Links
 */
class Links extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['default'] = [
            'title' => 'Links%isolation%',
            'links_purchased_separately' => 'Yes',
            'downloadable' => [
                'link' => [
                    '0' => [
                        'title' => 'link1%isolation%',
                        'price' => '2.43',
                        'number_of_downloads' => '2',
                        'sample' => [
                            'sample_type_url' => 'Yes',
                            'sample_url' => 'http://example.com',
                        ],
                        'file_type_url' => 'Yes',
                        'file_link_url' => 'http://example.com',
                        'is_shareable' => 'No',
                        'sort_order' => '1',
                    ],
                    '1' => [
                        'title' => 'link2%isolation%',
                        'price' => '3',
                        'number_of_downloads' => '3',
                        'sample' => [
                            'sample_type_url' => 'Yes',
                            'sample_url' => 'http://example.net',
                        ],
                        'file_type_url' => 'Yes',
                        'file_link_url' => 'http://example.net',
                        'is_shareable' => 'Yes',
                        'sort_order' => '0',
                    ],
                ],
            ],
        ];

        $this->_data['with_two_separately_links'] = [
            'title' => 'Links%isolation%',
            'links_purchased_separately' => 'Yes',
            'downloadable' => [
                'link' => [
                    '0' => [
                        'title' => 'link1%isolation%',
                        'price' => '2.43',
                        'number_of_downloads' => '2',
                        'is_shareable' => 'No',
                        'sample' => [
                            'sample_type_url' => 'Yes',
                            'sample_url' => 'http://example.com/sample',
                        ],
                        'file_type_url' => 'Yes',
                        'file_link_url' => 'http://example.com',
                        'sort_order' => '0',
                    ],
                    '1' => [
                        'title' => 'link2%isolation%',
                        'price' => '3',
                        'number_of_downloads' => '3',
                        'is_shareable' => 'Yes',
                        'sample' => [
                            'sample_type_url' => 'Yes',
                            'sample_url' => 'http://example.net/sample2',
                        ],
                        'file_type_url' => 'Yes',
                        'file_link_url' => 'http://example.net/',
                        'sort_order' => '1',
                    ],
                ],
            ],
        ];

        $this->_data['with_three_links'] = [
            'title' => 'Links%isolation%',
            'links_purchased_separately' => 'Yes',
            'downloadable' => [
                'link' => [
                    '0' => [
                        'title' => 'link1%isolation%',
                        'price' => '2.43',
                        'number_of_downloads' => '2',
                        'sample' => [
                            'sample_type_url' => 'Yes',
                            'sample_url' => 'http://example.com',
                        ],
                        'file_type_url' => 'Yes',
                        'file_link_url' => 'http://example.com',
                        'is_shareable' => 'No',
                        'sort_order' => '0',
                    ],
                    '1' => [
                        'title' => 'link2%isolation%',
                        'price' => '3',
                        'number_of_downloads' => '3',
                        'sample' => [
                            'sample_type_url' => 'Yes',
                            'sample_url' => 'http://example.net',
                        ],
                        'file_type_url' => 'Yes',
                        'file_link_url' => 'http://example.net',
                        'is_shareable' => 'Yes',
                        'sort_order' => '1',
                    ],
                    '2' => [
                        'title' => 'link3%isolation%',
                        'price' => '5.43',
                        'number_of_downloads' => '5',
                        'sample' => [
                            'sample_type_url' => 'Yes',
                            'sample_url' => 'http://example.net',
                        ],
                        'file_type_url' => 'Yes',
                        'file_link_url' => 'http://example.net',
                        'is_shareable' => 'Yes',
                        'sort_order' => '2',
                    ],
                ],
            ],
        ];
    }
}
