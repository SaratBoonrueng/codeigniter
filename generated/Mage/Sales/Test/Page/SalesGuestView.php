<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Sales\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class SalesGuestView
 */
class SalesGuestView extends FrontendPage
{
    const MCA = 'sales/guest/view';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'actionsToolbar' => [
            'class' => 'Mage\Sales\Test\Block\Order\View\ActionsToolbar',
            'locator' => '.title-buttons',
            'strategy' => 'css selector',
        ],
        'viewBlock' => [
            'class' => 'Mage\Sales\Test\Block\Order\View',
            'locator' => '.col-main',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Sales\Test\Block\Order\View\ActionsToolbar
     */
    public function getActionsToolbar()
    {
        return $this->getBlockInstance('actionsToolbar');
    }

    /**
     * @return \Mage\Sales\Test\Block\Order\View
     */
    public function getViewBlock()
    {
        return $this->getBlockInstance('viewBlock');
    }
}
