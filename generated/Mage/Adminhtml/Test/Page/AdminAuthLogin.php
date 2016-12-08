<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Adminhtml\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class AdminAuthLogin
 */
class AdminAuthLogin extends FrontendPage
{
    const MCA = 'admin';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'loginBlock' => [
            'class' => 'Mage\Adminhtml\Test\Block\Admin\Login',
            'locator' => '#loginForm',
            'strategy' => 'css selector',
        ],
        'messagesBlock' => [
            'class' => 'Mage\Core\Test\Block\Messages',
            'locator' => '#messages',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\Admin\Login
     */
    public function getLoginBlock()
    {
        return $this->getBlockInstance('loginBlock');
    }

    /**
     * @return \Mage\Core\Test\Block\Messages
     */
    public function getMessagesBlock()
    {
        return $this->getBlockInstance('messagesBlock');
    }
}
