<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Sales\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class SalesGuestForm
 */
class SalesGuestForm extends FrontendPage
{
    const MCA = 'sales/guest/form';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'searchForm' => [
            'class' => 'Mage\Sales\Test\Block\Widget\Guest\Form',
            'locator' => '#oar_widget_orders_and_returns_form',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Sales\Test\Block\Widget\Guest\Form
     */
    public function getSearchForm()
    {
        return $this->getBlockInstance('searchForm');
    }
}
