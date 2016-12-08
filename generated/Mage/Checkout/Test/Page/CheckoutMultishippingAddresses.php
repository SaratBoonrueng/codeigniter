<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Checkout\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class CheckoutMultishippingAddresses
 */
class CheckoutMultishippingAddresses extends FrontendPage
{
    const MCA = 'checkout/multishipping/addresses';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'addressesBlock' => [
            'class' => 'Mage\Checkout\Test\Block\Multishipping\Addresses',
            'locator' => '#checkout_multishipping_form',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Checkout\Test\Block\Multishipping\Addresses
     */
    public function getAddressesBlock()
    {
        return $this->getBlockInstance('addressesBlock');
    }
}
