<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Checkout\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class CheckoutMultishippingOverview
 */
class CheckoutMultishippingOverview extends FrontendPage
{
    const MCA = 'checkout/multishipping/overview';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'overviewBlock' => [
            'class' => 'Mage\Checkout\Test\Block\Multishipping\Overview',
            'locator' => '#review-order-form',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Checkout\Test\Block\Multishipping\Overview
     */
    public function getOverviewBlock()
    {
        return $this->getBlockInstance('overviewBlock');
    }
}
