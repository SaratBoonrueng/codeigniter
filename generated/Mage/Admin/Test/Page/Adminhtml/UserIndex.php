<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Admin\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class UserIndex
 */
class UserIndex extends BackendPage
{
    const MCA = 'permissions_user/index';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'pageActionsBlock' => [
            'class' => 'Mage\Adminhtml\Test\Block\GridPageActions',
            'locator' => '.content-header',
            'strategy' => 'css selector',
        ],
        'messagesBlock' => [
            'class' => 'Mage\Core\Test\Block\Messages',
            'locator' => '#messages',
            'strategy' => 'css selector',
        ],
        'userGrid' => [
            'class' => 'Mage\Adminhtml\Test\Block\Permissions\User\Grid',
            'locator' => '#permissionsUserGrid',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\GridPageActions
     */
    public function getPageActionsBlock()
    {
        return $this->getBlockInstance('pageActionsBlock');
    }

    /**
     * @return \Mage\Core\Test\Block\Messages
     */
    public function getMessagesBlock()
    {
        return $this->getBlockInstance('messagesBlock');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Permissions\User\Grid
     */
    public function getUserGrid()
    {
        return $this->getBlockInstance('userGrid');
    }
}
