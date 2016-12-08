<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Connect\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class ConnectManager
 */
class ConnectManager extends FrontendPage
{
    const MCA = '../downloader/';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'connectLogin' => [
            'class' => 'Mage\Connect\Test\Block\Connect\Login',
            'locator' => '.content',
            'strategy' => 'css selector',
        ],
        'connectContent' => [
            'class' => 'Mage\Connect\Test\Block\Connect\Content',
            'locator' => '.content',
            'strategy' => 'css selector',
        ],
        'connectNavigation' => [
            'class' => 'Mage\Connect\Test\Block\Connect\Navigation',
            'locator' => '.nav',
            'strategy' => 'css selector',
        ],
        'messages' => [
            'class' => 'Mage\Core\Test\Block\Messages',
            'locator' => '.msgs',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Connect\Test\Block\Connect\Login
     */
    public function getConnectLogin()
    {
        return $this->getBlockInstance('connectLogin');
    }

    /**
     * @return \Mage\Connect\Test\Block\Connect\Content
     */
    public function getConnectContent()
    {
        return $this->getBlockInstance('connectContent');
    }

    /**
     * @return \Mage\Connect\Test\Block\Connect\Navigation
     */
    public function getConnectNavigation()
    {
        return $this->getBlockInstance('connectNavigation');
    }

    /**
     * @return \Mage\Core\Test\Block\Messages
     */
    public function getMessages()
    {
        return $this->getBlockInstance('messages');
    }
}
