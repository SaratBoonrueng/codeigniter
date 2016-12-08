<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Sales\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class SalesInvoice
 */
class SalesInvoice extends BackendPage
{
    const MCA = 'sales_invoice';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'grid' => [
            'class' => 'Mage\Adminhtml\Test\Block\Sales\Invoices\Grid',
            'locator' => '#sales_invoice_grid',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\Sales\Invoices\Grid
     */
    public function getGrid()
    {
        return $this->getBlockInstance('grid');
    }
}
