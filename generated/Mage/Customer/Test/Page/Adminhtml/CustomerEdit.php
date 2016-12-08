<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Customer\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class CustomerEdit
 */
class CustomerEdit extends BackendPage
{
    const MCA = 'customer/edit';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'customerForm' => [
            'class' => 'Mage\Adminhtml\Test\Block\Customer\Edit\CustomerForm',
            'locator' => '[id="page:main-container"]',
            'strategy' => 'css selector',
        ],
        'pageActionsBlock' => [
            'class' => 'Mage\Adminhtml\Test\Block\Customer\Edit\FormPageActions',
            'locator' => '.form-buttons',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\Customer\Edit\CustomerForm
     */
    public function getCustomerForm()
    {
        return $this->getBlockInstance('customerForm');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Customer\Edit\FormPageActions
     */
    public function getPageActionsBlock()
    {
        return $this->getBlockInstance('pageActionsBlock');
    }
}
