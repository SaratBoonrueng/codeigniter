<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Customer\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class CustomerGroupIndex
 */
class CustomerGroupIndex extends BackendPage
{
    const MCA = 'customer_group/index';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'messagesBlock' => [
            'class' => 'Mage\Core\Test\Block\Messages',
            'locator' => '#messages',
            'strategy' => 'css selector',
        ],
        'gridPageActions' => [
            'class' => 'Mage\Adminhtml\Test\Block\GridPageActions',
            'locator' => '.form-buttons',
            'strategy' => 'css selector',
        ],
        'customerGroupGrid' => [
            'class' => 'Mage\Adminhtml\Test\Block\Customer\Group\Grid',
            'locator' => '#customerGroupGrid',
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
     * @return \Mage\Adminhtml\Test\Block\GridPageActions
     */
    public function getGridPageActions()
    {
        return $this->getBlockInstance('gridPageActions');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Customer\Group\Grid
     */
    public function getCustomerGroupGrid()
    {
        return $this->getBlockInstance('customerGroupGrid');
    }
}
