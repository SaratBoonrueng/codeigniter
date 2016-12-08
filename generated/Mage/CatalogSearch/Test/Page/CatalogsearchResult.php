<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\CatalogSearch\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class CatalogsearchResult
 */
class CatalogsearchResult extends FrontendPage
{
    const MCA = 'catalogsearch/result';

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
        'layeredNavigationBlock' => [
            'class' => 'Mage\Catalog\Test\Block\Layer\View',
            'locator' => '.block-layered-nav',
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
     * @return \Mage\Catalog\Test\Block\Layer\View
     */
    public function getLayeredNavigationBlock()
    {
        return $this->getBlockInstance('layeredNavigationBlock');
    }
}
