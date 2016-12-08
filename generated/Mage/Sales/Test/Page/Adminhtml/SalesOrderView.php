<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Sales\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class SalesOrderView
 */
class SalesOrderView extends BackendPage
{
    const MCA = 'sales/order/view';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'pageActions' => [
            'class' => 'Mage\Adminhtml\Test\Block\Sales\Order\Actions',
            'locator' => '.content-header',
            'strategy' => 'css selector',
        ],
        'messagesBlock' => [
            'class' => 'Mage\Core\Test\Block\Messages',
            'locator' => '#messages',
            'strategy' => 'css selector',
        ],
        'orderForm' => [
            'class' => 'Mage\Adminhtml\Test\Block\Sales\Order\View\Form',
            'locator' => '[id="page:main-container"]',
            'strategy' => 'css selector',
        ],
        'itemsOrderedBlock' => [
            'class' => 'Mage\Adminhtml\Test\Block\Sales\Order\View\Items',
            'locator' => '#sales_order_view_tabs_order_info_content .grid',
            'strategy' => 'css selector',
        ],
        'orderTotalsBlock' => [
            'class' => 'Mage\Adminhtml\Test\Block\Sales\Order\Totals',
            'locator' => '.order-totals',
            'strategy' => 'css selector',
        ],
        'titleBlock' => [
            'class' => 'Mage\Adminhtml\Test\Block\Sales\Order\Title',
            'locator' => '#content .content-header',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\Sales\Order\Actions
     */
    public function getPageActions()
    {
        return $this->getBlockInstance('pageActions');
    }

    /**
     * @return \Mage\Core\Test\Block\Messages
     */
    public function getMessagesBlock()
    {
        return $this->getBlockInstance('messagesBlock');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Sales\Order\View\Form
     */
    public function getOrderForm()
    {
        return $this->getBlockInstance('orderForm');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Sales\Order\View\Items
     */
    public function getItemsOrderedBlock()
    {
        return $this->getBlockInstance('itemsOrderedBlock');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Sales\Order\Totals
     */
    public function getOrderTotalsBlock()
    {
        return $this->getBlockInstance('orderTotalsBlock');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Sales\Order\Title
     */
    public function getTitleBlock()
    {
        return $this->getBlockInstance('titleBlock');
    }
}
