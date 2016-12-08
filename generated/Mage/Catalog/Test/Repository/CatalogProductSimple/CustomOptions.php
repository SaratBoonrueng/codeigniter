<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Catalog\Test\Repository\CatalogProductSimple;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class CustomOptions
 */
class CustomOptions extends AbstractRepository
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
                'title' => 'custom option Drop-down %isolation%',
                'is_require' => 'Yes',
                'type' => 'Select/Drop-down',
                'options' => [
                    '0' => [
                        'title' => '10 bucks',
                        'price' => '10',
                        'price_type' => 'Percent',
                        'sku' => 'sku_drop_down_row_1',
                    ],
                    '1' => [
                        'title' => '20 bucks',
                        'price' => '20',
                        'price_type' => 'Percent',
                        'sku' => 'sku_drop_down_row_2',
                    ],
                ],
            ],
        ];

        $this->_data['drop_down_with_two_options'] = [
            '0' => [
                'title' => 'custom option Drop-down %isolation%',
                'is_require' => 'Yes',
                'type' => 'Select/Drop-down',
                'options' => [
                    '0' => [
                        'title' => '30 bucks',
                        'price' => '30',
                        'price_type' => 'Fixed',
                        'sku' => 'sku_drop_down_row_1',
                    ],
                    '1' => [
                        'title' => '40 bucks',
                        'price' => '40',
                        'price_type' => 'Percent',
                        'sku' => 'sku_drop_down_row_2',
                    ],
                ],
            ],
        ];

        $this->_data['drop_down_with_one_option_percent_price'] = [
            '0' => [
                'title' => 'custom option Drop-down %isolation%',
                'is_require' => 'Yes',
                'type' => 'Select/Drop-down',
                'options' => [
                    '0' => [
                        'title' => '40 bucks',
                        'price' => '40',
                        'price_type' => 'Percent',
                        'sku' => 'sku_drop_down_row_2',
                    ],
                ],
            ],
        ];

        $this->_data['all_types'] = [
            '0' => [
                'title' => 'custom option item %isolation%',
                'is_require' => 'Yes',
                'type' => 'Text/Field',
                'options' => [
                    'price' => '10',
                    'price_type' => 'Fixed',
                    'sku' => 'sku_item_option_%isolation%',
                    'max_characters' => '1024',
                ],
            ],
            '1' => [
                'title' => 'custom option Area %isolation%',
                'is_require' => 'Yes',
                'type' => 'Text/Area',
                'options' => [
                    'price' => '10',
                    'price_type' => 'Fixed',
                    'sku' => 'sku_area_row_%isolation%',
                    'max_characters' => '10',
                ],
            ],
            '2' => [
                'title' => 'custom option File %isolation%',
                'is_require' => 'No',
                'type' => 'File/File',
                'options' => [
                    'price' => '10',
                    'price_type' => 'Fixed',
                    'sku' => 'sku_file_row_%isolation%',
                    'file_extension' => 'jpg',
                    'image_size_x' => '100',
                    'image_size_y' => '100',
                ],
            ],
            '3' => [
                'title' => 'custom option Drop-down %isolation%',
                'is_require' => 'Yes',
                'type' => 'Select/Drop-down',
                'options' => [
                    '0' => [
                        'title' => '10 percent',
                        'price' => '10',
                        'price_type' => 'Percent',
                        'sku' => 'sku_drop_down_row_1_%isolation%',
                    ],
                    '1' => [
                        'title' => '20 percent',
                        'price' => '20',
                        'price_type' => 'Percent',
                        'sku' => 'sku_drop_down_row_2_%isolation%',
                    ],
                    '2' => [
                        'title' => '30 fixed',
                        'price' => '30',
                        'price_type' => 'Fixed',
                        'sku' => 'sku_drop_down_row_3_%isolation%',
                    ],
                ],
            ],
            '4' => [
                'title' => 'custom option Radio Buttons %isolation%',
                'is_require' => 'Yes',
                'type' => 'Select/Radio Buttons',
                'options' => [
                    '0' => [
                        'title' => '20 percent',
                        'price' => '20',
                        'price_type' => 'Fixed',
                        'sku' => 'sku_radio_buttons_row%isolation%',
                    ],
                ],
            ],
            '5' => [
                'title' => 'custom option Checkbox %isolation%',
                'is_require' => 'Yes',
                'type' => 'Select/Checkbox',
                'options' => [
                    '0' => [
                        'title' => '20 percent',
                        'price' => '20',
                        'price_type' => 'Fixed',
                        'sku' => 'sku_checkbox_row%isolation%',
                    ],
                ],
            ],
            '6' => [
                'title' => 'custom option Multiple Select %isolation%',
                'is_require' => 'Yes',
                'type' => 'Select/Checkbox',
                'options' => [
                    '0' => [
                        'title' => '20 fixed',
                        'price' => '20',
                        'price_type' => 'Fixed',
                        'sku' => 'sku_multiple_select_row%isolation%',
                    ],
                ],
            ],
            '7' => [
                'title' => 'custom option Date %isolation%',
                'is_require' => 'Yes',
                'type' => 'Date/Date',
                'options' => [
                    'price' => '20',
                    'price_type' => 'Fixed',
                    'sku' => 'sku_date_row%isolation%',
                ],
            ],
            '8' => [
                'title' => 'custom option Date & Time %isolation%',
                'is_require' => 'Yes',
                'type' => 'Date/Date & Time',
                'options' => [
                    'price' => '20',
                    'price_type' => 'Fixed',
                    'sku' => 'sku_multiple_select_row%isolation%',
                ],
            ],
            '9' => [
                'title' => 'custom option Time %isolation%',
                'is_require' => 'Yes',
                'type' => 'Date/Time',
                'options' => [
                    'price' => '20',
                    'price_type' => 'Fixed',
                    'sku' => 'sku_time_row%isolation%',
                ],
            ],
        ];

        $this->_data['two_options'] = [
            '0' => [
                'title' => 'custom option drop down %isolation%',
                'is_require' => 'Yes',
                'type' => 'Select/Drop-down',
                'options' => [
                    '0' => [
                        'title' => '10 percent',
                        'price' => '10',
                        'price_type' => 'Percent',
                        'sku' => 'sku_drop_down_row_1',
                    ],
                    '1' => [
                        'title' => '20 percent',
                        'price' => '20',
                        'price_type' => 'Percent',
                        'sku' => 'sku_drop_down_row_2',
                    ],
                ],
            ],
            '1' => [
                'title' => 'custom option item %isolation%',
                'is_require' => 'Yes',
                'type' => 'Text/Field',
                'options' => [
                    '0' => [
                        'price' => '10',
                        'price_type' => 'Fixed',
                        'sku' => 'sku_item_option_%isolation%',
                        'max_characters' => '1024',
                    ],
                ],
            ],
        ];

        $this->_data['drop_down_with_one_option_fixed_price'] = [
            '0' => [
                'title' => 'custom option drop down %isolation%',
                'is_require' => 'Yes',
                'type' => 'Select/Drop-down',
                'options' => [
                    '0' => [
                        'title' => '30 bucks',
                        'price' => '30',
                        'price_type' => 'Fixed',
                        'sku' => 'sku_drop_down_row_1',
                    ],
                ],
            ],
        ];
    }
}
