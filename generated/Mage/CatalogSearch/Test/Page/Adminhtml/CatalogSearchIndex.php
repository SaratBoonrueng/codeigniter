<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\CatalogSearch\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class CatalogSearchIndex
 */
class CatalogSearchIndex extends BackendPage
{
    const MCA = 'catalog_search';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'grid' => [
            'class' => 'Mage\Adminhtml\Test\Block\CatalogSearch\Grid',
            'locator' => '#catalog_search_grid',
            'strategy' => 'css selector',
        ],
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
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\CatalogSearch\Grid
     */
    public function getGrid()
    {
        return $this->getBlockInstance('grid');
    }

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
}
