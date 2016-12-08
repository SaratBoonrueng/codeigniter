<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Admin\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class UserRoleIndex
 */
class UserRoleIndex extends BackendPage
{
    const MCA = 'permissions_role/index';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'roleActions' => [
            'class' => 'Mage\Adminhtml\Test\Block\GridPageActions',
            'locator' => '.content-header',
            'strategy' => 'css selector',
        ],
        'roleGrid' => [
            'class' => 'Mage\Adminhtml\Test\Block\Permissions\Role\Grid\RoleGrid',
            'locator' => '#roleGrid',
            'strategy' => 'css selector',
        ],
        'messagesBlock' => [
            'class' => 'Mage\Core\Test\Block\Messages',
            'locator' => '#messages',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\GridPageActions
     */
    public function getRoleActions()
    {
        return $this->getBlockInstance('roleActions');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Permissions\Role\Grid\RoleGrid
     */
    public function getRoleGrid()
    {
        return $this->getBlockInstance('roleGrid');
    }

    /**
     * @return \Mage\Core\Test\Block\Messages
     */
    public function getMessagesBlock()
    {
        return $this->getBlockInstance('messagesBlock');
    }
}
