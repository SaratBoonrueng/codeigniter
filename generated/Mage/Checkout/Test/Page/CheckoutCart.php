<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Checkout\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class CheckoutCart
 */
class CheckoutCart extends FrontendPage
{
    const MCA = 'checkout/cart';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'cartBlock' => [
            'class' => 'Mage\Checkout\Test\Block\Cart',
            'locator' => '.col-main',
            'strategy' => 'css selector',
            'render' => [
                'grouped' => [
                    'class' => 'Mage\Checkout\Test\Block\GroupedProductCart',
                ],
            ],
        ],
        'shippingBlock' => [
            'class' => 'Mage\Checkout\Test\Block\Cart\Shipping',
            'locator' => '.shipping',
            'strategy' => 'css selector',
        ],
        'discountCodesBlock' => [
            'class' => 'Mage\Checkout\Test\Block\Cart\DiscountCodes',
            'locator' => '.discount',
            'strategy' => 'css selector',
        ],
        'totalsBlock' => [
            'class' => 'Mage\Checkout\Test\Block\Cart\Totals',
            'locator' => '#shopping-cart-totals-table',
            'strategy' => 'css selector',
        ],
        'messagesBlock' => [
            'class' => 'Mage\Core\Test\Block\Messages',
            'locator' => '.messages',
            'strategy' => 'css selector',
        ],
        'crosssellBlock' => [
            'class' => 'Mage\Catalog\Test\Block\Product\ProductList\Crosssell',
            'locator' => '.crosssell',
            'strategy' => 'css selector',
        ],
        'proceedToCheckoutBlock' => [
            'class' => 'Mage\Checkout\Test\Block\Onepage\Link',
            'locator' => 'ul.checkout-methods-items button.primary.checkout',
            'strategy' => 'css selector',
        ],
        'weeeCartBlock' => [
            'class' => 'Mage\Weee\Test\Block\Cart',
            'locator' => '.col-main',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Checkout\Test\Block\Cart
     */
    public function getCartBlock()
    {
        return $this->getBlockInstance('cartBlock');
    }

    /**
     * @return \Mage\Checkout\Test\Block\Cart\Shipping
     */
    public function getShippingBlock()
    {
        return $this->getBlockInstance('shippingBlock');
    }

    /**
     * @return \Mage\Checkout\Test\Block\Cart\DiscountCodes
     */
    public function getDiscountCodesBlock()
    {
        return $this->getBlockInstance('discountCodesBlock');
    }

    /**
     * @return \Mage\Checkout\Test\Block\Cart\Totals
     */
    public function getTotalsBlock()
    {
        return $this->getBlockInstance('totalsBlock');
    }

    /**
     * @return \Mage\Core\Test\Block\Messages
     */
    public function getMessagesBlock()
    {
        return $this->getBlockInstance('messagesBlock');
    }

    /**
     * @return \Mage\Catalog\Test\Block\Product\ProductList\Crosssell
     */
    public function getCrosssellBlock()
    {
        return $this->getBlockInstance('crosssellBlock');
    }

    /**
     * @return \Mage\Checkout\Test\Block\Onepage\Link
     */
    public function getProceedToCheckoutBlock()
    {
        return $this->getBlockInstance('proceedToCheckoutBlock');
    }

    /**
     * @return \Mage\Weee\Test\Block\Cart
     */
    public function getWeeeCartBlock()
    {
        return $this->getBlockInstance('weeeCartBlock');
    }
}
