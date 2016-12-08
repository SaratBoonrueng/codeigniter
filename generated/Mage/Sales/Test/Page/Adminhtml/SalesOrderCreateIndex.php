<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Sales\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class SalesOrderCreateIndex
 */
class SalesOrderCreateIndex extends BackendPage
{
    const MCA = 'sales_order_create/index';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'customerGrid' => [
            'class' => 'Mage\Adminhtml\Test\Block\Sales\Order\Create\CustomerGrid',
            'locator' => '#order-customer-selector',
            'strategy' => 'css selector',
        ],
        'createBlock' => [
            'class' => 'Mage\Adminhtml\Test\Block\Sales\Order\Create',
            'locator' => '[id="page:main-container"]',
            'strategy' => 'css selector',
        ],
        'storeBlock' => [
            'class' => 'Mage\Adminhtml\Test\Block\Sales\Order\Create\Store',
            'locator' => '#order-store-selector',
            'strategy' => 'css selector',
        ],
        'customerActivitiesBlock' => [
            'class' => 'Mage\Adminhtml\Test\Block\Sales\Order\Create\CustomerActivities',
            'locator' => '#order-sidebar',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\Sales\Order\Create\CustomerGrid
     */
    public function getCustomerGrid()
    {
        return $this->getBlockInstance('customerGrid');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Sales\Order\Create
     */
    public function getCreateBlock()
    {
        return $this->getBlockInstance('createBlock');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Sales\Order\Create\Store
     */
    public function getStoreBlock()
    {
        return $this->getBlockInstance('storeBlock');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Sales\Order\Create\CustomerActivities
     */
    public function getCustomerActivitiesBlock()
    {
        return $this->getBlockInstance('customerActivitiesBlock');
    }
}
