<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\SalesRule\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class PromoQuoteEdit
 */
class PromoQuoteEdit extends BackendPage
{
    const MCA = 'promo_quote/edit';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'formPageActions' => [
            'class' => 'Mage\Adminhtml\Test\Block\Promo\Quote\Edit\FormPageActions',
            'locator' => '.form-buttons',
            'strategy' => 'css selector',
        ],
        'salesRuleForm' => [
            'class' => 'Mage\Adminhtml\Test\Block\Promo\Quote\Edit\PromoQuoteForm',
            'locator' => '[id="page:main-container"]',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\Promo\Quote\Edit\FormPageActions
     */
    public function getFormPageActions()
    {
        return $this->getBlockInstance('formPageActions');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Promo\Quote\Edit\PromoQuoteForm
     */
    public function getSalesRuleForm()
    {
        return $this->getBlockInstance('salesRuleForm');
    }
}
