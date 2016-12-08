<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\SalesRule\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class PromoQuoteIndex
 */
class PromoQuoteIndex extends BackendPage
{
    const MCA = 'promo_quote/index';

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
        'promoQuoteGrid' => [
            'class' => 'Mage\Adminhtml\Test\Block\Promo\Grid',
            'locator' => '#promo_quote_grid',
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
     * @return \Mage\Adminhtml\Test\Block\Promo\Grid
     */
    public function getPromoQuoteGrid()
    {
        return $this->getBlockInstance('promoQuoteGrid');
    }
}
