<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Tax\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class TaxRuleIndex
 */
class TaxRuleIndex extends BackendPage
{
    const MCA = 'tax_rule';

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
        'taxRuleGrid' => [
            'class' => 'Mage\Adminhtml\Test\Block\Tax\Rule\Grid',
            'locator' => '#taxRuleGrid',
            'strategy' => 'css selector',
        ],
        'messagesBlock' => [
            'class' => 'Mage\Core\Test\Block\Messages',
            'locator' => '#messages',
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
     * @return \Mage\Adminhtml\Test\Block\Tax\Rule\Grid
     */
    public function getTaxRuleGrid()
    {
        return $this->getBlockInstance('taxRuleGrid');
    }

    /**
     * @return \Mage\Core\Test\Block\Messages
     */
    public function getMessagesBlock()
    {
        return $this->getBlockInstance('messagesBlock');
    }
}
