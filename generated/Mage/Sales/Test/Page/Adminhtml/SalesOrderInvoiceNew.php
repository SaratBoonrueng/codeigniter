<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Sales\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class SalesOrderInvoiceNew
 */
class SalesOrderInvoiceNew extends BackendPage
{
    const MCA = 'sales_order_invoice/new';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'formBlock' => [
            'class' => 'Mage\Adminhtml\Test\Block\Sales\Order\Invoice\Form',
            'locator' => '#edit_form',
            'strategy' => 'css selector',
        ],
        'totalsBlock' => [
            'class' => 'Mage\Adminhtml\Test\Block\Sales\Order\Invoice\Totals',
            'locator' => '#invoice_totals',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\Sales\Order\Invoice\Form
     */
    public function getFormBlock()
    {
        return $this->getBlockInstance('formBlock');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Sales\Order\Invoice\Totals
     */
    public function getTotalsBlock()
    {
        return $this->getBlockInstance('totalsBlock');
    }
}
