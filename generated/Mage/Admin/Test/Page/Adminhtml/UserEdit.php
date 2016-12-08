<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Admin\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class UserEdit
 */
class UserEdit extends BackendPage
{
    const MCA = 'permissions_user/edit';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'userForm' => [
            'class' => 'Mage\Adminhtml\Test\Block\Api\User\UserForm',
            'locator' => '[id="page:main-container"]',
            'strategy' => 'css selector',
        ],
        'formPageActions' => [
            'class' => 'Mage\Adminhtml\Test\Block\FormPageActions',
            'locator' => '.content-header',
            'strategy' => 'css selector',
        ],
        'messagesBlock' => [
            'class' => 'Mage\Core\Test\Block\Messages',
            'locator' => '#messages',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\Api\User\UserForm
     */
    public function getUserForm()
    {
        return $this->getBlockInstance('userForm');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\FormPageActions
     */
    public function getFormPageActions()
    {
        return $this->getBlockInstance('formPageActions');
    }

    /**
     * @return \Mage\Core\Test\Block\Messages
     */
    public function getMessagesBlock()
    {
        return $this->getBlockInstance('messagesBlock');
    }
}
