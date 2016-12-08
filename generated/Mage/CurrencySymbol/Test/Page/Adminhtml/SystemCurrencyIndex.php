<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\CurrencySymbol\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class SystemCurrencyIndex
 */
class SystemCurrencyIndex extends BackendPage
{
    const MCA = 'system_currency/index';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'gridPageActions' => [
            'class' => 'Mage\Adminhtml\Test\Block\System\Currency\GridPageActions',
            'locator' => '.form-buttons',
            'strategy' => 'css selector',
        ],
        'currencyGrid' => [
            'class' => 'Mage\Adminhtml\Test\Block\System\Currency\CurrencyGrid',
            'locator' => '#rateForm',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\System\Currency\GridPageActions
     */
    public function getGridPageActions()
    {
        return $this->getBlockInstance('gridPageActions');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\System\Currency\CurrencyGrid
     */
    public function getCurrencyGrid()
    {
        return $this->getBlockInstance('currencyGrid');
    }
}
