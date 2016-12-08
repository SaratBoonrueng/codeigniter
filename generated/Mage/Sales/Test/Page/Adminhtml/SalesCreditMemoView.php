<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Sales\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class SalesCreditMemoView
 */
class SalesCreditMemoView extends BackendPage
{
    const MCA = 'sales_creditmemo/view';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'titleBlock' => [
            'class' => 'Mage\Theme\Test\Block\Title',
            'locator' => '.head-sales-order-shipment',
            'strategy' => 'css selector',
        ],
        'itemsBlock' => [
            'class' => 'Mage\Adminhtml\Test\Block\Sales\CreditMemos\View\Items',
            'locator' => '.grid.np',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Theme\Test\Block\Title
     */
    public function getTitleBlock()
    {
        return $this->getBlockInstance('titleBlock');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Sales\CreditMemos\View\Items
     */
    public function getItemsBlock()
    {
        return $this->getBlockInstance('itemsBlock');
    }
}
