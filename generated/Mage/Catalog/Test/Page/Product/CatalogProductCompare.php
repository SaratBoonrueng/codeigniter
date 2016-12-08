<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Catalog\Test\Page\Product;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class CatalogProductCompare
 */
class CatalogProductCompare extends FrontendPage
{
    const MCA = 'catalog/product_compare/index';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'compareProductsBlock' => [
            'class' => 'Mage\Catalog\Test\Block\Product\Compare\ListCompare',
            'locator' => '#product_comparison',
            'strategy' => 'css selector',
        ],
        'messagesBlock' => [
            'class' => 'Mage\Core\Test\Block\Messages',
            'locator' => '#messages .messages',
            'strategy' => 'css selector',
        ],
        'widgetView' => [
            'class' => 'Mage\Widget\Test\Block\WidgetView',
            'locator' => '.widget',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Catalog\Test\Block\Product\Compare\ListCompare
     */
    public function getCompareProductsBlock()
    {
        return $this->getBlockInstance('compareProductsBlock');
    }

    /**
     * @return \Mage\Core\Test\Block\Messages
     */
    public function getMessagesBlock()
    {
        return $this->getBlockInstance('messagesBlock');
    }

    /**
     * @return \Mage\Widget\Test\Block\WidgetView
     */
    public function getWidgetView()
    {
        return $this->getBlockInstance('widgetView');
    }
}
