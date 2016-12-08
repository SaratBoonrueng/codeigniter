<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Checkout\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class CheckoutMultishippingAddressNewShipping
 */
class CheckoutMultishippingAddressNewShipping extends FrontendPage
{
    const MCA = 'checkout/multishipping_address/newShipping';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'addressEditBlock' => [
            'class' => 'Mage\Customer\Test\Block\Address\Edit',
            'locator' => '#form-validate',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Customer\Test\Block\Address\Edit
     */
    public function getAddressEditBlock()
    {
        return $this->getBlockInstance('addressEditBlock');
    }
}
