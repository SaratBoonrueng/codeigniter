<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Checkout\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class CheckoutMultishippingLogin
 */
class CheckoutMultishippingLogin extends FrontendPage
{
    const MCA = 'checkout/multishipping/login';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'loginBlock' => [
            'class' => 'Mage\Customer\Test\Block\Form\Login',
            'locator' => '#login-form',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Customer\Test\Block\Form\Login
     */
    public function getLoginBlock()
    {
        return $this->getBlockInstance('loginBlock');
    }
}
