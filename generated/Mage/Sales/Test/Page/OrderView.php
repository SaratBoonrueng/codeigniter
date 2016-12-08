<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Sales\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class OrderView
 */
class OrderView extends FrontendPage
{
    const MCA = 'sales_order/view';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'giftMessageForOrderBlock' => [
            'class' => 'Mage\GiftMessage\Test\Block\Message\Order\View',
            'locator' => '.order-additional.order-gift-message',
            'strategy' => 'css selector',
        ],
        'giftMessageForItemBlock' => [
            'class' => 'Mage\GiftMessage\Test\Block\Message\Order\Items\View',
            'locator' => '#my-orders-table',
            'strategy' => 'css selector',
        ],
        'orderViewBlock' => [
            'class' => 'Mage\Sales\Test\Block\Order\View',
            'locator' => '.col-main',
            'strategy' => 'css selector',
        ],
        'itemsOrderedBlock' => [
            'class' => 'Mage\Sales\Test\Block\Order\View\Items',
            'locator' => 'tbody',
            'strategy' => 'css selector',
        ],
        'orderTotalsBlock' => [
            'class' => 'Mage\Sales\Test\Block\Order\View\Totals',
            'locator' => 'tfoot',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\GiftMessage\Test\Block\Message\Order\View
     */
    public function getGiftMessageForOrderBlock()
    {
        return $this->getBlockInstance('giftMessageForOrderBlock');
    }

    /**
     * @return \Mage\GiftMessage\Test\Block\Message\Order\Items\View
     */
    public function getGiftMessageForItemBlock()
    {
        return $this->getBlockInstance('giftMessageForItemBlock');
    }

    /**
     * @return \Mage\Sales\Test\Block\Order\View
     */
    public function getOrderViewBlock()
    {
        return $this->getBlockInstance('orderViewBlock');
    }

    /**
     * @return \Mage\Sales\Test\Block\Order\View\Items
     */
    public function getItemsOrderedBlock()
    {
        return $this->getBlockInstance('itemsOrderedBlock');
    }

    /**
     * @return \Mage\Sales\Test\Block\Order\View\Totals
     */
    public function getOrderTotalsBlock()
    {
        return $this->getBlockInstance('orderTotalsBlock');
    }
}
