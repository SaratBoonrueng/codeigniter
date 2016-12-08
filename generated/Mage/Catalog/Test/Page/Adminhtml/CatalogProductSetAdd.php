<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Catalog\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class CatalogProductSetAdd
 */
class CatalogProductSetAdd extends BackendPage
{
    const MCA = 'catalog_product_set/add';

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
        'attributeSetForm' => [
            'class' => 'Mage\Adminhtml\Test\Block\Catalog\Product\Attribute\Set\Main\AttributeSetForm',
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
     * @return \Mage\Adminhtml\Test\Block\Catalog\Product\Attribute\Set\Main\AttributeSetForm
     */
    public function getAttributeSetForm()
    {
        return $this->getBlockInstance('attributeSetForm');
    }
}
