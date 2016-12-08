<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Sales\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class SalesOrderIndex
 */
class SalesOrderIndex extends BackendPage
{
    const MCA = 'sales_order/index';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'salesOrderGrid' => [
            'class' => 'Mage\Adminhtml\Test\Block\Sales\Order\Grid',
            'locator' => '#sales_order_grid',
            'strategy' => 'css selector',
        ],
        'messagesBlock' => [
            'class' => 'Mage\Core\Test\Block\Messages',
            'locator' => '#messages',
            'strategy' => 'css selector',
        ],
        'pageActionsBlock' => [
            'class' => 'Mage\Adminhtml\Test\Block\GridPageActions',
            'locator' => '.content-header',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\Sales\Order\Grid
     */
    public function getSalesOrderGrid()
    {
        return $this->getBlockInstance('salesOrderGrid');
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
    public function getPageActionsBlock()
    {
        return $this->getBlockInstance('pageActionsBlock');
    }
}
