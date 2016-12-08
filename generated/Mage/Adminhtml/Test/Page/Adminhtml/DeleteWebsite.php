<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Adminhtml\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class DeleteWebsite
 */
class DeleteWebsite extends BackendPage
{
    const MCA = 'system_store/deleteWebsite';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'form' => [
            'class' => 'Mage\Adminhtml\Test\Block\System\Store\Delete\Website',
            'locator' => '[id="page:main-container"]',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\System\Store\Delete\Website
     */
    public function getForm()
    {
        return $this->getBlockInstance('form');
    }
}
