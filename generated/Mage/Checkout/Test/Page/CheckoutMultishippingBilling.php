<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Checkout\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class CheckoutMultishippingBilling
 */
class CheckoutMultishippingBilling extends FrontendPage
{
    const MCA = 'checkout/multishipping/billing';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'billingBlock' => [
            'class' => 'Mage\Checkout\Test\Block\Multishipping\Billing',
            'locator' => '#multishipping-billing-form',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Checkout\Test\Block\Multishipping\Billing
     */
    public function getBillingBlock()
    {
        return $this->getBlockInstance('billingBlock');
    }
}
