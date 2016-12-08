<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Sales\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class SalesCreditMemo
 */
class SalesCreditMemo extends BackendPage
{
    const MCA = 'sales_creditmemo';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'grid' => [
            'class' => 'Mage\Adminhtml\Test\Block\Sales\CreditMemos\Grid',
            'locator' => '#sales_creditmemo_grid',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\Sales\CreditMemos\Grid
     */
    public function getGrid()
    {
        return $this->getBlockInstance('grid');
    }
}
