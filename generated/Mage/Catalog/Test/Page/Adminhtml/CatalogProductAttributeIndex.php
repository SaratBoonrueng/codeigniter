<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Catalog\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class CatalogProductAttributeIndex
 */
class CatalogProductAttributeIndex extends BackendPage
{
    const MCA = 'catalog_product_attribute/index';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'pageActionsBlock' => [
            'class' => 'Mage\Adminhtml\Test\Block\GridPageActions',
            'locator' => '.content-header',
            'strategy' => 'css selector',
        ],
        'grid' => [
            'class' => 'Mage\Adminhtml\Test\Block\Catalog\Product\Attribute\Grid',
            'locator' => '#attributeGrid',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\GridPageActions
     */
    public function getPageActionsBlock()
    {
        return $this->getBlockInstance('pageActionsBlock');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Catalog\Product\Attribute\Grid
     */
    public function getGrid()
    {
        return $this->getBlockInstance('grid');
    }
}
