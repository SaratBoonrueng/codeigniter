<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Catalog\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class CatalogProduct
 */
class CatalogProduct extends BackendPage
{
    const MCA = 'catalog_product';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'productGrid' => [
            'class' => 'Mage\Adminhtml\Test\Block\Catalog\Product\Grid',
            'locator' => '#productGrid',
            'strategy' => 'css selector',
        ],
        'messagesBlock' => [
            'class' => 'Mage\Core\Test\Block\Messages',
            'locator' => '#messages .messages',
            'strategy' => 'css selector',
        ],
        'gridPageActionBlock' => [
            'class' => 'Mage\Adminhtml\Test\Block\GridPageActions',
            'locator' => '.content-header',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\Catalog\Product\Grid
     */
    public function getProductGrid()
    {
        return $this->getBlockInstance('productGrid');
    }

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
    public function getGridPageActionBlock()
    {
        return $this->getBlockInstance('gridPageActionBlock');
    }
}
