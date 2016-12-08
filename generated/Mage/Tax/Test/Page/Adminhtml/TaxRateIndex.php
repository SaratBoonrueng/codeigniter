<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Tax\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class TaxRateIndex
 */
class TaxRateIndex extends BackendPage
{
    const MCA = 'tax_rate';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'pageActionsBlock' => [
            'class' => 'Mage\Adminhtml\Test\Block\GridPageActions',
            'locator' => '.content-header',
            'strategy' => 'css selector',
        ],
        'messagesBlock' => [
            'class' => 'Mage\Core\Test\Block\Messages',
            'locator' => '#messages',
            'strategy' => 'css selector',
        ],
        'taxRatesGrid' => [
            'class' => 'Mage\Adminhtml\Test\Block\Tax\Rate\RatesGrid',
            'locator' => '#tax_rate_grid',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\GridPageActions
     */
    public function getPageActionsBlock()
    {
        return $this->getBlockInstance('pageActionsBlock');
    }

    /**
     * @return \Mage\Core\Test\Block\Messages
     */
    public function getMessagesBlock()
    {
        return $this->getBlockInstance('messagesBlock');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Tax\Rate\RatesGrid
     */
    public function getTaxRatesGrid()
    {
        return $this->getBlockInstance('taxRatesGrid');
    }
}
