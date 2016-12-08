<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\CatalogSearch\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class CatalogsearchAdvanced
 */
class CatalogsearchAdvanced extends FrontendPage
{
    const MCA = 'catalogsearch/advanced';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'form' => [
            'class' => 'Mage\CatalogSearch\Test\Block\Advanced\Form',
            'locator' => '.advanced-search',
            'strategy' => 'css selector',
        ],
        'widgetView' => [
            'class' => 'Mage\Widget\Test\Block\WidgetView',
            'locator' => '.widget',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\CatalogSearch\Test\Block\Advanced\Form
     */
    public function getForm()
    {
        return $this->getBlockInstance('form');
    }

    /**
     * @return \Mage\Widget\Test\Block\WidgetView
     */
    public function getWidgetView()
    {
        return $this->getBlockInstance('widgetView');
    }
}
