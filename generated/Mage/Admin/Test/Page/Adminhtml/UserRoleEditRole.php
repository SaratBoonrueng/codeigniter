<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Admin\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class UserRoleEditRole
 */
class UserRoleEditRole extends BackendPage
{
    const MCA = 'permissions_role/editrole';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'pageActions' => [
            'class' => 'Mage\Adminhtml\Test\Block\FormPageActions',
            'locator' => '.content-header',
            'strategy' => 'css selector',
        ],
        'roleFormTabs' => [
            'class' => 'Mage\Adminhtml\Test\Block\Permissions\Role\RoleForm',
            'locator' => '[id="page:main-container"]',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\FormPageActions
     */
    public function getPageActions()
    {
        return $this->getBlockInstance('pageActions');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Permissions\Role\RoleForm
     */
    public function getRoleFormTabs()
    {
        return $this->getBlockInstance('roleFormTabs');
    }
}
