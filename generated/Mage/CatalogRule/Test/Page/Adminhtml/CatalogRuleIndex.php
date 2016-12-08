<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\CatalogRule\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class CatalogRuleIndex
 */
class CatalogRuleIndex extends BackendPage
{
    const MCA = 'promo_catalog/index';

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
            'class' => 'Mage\Adminhtml\Test\Block\CatalogRule\Promo\GridPageActions',
            'locator' => '.form-buttons',
            'strategy' => 'css selector',
        ],
        'catalogRuleGrid' => [
            'class' => 'Mage\Adminhtml\Test\Block\CatalogRule\Promo\Catalog',
            'locator' => '#promo_catalog_grid',
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
     * @return \Mage\Adminhtml\Test\Block\CatalogRule\Promo\GridPageActions
     */
    public function getGridPageActions()
    {
        return $this->getBlockInstance('gridPageActions');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\CatalogRule\Promo\Catalog
     */
    public function getCatalogRuleGrid()
    {
        return $this->getBlockInstance('catalogRuleGrid');
    }
}
