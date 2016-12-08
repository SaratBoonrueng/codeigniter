<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Shipping\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class ShipmentView
 */
class ShipmentView extends FrontendPage
{
    const MCA = 'sales/order/shipment';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'entitiesBlock' => [
            'class' => 'Mage\Shipping\Test\Block\Sales\Order\Shipments',
            'locator' => '.order-items.order-details',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Shipping\Test\Block\Sales\Order\Shipments
     */
    public function getEntitiesBlock()
    {
        return $this->getBlockInstance('entitiesBlock');
    }
}
