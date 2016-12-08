<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Widget\Test\Repository\Widget;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class LayoutUpdates
 */
class LayoutUpdates extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['all_pages'] = [
            '0' => [
                'page_group' => 'Generic Pages/All Pages',
                'block' => 'Main Content Area',
            ],
        ];
    }
}
