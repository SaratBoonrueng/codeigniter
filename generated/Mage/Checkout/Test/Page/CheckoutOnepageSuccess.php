<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Checkout\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class CheckoutOnepageSuccess
 */
class CheckoutOnepageSuccess extends FrontendPage
{
    const MCA = 'checkout/onepage/success';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'successBlock' => [
            'class' => 'Mage\Checkout\Test\Block\Onepage\Success',
            'locator' => '.checkout-onepage-success .main-container',
            'strategy' => 'css selector',
        ],
        'titleBlock' => [
            'class' => 'Mage\Theme\Test\Block\Title',
            'locator' => '.checkout-onepage-success .main-container .page-title',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Checkout\Test\Block\Onepage\Success
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
