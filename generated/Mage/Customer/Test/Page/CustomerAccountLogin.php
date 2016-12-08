<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Customer\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class CustomerAccountLogin
 */
class CustomerAccountLogin extends FrontendPage
{
    const MCA = 'customer/account/login';

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
