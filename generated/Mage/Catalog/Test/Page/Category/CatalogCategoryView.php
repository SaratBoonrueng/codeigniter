<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Catalog\Test\Page\Category;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class CatalogCategoryView
 */
class CatalogCategoryView extends FrontendPage
{
    const MCA = 'catalog/category/view';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'listProductBlock' => [
            'class' => 'Mage\Catalog\Test\Block\Product\ListProduct',
            'locator' => '.category-products',
            'strategy' => 'css selector',
        ],
        'bottomToolbar' => [
            'class' => 'Mage\Catalog\Test\Block\Product\ProductList\BottomToolbar',
            'locator' => '.toolbar-bottom',
            'strategy' => 'css selector',
        ],
        'titleBlock' => [
            'class' => 'Mage\Page\Test\Block\Html\Title',
            'locator' => '.page-title.category-title',
            'strategy' => 'css selector',
        ],
        'topToolbar' => [
            'class' => 'Mage\Catalog\Test\Block\Product\ProductList\TopToolbar',
            'locator' => './/*[contains(@class,"toolbar")][2]',
            'strategy' => 'xpath',
        ],
        'viewBlock' => [
            'class' => 'Mage\Catalog\Test\Block\Category\View',
            'locator' => '.col-main',
            'strategy' => 'css selector',
        ],
        'layeredNavigationBlock' => [
            'class' => 'Mage\Catalog\Test\Block\Layer\View',
            'locator' => '.block-layered-nav',
            'strategy' => 'css selector',
        ],
        'widgetView' => [
            'class' => 'Mage\Widget\Test\Block\WidgetView',
            'locator' => '.widget',
            'strategy' => 'css selector',
        ],
        'weeeListProductBlock' => [
            'class' => 'Mage\Weee\Test\Block\Product\ListProduct',
            'locator' => '.category-products',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Catalog\Test\Block\Product\ListProduct
     */
    public function getListProductBlock()
    {
        return $this->getBlockInstance('listProductBlock');
    }

    /**
     * @return \Mage\Catalog\Test\Block\Product\ProductList\BottomToolbar
     */
    public function getBottomToolbar()
    {
        return $this->getBlockInstance('bottomToolbar');
    }

    /**
     * @return \Mage\Page\Test\Block\Html\Title
     */
    public function getTitleBlock()
    {
        return $this->getBlockInstance('titleBlock');
    }

    /**
     * @return \Mage\Catalog\Test\Block\Product\ProductList\TopToolbar
     */
    public function getTopToolbar()
    {
        return $this->getBlockInstance('topToolbar');
    }

    /**
     * @return \Mage\Catalog\Test\Block\Category\View
     */
    public function getViewBlock()
    {
        return $this->getBlockInstance('viewBlock');
    }

    /**
     * @return \Mage\Catalog\Test\Block\Layer\View
     */
    public function getLayeredNavigationBlock()
    {
        return $this->getBlockInstance('layeredNavigationBlock');
    }

    /**
     * @return \Mage\Widget\Test\Block\WidgetView
     */
    public function getWidgetView()
    {
        return $this->getBlockInstance('widgetView');
    }

    /**
     * @return \Mage\Weee\Test\Block\Product\ListProduct
     */
    public function getWeeeListProductBlock()
    {
        return $this->getBlockInstance('weeeListProductBlock');
    }
}
