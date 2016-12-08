<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Sales\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class SalesGuestPrint
 */
class SalesGuestPrint extends FrontendPage
{
    const MCA = 'sales/guest/print';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'viewBlock' => [
            'class' => 'Mage\Sales\Test\Block\Order\OrderPrint\View',
            'locator' => '.sales-guest-print',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Sales\Test\Block\Order\OrderPrint\View
     */
    public function getViewBlock()
    {
        return $this->getBlockInstance('viewBlock');
    }
}
