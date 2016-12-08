<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Catalog\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class CatalogProductSetEdit
 */
class CatalogProductSetEdit extends BackendPage
{
    const MCA = 'catalog_product_set/edit';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'pageActions' => [
            'class' => 'Mage\Adminhtml\Test\Block\Catalog\Product\FormPageActions',
            'locator' => '.content-header',
            'strategy' => 'css selector',
        ],
        'attributeSetEditBlock' => [
            'class' => 'Mage\Adminhtml\Test\Block\Catalog\Product\Attribute\Set\Main',
            'locator' => '[id="page:main-container"]>table',
            'strategy' => 'css selector',
        ],
        'attributeSetEditForm' => [
            'class' => 'Mage\Adminhtml\Test\Block\Catalog\Product\Attribute\Set\Main\EditForm',
            'locator' => '#set_name',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\Catalog\Product\FormPageActions
     */
    public function getPageActions()
    {
        return $this->getBlockInstance('pageActions');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Catalog\Product\Attribute\Set\Main
     */
    public function getAttributeSetEditBlock()
    {
        return $this->getBlockInstance('attributeSetEditBlock');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Catalog\Product\Attribute\Set\Main\EditForm
     */
    public function getAttributeSetEditForm()
    {
        return $this->getBlockInstance('attributeSetEditForm');
    }
}
