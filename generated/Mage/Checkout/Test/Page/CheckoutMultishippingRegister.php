<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Checkout\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class CheckoutMultishippingRegister
 */
class CheckoutMultishippingRegister extends FrontendPage
{
    const MCA = 'checkout/multishipping/register';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'registerForm' => [
            'class' => 'Mage\Checkout\Test\Block\Multishipping\Register',
            'locator' => '#form-validate',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Checkout\Test\Block\Multishipping\Register
     */
    public function getRegisterForm()
    {
        return $this->getBlockInstance('registerForm');
    }
}
