<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Shipping\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class SalesShipment
 */
class SalesShipment extends BackendPage
{
    const MCA = 'sales_shipment';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'grid' => [
            'class' => 'Mage\Adminhtml\Test\Block\Shipping\Grid',
            'locator' => '#sales_shipment_grid',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\Shipping\Grid
     */
    public function getGrid()
    {
        return $this->getBlockInstance('grid');
    }
}
