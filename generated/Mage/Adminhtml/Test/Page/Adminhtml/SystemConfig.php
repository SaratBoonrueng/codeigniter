<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Adminhtml\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class SystemConfig
 */
class SystemConfig extends BackendPage
{
    const MCA = 'system_config';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'storesSwitcher' => [
            'class' => 'Mage\Adminhtml\Test\Block\System\Config\Switcher',
            'locator' => '.switcher',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\System\Config\Switcher
     */
    public function getStoresSwitcher()
    {
        return $this->getBlockInstance('storesSwitcher');
    }
}
