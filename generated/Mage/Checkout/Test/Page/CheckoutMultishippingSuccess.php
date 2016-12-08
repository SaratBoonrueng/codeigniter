<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Checkout\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class CheckoutMultishippingSuccess
 */
class CheckoutMultishippingSuccess extends FrontendPage
{
    const MCA = 'checkout/multishipping/success';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'successBlock' => [
            'class' => 'Mage\Checkout\Test\Block\Multishipping\Success',
            'locator' => '.multiple-checkout',
            'strategy' => 'css selector',
        ],
        'titleBlock' => [
            'class' => 'Mage\Theme\Test\Block\Title',
            'locator' => '.page-title',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Checkout\Test\Block\Multishipping\Success
     */
    public function getSuccessBlock()
    {
        return $this->getBlockInstance('successBlock');
    }

    /**
     * @return \Mage\Theme\Test\Block\Title
     */
    public function getTitleBlock()
    {
        return $this->getBlockInstance('titleBlock');
    }
}
