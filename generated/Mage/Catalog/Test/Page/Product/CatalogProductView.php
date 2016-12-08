<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Catalog\Test\Page\Product;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class CatalogProductView
 */
class CatalogProductView extends FrontendPage
{
    const MCA = 'catalog/product/view';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'viewBlock' => [
            'class' => 'Mage\Catalog\Test\Block\Product\View',
            'locator' => '.product-view',
            'strategy' => 'css selector',
            'render' => [
                'bundle' => [
                    'class' => 'Mage\Bundle\Test\Block\Catalog\Product\View',
                ],
                'configurable' => [
                    'class' => 'Mage\Catalog\Test\Block\Product\ConfigurableProductView',
                ],
                'grouped' => [
                    'class' => 'Mage\Catalog\Test\Block\Product\GroupedProductView',
                ],
                'downloadable' => [
                    'class' => 'Mage\Downloadable\Test\Block\Catalog\Product\View',
                ],
            ],
        ],
        'bundleViewBlock' => [
            'class' => 'Mage\Bundle\Test\Block\Catalog\Product\View',
            'locator' => '.product-view',
            'strategy' => 'css selector',
        ],
        'relatedProductBlock' => [
            'class' => 'Mage\Catalog\Test\Block\Product\ProductList\Related',
            'locator' => '.block-related',
            'strategy' => 'css selector',
        ],
        'upsellBlock' => [
            'class' => 'Mage\Catalog\Test\Block\Product\ProductList\Upsell',
            'locator' => '.box-up-sell',
            'strategy' => 'css selector',
        ],
        'widgetView' => [
            'class' => 'Mage\Widget\Test\Block\WidgetView',
            'locator' => '.widget',
            'strategy' => 'css selector',
        ],
        'groupedProductViewBlock' => [
            'class' => 'Mage\Catalog\Test\Block\Product\GroupedProductView',
            'locator' => '.product-view',
            'strategy' => 'css selector',
        ],
        'messagesBlock' => [
            'class' => 'Mage\Core\Test\Block\Messages',
            'locator' => '.messages',
            'strategy' => 'css selector',
        ],
        'titleBlock' => [
            'class' => 'Mage\Page\Test\Block\Html\Title',
            'locator' => '.page-head-alt h3',
            'strategy' => 'css selector',
        ],
        'paypalViewBlock' => [
            'class' => 'Mage\Paypal\Test\Block\Product\View',
            'locator' => '.product-view',
            'strategy' => 'css selector',
        ],
        'reviewsBlock' => [
            'class' => 'Mage\Review\Test\Block\Product\View\Review',
            'locator' => '#customer-reviews',
            'strategy' => 'css selector',
        ],
        'reviewViewBlock' => [
            'class' => 'Mage\Review\Test\Block\Product\View',
            'locator' => '.product-view',
            'strategy' => 'css selector',
        ],
        'weeeViewBlock' => [
            'class' => 'Mage\Weee\Test\Block\Product\View',
            'locator' => '.product-view',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Catalog\Test\Block\Product\View
     */
    public function getViewBlock()
    {
        return $this->getBlockInstance('viewBlock');
    }

    /**
     * @return \Mage\Bundle\Test\Block\Catalog\Product\View
     */
    public function getBundleViewBlock()
    {
        return $this->getBlockInstance('bundleViewBlock');
    }

    /**
     * @return \Mage\Catalog\Test\Block\Product\ProductList\Related
     */
    public function getRelatedProductBlock()
    {
        return $this->getBlockInstance('relatedProductBlock');
    }

    /**
     * @return \Mage\Catalog\Test\Block\Product\ProductList\Upsell
     */
    public function getUpsellBlock()
    {
        return $this->getBlockInstance('upsellBlock');
    }

    /**
     * @return \Mage\Widget\Test\Block\WidgetView
     */
    public function getWidgetView()
    {
        return $this->getBlockInstance('widgetView');
    }

    /**
     * @return \Mage\Catalog\Test\Block\Product\GroupedProductView
     */
    public function getGroupedProductViewBlock()
    {
        return $this->getBlockInstance('groupedProductViewBlock');
    }

    /**
     * @return \Mage\Core\Test\Block\Messages
     */
    public function getMessagesBlock()
    {
        return $this->getBlockInstance('messagesBlock');
    }

    /**
     * @return \Mage\Page\Test\Block\Html\Title
     */
    public function getTitleBlock()
    {
        return $this->getBlockInstance('titleBlock');
    }

    /**
     * @return \Mage\Paypal\Test\Block\Product\View
     */
    public function getPaypalViewBlock()
    {
        return $this->getBlockInstance('paypalViewBlock');
    }

    /**
     * @return \Mage\Review\Test\Block\Product\View\Review
     */
    public function getReviewsBlock()
    {
        return $this->getBlockInstance('reviewsBlock');
    }

    /**
     * @return \Mage\Review\Test\Block\Product\View
     */
    public function getReviewViewBlock()
    {
        return $this->getBlockInstance('reviewViewBlock');
    }

    /**
     * @return \Mage\Weee\Test\Block\Product\View
     */
    public function getWeeeViewBlock()
    {
        return $this->getBlockInstance('weeeViewBlock');
    }
}
