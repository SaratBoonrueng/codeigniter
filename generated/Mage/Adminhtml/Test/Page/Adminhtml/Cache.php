<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Adminhtml\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class Cache
 */
class Cache extends BackendPage
{
    const MCA = 'cache';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'messagesBlock' => [
            'class' => 'Mage\Core\Test\Block\Messages',
            'locator' => '#messages .messages',
            'strategy' => 'css selector',
        ],
        'pageActions' => [
            'class' => 'Mage\Adminhtml\Test\Block\Cache\PageActions',
            'locator' => '.content-header',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Core\Test\Block\Messages
     */
    public function getMessagesBlock()
    {
        return $this->getBlockInstance('messagesBlock');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Cache\PageActions
     */
    public function getPageActions()
    {
        return $this->getBlockInstance('pageActions');
    }
}
