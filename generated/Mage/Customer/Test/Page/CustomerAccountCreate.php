<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Customer\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class CustomerAccountCreate
 */
class CustomerAccountCreate extends FrontendPage
{
    const MCA = 'customer/account/create';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'registerForm' => [
            'class' => 'Mage\Customer\Test\Block\Form\Register',
            'locator' => '#form-validate',
            'strategy' => 'css selector',
        ],
        'messagesBlock' => [
            'class' => 'Mage\Core\Test\Block\Messages',
            'locator' => '.messages',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Customer\Test\Block\Form\Register
     */
    public function getRegisterForm()
    {
        return $this->getBlockInstance('registerForm');
    }

    /**
     * @return \Mage\Core\Test\Block\Messages
     */
    public function getMessagesBlock()
    {
        return $this->getBlockInstance('messagesBlock');
    }
}
