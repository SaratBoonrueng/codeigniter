<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Downloadable\Test\Repository\DownloadableProduct;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class CheckoutData
 */
class CheckoutData extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['with_two_separately_links'] = [
            'options' => [
                'links' => [
                    '0' => [
                        'label' => 'link_0',
                        'value' => 'Yes',
                    ],
                ],
            ],
            'cartItem' => [
                'price' => '22.43',
                'subtotal' => '22.43',
            ],
            'qty' => '1',
        ];

        $this->_data['with_two_bought_links'] = [
            'options' => [
                'links' => [
                    '0' => [
                        'label' => 'link_0',
                        'value' => 'Yes',
                    ],
                    '1' => [
                        'label' => 'link_1',
                        'value' => 'Yes',
                    ],
                ],
                'cartItem' => [
                    'price' => '23',
                    'subtotal' => '23',
                ],
            ],
            'qty' => '1',
        ];

        $this->_data['one_custom_option_and_downloadable_link'] = [
            'options' => [
                'custom_options' => [
                    '0' => [
                        'title' => 'attribute_key_0',
                        'value' => 'option_key_0',
                    ],
                ],
                'links' => [
                    '0' => [
                        'label' => 'link_0',
                        'value' => 'Yes',
                    ],
                ],
            ],
            'qty' => '1',
        ];
    }
}
