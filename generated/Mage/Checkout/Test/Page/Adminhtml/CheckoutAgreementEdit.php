<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Checkout\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class CheckoutAgreementEdit
 */
class CheckoutAgreementEdit extends BackendPage
{
    const MCA = 'checkout_agreement/edit';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'pageActionsBlock' => [
            'class' => 'Mage\Adminhtml\Test\Block\FormPageActions',
            'locator' => '.content-header',
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
}
