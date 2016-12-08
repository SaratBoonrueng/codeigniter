<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Catalog\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class CatalogProductAttributeEdit
 */
class CatalogProductAttributeEdit extends BackendPage
{
    const MCA = 'catalog_product_attribute/edit';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'attributeForm' => [
            'class' => 'Mage\Adminhtml\Test\Block\Catalog\Product\Attribute\Edit\AttributeForm',
            'locator' => '[id="page:main-container"]',
            'strategy' => 'css selector',
        ],
        'pageActions' => [
            'class' => 'Mage\Adminhtml\Test\Block\FormPageActions',
            'locator' => '.content-header',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\Catalog\Product\Attribute\Edit\AttributeForm
     */
    public function getAttributeForm()
    {
        return $this->getBlockInstance('attributeForm');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\FormPageActions
     */
    public function getPageActions()
    {
        return $this->getBlockInstance('pageActions');
    }
}
