<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Checkout\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class CheckoutMultishippingShipping
 */
class CheckoutMultishippingShipping extends FrontendPage
{
    const MCA = 'checkout/multishipping/shipping';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'shippingBlock' => [
            'class' => 'Mage\Checkout\Test\Block\Multishipping\Shipping',
            'locator' => '#shipping_method_form',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Checkout\Test\Block\Multishipping\Shipping
     */
    public function getShippingBlock()
    {
        return $this->getBlockInstance('shippingBlock');
    }
}
