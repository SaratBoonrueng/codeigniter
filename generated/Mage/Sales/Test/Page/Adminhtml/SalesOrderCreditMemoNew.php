<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Sales\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class SalesOrderCreditMemoNew
 */
class SalesOrderCreditMemoNew extends BackendPage
{
    const MCA = 'sales_order_creditmemo/new';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'formBlock' => [
            'class' => 'Mage\Adminhtml\Test\Block\Sales\Order\Creditmemo\Form',
            'locator' => '#edit_form',
            'strategy' => 'css selector',
        ],
        'totalsBlock' => [
            'class' => 'Mage\Adminhtml\Test\Block\Sales\Order\Creditmemo\Totals',
            'locator' => '.box-right.entry-edit',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\Sales\Order\Creditmemo\Form
     */
    public function getFormBlock()
    {
        return $this->getBlockInstance('formBlock');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Sales\Order\Creditmemo\Totals
     */
    public function getTotalsBlock()
    {
        return $this->getBlockInstance('totalsBlock');
    }
}
