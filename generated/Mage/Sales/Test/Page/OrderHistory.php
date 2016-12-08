<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Sales\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class OrderHistory
 */
class OrderHistory extends FrontendPage
{
    const MCA = 'sales/order/history';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'orderHistoryBlock' => [
            'class' => 'Mage\Sales\Test\Block\Order\History',
            'locator' => '#my-orders-table',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Sales\Test\Block\Order\History
     */
    public function getOrderHistoryBlock()
    {
        return $this->getBlockInstance('orderHistoryBlock');
    }
}
