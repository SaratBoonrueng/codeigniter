<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Sitemap\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class SitemapIndex
 */
class SitemapIndex extends BackendPage
{
    const MCA = 'sitemap/index';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'gridPageActions' => [
            'class' => 'Mage\Adminhtml\Test\Block\GridPageActions',
            'locator' => '.form-buttons',
            'strategy' => 'css selector',
        ],
        'messagesBlock' => [
            'class' => 'Mage\Core\Test\Block\Messages',
            'locator' => '#messages',
            'strategy' => 'css selector',
        ],
        'sitemapGrid' => [
            'class' => 'Mage\Adminhtml\Test\Block\Sitemap\Grid',
            'locator' => '#sitemapGrid',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\GridPageActions
     */
    public function getGridPageActions()
    {
        return $this->getBlockInstance('gridPageActions');
    }

    /**
     * @return \Mage\Core\Test\Block\Messages
     */
    public function getMessagesBlock()
    {
        return $this->getBlockInstance('messagesBlock');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Sitemap\Grid
     */
    public function getSitemapGrid()
    {
        return $this->getBlockInstance('sitemapGrid');
    }
}
