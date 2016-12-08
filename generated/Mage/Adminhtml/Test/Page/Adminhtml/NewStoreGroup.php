<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Adminhtml\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class NewStoreGroup
 */
class NewStoreGroup extends BackendPage
{
    const MCA = 'system_store/newGroup';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'formPageActions' => [
            'class' => 'Mage\Adminhtml\Test\Block\FormPageActions',
            'locator' => '.content-header',
            'strategy' => 'css selector',
        ],
        'editFormStoreGroup' => [
            'class' => 'Mage\Adminhtml\Test\Block\System\Store\Edit\Form\GroupForm',
            'locator' => '#edit_form',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\FormPageActions
     */
    public function getFormPageActions()
    {
        return $this->getBlockInstance('formPageActions');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\System\Store\Edit\Form\GroupForm
     */
    public function getEditFormStoreGroup()
    {
        return $this->getBlockInstance('editFormStoreGroup');
    }
}
