<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Checkout\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class CheckoutOnepage
 */
class CheckoutOnepage extends FrontendPage
{
    const MCA = 'checkout/onepage';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'loginBlock' => [
            'class' => 'Mage\Checkout\Test\Block\Onepage\Login',
            'locator' => '#checkout-step-login',
            'strategy' => 'css selector',
        ],
        'billingBlock' => [
            'class' => 'Mage\Checkout\Test\Block\Onepage\Billing',
            'locator' => '#checkout-step-billing',
            'strategy' => 'css selector',
        ],
        'shippingBlock' => [
            'class' => 'Mage\Checkout\Test\Block\Onepage\Shipping',
            'locator' => '#checkout-step-shipping',
            'strategy' => 'css selector',
        ],
        'shippingMethodBlock' => [
            'class' => 'Mage\Checkout\Test\Block\Onepage\Shipping\Method',
            'locator' => '#checkout-step-shipping_method',
            'strategy' => 'css selector',
        ],
        'paymentMethodsBlock' => [
            'class' => 'Mage\Checkout\Test\Block\Onepage\Payment\Methods',
            'locator' => '#checkout-step-payment',
            'strategy' => 'css selector',
        ],
        'reviewBlock' => [
            'class' => 'Mage\Checkout\Test\Block\Onepage\Review',
            'locator' => '#checkout-step-review',
            'strategy' => 'css selector',
            'render' => [
                'downloadable' => [
                    'class' => 'Mage\Downloadable\Test\Block\Checkout\Onepage\Review',
                ],
            ],
        ],
        'payflowAdvancedForm' => [
            'class' => 'Mage\Paypal\Test\Block\Payflow\Advanced\Form',
            'locator' => '#payflow-advanced-iframe',
            'strategy' => 'css selector',
        ],
        'payflowLinkForm' => [
            'class' => 'Mage\Paypal\Test\Block\Payflow\Link\Form',
            'locator' => '#payflow-link-iframe',
            'strategy' => 'css selector',
        ],
        'hostedProForm' => [
            'class' => 'Mage\Paypal\Test\Block\Hosted\Pro\Form',
            'locator' => '#hss-iframe',
            'strategy' => 'css selector',
        ],
        'authorizenetDirectpostForm' => [
            'class' => 'Mage\Authorizenet\Test\Block\Directpost\Form',
            'locator' => '#co-directpost-form',
            'strategy' => 'css selector',
        ],
        'giftMessagesBlock' => [
            'class' => 'Mage\GiftMessage\Test\Block\Message\Inline',
            'locator' => '#onepage-checkout-shipping-method-additional-load',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Checkout\Test\Block\Onepage\Login
     */
    public function getLoginBlock()
    {
        return $this->getBlockInstance('loginBlock');
    }

    /**
     * @return \Mage\Checkout\Test\Block\Onepage\Billing
     */
    public function getBillingBlock()
    {
        return $this->getBlockInstance('billingBlock');
    }

    /**
     * @return \Mage\Checkout\Test\Block\Onepage\Shipping
     */
    public function getShippingBlock()
    {
        return $this->getBlockInstance('shippingBlock');
    }

    /**
     * @return \Mage\Checkout\Test\Block\Onepage\Shipping\Method
     */
    public function getShippingMethodBlock()
    {
        return $this->getBlockInstance('shippingMethodBlock');
    }

    /**
     * @return \Mage\Checkout\Test\Block\Onepage\Payment\Methods
     */
    public function getPaymentMethodsBlock()
    {
        return $this->getBlockInstance('paymentMethodsBlock');
    }

    /**
     * @return \Mage\Checkout\Test\Block\Onepage\Review
     */
    public function getReviewBlock()
    {
        return $this->getBlockInstance('reviewBlock');
    }

    /**
     * @return \Mage\Paypal\Test\Block\Payflow\Advanced\Form
     */
    public function getPayflowAdvancedForm()
    {
        return $this->getBlockInstance('payflowAdvancedForm');
    }

    /**
     * @return \Mage\Paypal\Test\Block\Payflow\Link\Form
     */
    public function getPayflowLinkForm()
    {
        return $this->getBlockInstance('payflowLinkForm');
    }

    /**
     * @return \Mage\Paypal\Test\Block\Hosted\Pro\Form
     */
    public function getHostedProForm()
    {
        return $this->getBlockInstance('hostedProForm');
    }

    /**
     * @return \Mage\Authorizenet\Test\Block\Directpost\Form
     */
    public function getAuthorizenetDirectpostForm()
    {
        return $this->getBlockInstance('authorizenetDirectpostForm');
    }

    /**
     * @return \Mage\GiftMessage\Test\Block\Message\Inline
     */
    public function getGiftMessagesBlock()
    {
        return $this->getBlockInstance('giftMessagesBlock');
    }
}
