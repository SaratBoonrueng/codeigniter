<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Sales\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class InvoiceView
 */
class InvoiceView extends FrontendPage
{
    const MCA = 'sales/order/invoice';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'entitiesBlock' => [
            'class' => 'Mage\Sales\Test\Block\Order\Invoices',
            'locator' => '.order-items.order-details',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Sales\Test\Block\Order\Invoices
     */
    public function getEntitiesBlock()
    {
        return $this->getBlockInstance('entitiesBlock');
    }
}
