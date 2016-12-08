<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Catalog\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class CatalogProductEdit
 */
class CatalogProductEdit extends BackendPage
{
    const MCA = 'catalog_product/edit';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'productForm' => [
            'class' => 'Mage\Adminhtml\Test\Block\Catalog\Product\ProductForm',
            'locator' => '[id="page:main-container"]',
            'strategy' => 'css selector',
        ],
        'formPageActions' => [
            'class' => 'Mage\Adminhtml\Test\Block\Catalog\Product\FormPageActions',
            'locator' => '.content-header',
            'strategy' => 'css selector',
        ],
        'messagesBlock' => [
            'class' => 'Mage\Core\Test\Block\Messages',
            'locator' => '#messages .messages',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\Catalog\Product\ProductForm
     */
    public function getProductForm()
    {
        return $this->getBlockInstance('productForm');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Catalog\Product\FormPageActions
     */
    public function getFormPageActions()
    {
        return $this->getBlockInstance('formPageActions');
    }

    /**
     * @return \Mage\Core\Test\Block\Messages
     */
    public function getMessagesBlock()
    {
        return $this->getBlockInstance('messagesBlock');
    }
}
