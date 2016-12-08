<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Customer\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class CustomerAccountEdit
 */
class CustomerAccountEdit extends FrontendPage
{
    const MCA = 'customer/account/edit';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'accountInfoForm' => [
            'class' => 'Mage\Customer\Test\Block\Form\CustomerForm',
            'locator' => '#form-validate',
            'strategy' => 'css selector',
        ],
        'messages' => [
            'class' => 'Mage\Core\Test\Block\Messages',
            'locator' => '.messages',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Customer\Test\Block\Form\CustomerForm
     */
    public function getAccountInfoForm()
    {
        return $this->getBlockInstance('accountInfoForm');
    }

    /**
     * @return \Mage\Core\Test\Block\Messages
     */
    public function getMessages()
    {
        return $this->getBlockInstance('messages');
    }
}
