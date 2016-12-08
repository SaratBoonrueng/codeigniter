<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Cms\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class CmsBlockIndex
 */
class CmsBlockIndex extends BackendPage
{
    const MCA = 'cms_block';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'messagesBlock' => [
            'class' => 'Mage\Core\Test\Block\Messages',
            'locator' => '#messages',
            'strategy' => 'css selector',
        ],
        'gridPageActions' => [
            'class' => 'Mage\Adminhtml\Test\Block\GridPageActions',
            'locator' => '.form-buttons',
            'strategy' => 'css selector',
        ],
        'cmsBlockGrid' => [
            'class' => 'Mage\Adminhtml\Test\Block\Cms\Block\CmsGrid',
            'locator' => '#cmsBlockGrid',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Core\Test\Block\Messages
     */
    public function getMessagesBlock()
    {
        return $this->getBlockInstance('messagesBlock');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\GridPageActions
     */
    public function getGridPageActions()
    {
        return $this->getBlockInstance('gridPageActions');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Cms\Block\CmsGrid
     */
    public function getCmsBlockGrid()
    {
        return $this->getBlockInstance('cmsBlockGrid');
    }
}
