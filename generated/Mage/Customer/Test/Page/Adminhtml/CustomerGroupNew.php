<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Customer\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class CustomerGroupNew
 */
class CustomerGroupNew extends BackendPage
{
    const MCA = 'customer_group/new';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'pageActionsBlock' => [
            'class' => 'Mage\Adminhtml\Test\Block\FormPageActions',
            'locator' => '.form-buttons',
            'strategy' => 'css selector',
        ],
        'customerGroupForm' => [
            'class' => 'Mage\Adminhtml\Test\Block\Customer\Group\Edit\Form',
            'locator' => '[id="page:main-container"]',
            'strategy' => 'css selector',
        ],
        'messagesBlock' => [
            'class' => 'Mage\Core\Test\Block\Messages',
            'locator' => '#messages',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\FormPageActions
     */
    public function getPageActionsBlock()
    {
        return $this->getBlockInstance('pageActionsBlock');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Customer\Group\Edit\Form
     */
    public function getCustomerGroupForm()
    {
        return $this->getBlockInstance('customerGroupForm');
    }

    /**
     * @return \Mage\Core\Test\Block\Messages
     */
    public function getMessagesBlock()
    {
        return $this->getBlockInstance('messagesBlock');
    }
}
