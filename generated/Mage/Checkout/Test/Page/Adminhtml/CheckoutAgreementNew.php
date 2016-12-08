<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Checkout\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class CheckoutAgreementNew
 */
class CheckoutAgreementNew extends BackendPage
{
    const MCA = 'checkout_agreement/new';

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
        'agreementsForm' => [
            'class' => 'Mage\Adminhtml\Test\Block\Checkout\Agreement\Edit\Form',
            'locator' => '#edit_form',
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
     * @return \Mage\Adminhtml\Test\Block\Checkout\Agreement\Edit\Form
     */
    public function getAgreementsForm()
    {
        return $this->getBlockInstance('agreementsForm');
    }
}
