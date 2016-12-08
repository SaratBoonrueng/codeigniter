<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Shipping\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class SalesOrderShipmentNew
 */
class SalesOrderShipmentNew extends BackendPage
{
    const MCA = 'sales_order_shipment/new';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'formBlock' => [
            'class' => 'Mage\Adminhtml\Test\Block\Sales\Order\Shipment\Form',
            'locator' => '#edit_form',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\Sales\Order\Shipment\Form
     */
    public function getFormBlock()
    {
        return $this->getBlockInstance('formBlock');
    }
}
