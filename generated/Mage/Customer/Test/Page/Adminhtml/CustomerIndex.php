<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Customer\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class CustomerIndex
 */
class CustomerIndex extends BackendPage
{
    const MCA = 'customer/index';

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
        'pageActionsBlock' => [
            'class' => 'Mage\Adminhtml\Test\Block\GridPageActions',
            'locator' => '.form-buttons',
            'strategy' => 'css selector',
        ],
        'customerGridBlock' => [
            'class' => 'Mage\Adminhtml\Test\Block\Customer\CustomerGrid',
            'locator' => '#customerGrid',
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
    public function getPageActionsBlock()
    {
        return $this->getBlockInstance('pageActionsBlock');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Customer\CustomerGrid
     */
    public function getCustomerGridBlock()
    {
        return $this->getBlockInstance('customerGridBlock');
    }
}
