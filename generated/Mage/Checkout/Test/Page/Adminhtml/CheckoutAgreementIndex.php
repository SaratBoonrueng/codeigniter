<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Checkout\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class CheckoutAgreementIndex
 */
class CheckoutAgreementIndex extends BackendPage
{
    const MCA = 'checkout_agreement/index';

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
            'locator' => '.content-header',
            'strategy' => 'css selector',
        ],
        'agreementGridBlock' => [
            'class' => 'Mage\Adminhtml\Test\Block\Checkout\Agreement\Grid',
            'locator' => '#agreementGrid',
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
     * @return \Mage\Adminhtml\Test\Block\Checkout\Agreement\Grid
     */
    public function getAgreementGridBlock()
    {
        return $this->getBlockInstance('agreementGridBlock');
    }
}
