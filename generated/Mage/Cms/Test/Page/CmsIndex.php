<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Cms\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class CmsIndex
 */
class CmsIndex extends FrontendPage
{
    const MCA = 'cms/index';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'cartSidebarBlock' => [
            'class' => 'Mage\Checkout\Test\Block\Cart\Sidebar',
            'locator' => '#header-cart',
            'strategy' => 'css selector',
        ],
        'topmenu' => [
            'class' => 'Mage\Page\Test\Block\Html\Topmenu',
            'locator' => '#nav',
            'strategy' => 'css selector',
        ],
        'searchBlock' => [
            'class' => 'Mage\Catalog\Test\Block\Search',
            'locator' => '#search_mini_form',
            'strategy' => 'css selector',
        ],
        'linksBlock' => [
            'class' => 'Mage\Theme\Test\Block\Links',
            'locator' => '#header-account .links',
            'strategy' => 'css selector',
        ],
        'topLinksBlock' => [
            'class' => 'Mage\Theme\Test\Block\TopLinks',
            'locator' => '.account-cart-wrapper',
            'strategy' => 'css selector',
        ],
        'footerBlock' => [
            'class' => 'Mage\Page\Test\Block\Html\Footer',
            'locator' => '.footer',
            'strategy' => 'css selector',
        ],
        'headerBlock' => [
            'class' => 'Mage\Page\Test\Block\Html\Header',
            'locator' => '.header-language-background',
            'strategy' => 'css selector',
        ],
        'currencyBlock' => [
            'class' => 'Mage\Directory\Test\Block\Currency\Switcher',
            'locator' => '.currency-switcher',
            'strategy' => 'css selector',
        ],
        'cmsPageBlock' => [
            'class' => 'Mage\Cms\Test\Block\Page',
            'locator' => '.main-container',
            'strategy' => 'css selector',
        ],
        'compareBlock' => [
            'class' => 'Mage\Catalog\Test\Block\Product\ProductList\Compare',
            'locator' => '.block-compare',
            'strategy' => 'css selector',
        ],
        'widgetView' => [
            'class' => 'Mage\Widget\Test\Block\WidgetView',
            'locator' => '.widget',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Checkout\Test\Block\Cart\Sidebar
     */
    public function getCartSidebarBlock()
    {
        return $this->getBlockInstance('cartSidebarBlock');
    }

    /**
     * @return \Mage\Page\Test\Block\Html\Topmenu
     */
    public function getTopmenu()
    {
        return $this->getBlockInstance('topmenu');
    }

    /**
     * @return \Mage\Catalog\Test\Block\Search
     */
    public function getSearchBlock()
    {
        return $this->getBlockInstance('searchBlock');
    }

    /**
     * @return \Mage\Theme\Test\Block\Links
     */
    public function getLinksBlock()
    {
        return $this->getBlockInstance('linksBlock');
    }

    /**
     * @return \Mage\Theme\Test\Block\TopLinks
     */
    public function getTopLinksBlock()
    {
        return $this->getBlockInstance('topLinksBlock');
    }

    /**
     * @return \Mage\Page\Test\Block\Html\Footer
     */
    public function getFooterBlock()
    {
        return $this->getBlockInstance('footerBlock');
    }

    /**
     * @return \Mage\Page\Test\Block\Html\Header
     */
    public function getHeaderBlock()
    {
        return $this->getBlockInstance('headerBlock');
    }

    /**
     * @return \Mage\Directory\Test\Block\Currency\Switcher
     */
    public function getCurrencyBlock()
    {
        return $this->getBlockInstance('currencyBlock');
    }

    /**
     * @return \Mage\Cms\Test\Block\Page
     */
    public function getCmsPageBlock()
    {
        return $this->getBlockInstance('cmsPageBlock');
    }

    /**
     * @return \Mage\Catalog\Test\Block\Product\ProductList\Compare
     */
    public function getCompareBlock()
    {
        return $this->getBlockInstance('compareBlock');
    }

    /**
     * @return \Mage\Widget\Test\Block\WidgetView
     */
    public function getWidgetView()
    {
        return $this->getBlockInstance('widgetView');
    }
}
