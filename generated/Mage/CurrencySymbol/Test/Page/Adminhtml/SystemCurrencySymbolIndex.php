<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\CurrencySymbol\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class SystemCurrencySymbolIndex
 */
class SystemCurrencySymbolIndex extends BackendPage
{
    const MCA = 'system_currencysymbol/index';

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
        'currencySymbolForm' => [
            'class' => 'Mage\Adminhtml\Test\Block\System\CurrencySymbolForm',
            'locator' => '#currency_symbols_form',
            'strategy' => 'css selector',
        ],
        'pageActions' => [
            'class' => 'Mage\Adminhtml\Test\Block\System\FormPageActions',
            'locator' => '.form-buttons',
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
     * @return \Mage\Adminhtml\Test\Block\System\CurrencySymbolForm
     */
    public function getCurrencySymbolForm()
    {
        return $this->getBlockInstance('currencySymbolForm');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\System\FormPageActions
     */
    public function getPageActions()
    {
        return $this->getBlockInstance('pageActions');
    }
}
