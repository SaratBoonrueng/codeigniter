<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Sales\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class SalesInvoiceView
 */
class SalesInvoiceView extends BackendPage
{
    const MCA = 'sales_invoice/view';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'pageActions' => [
            'class' => 'Mage\Adminhtml\Test\Block\Sales\Invoices\Actions',
            'locator' => '.content-header',
            'strategy' => 'css selector',
        ],
        'titleBlock' => [
            'class' => 'Mage\Theme\Test\Block\Title',
            'locator' => '.head-sales-order-shipment',
            'strategy' => 'css selector',
        ],
        'itemsBlock' => [
            'class' => 'Mage\Adminhtml\Test\Block\Sales\Invoices\View\Items',
            'locator' => '.grid.np',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\Sales\Invoices\Actions
     */
    public function getPageActions()
    {
        return $this->getBlockInstance('pageActions');
    }

    /**
     * @return \Mage\Theme\Test\Block\Title
     */
    public function getTitleBlock()
    {
        return $this->getBlockInstance('titleBlock');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Sales\Invoices\View\Items
     */
    public function getItemsBlock()
    {
        return $this->getBlockInstance('itemsBlock');
    }
}
