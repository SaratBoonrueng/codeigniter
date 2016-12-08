<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Catalog\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class CatalogCategoryIndex
 */
class CatalogCategoryIndex extends BackendPage
{
    const MCA = 'catalog_category/index';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'treeCategories' => [
            'class' => 'Mage\Adminhtml\Test\Block\Catalog\Category\Tree',
            'locator' => '[id="page:left"]',
            'strategy' => 'css selector',
        ],
        'messagesBlock' => [
            'class' => 'Mage\Core\Test\Block\Messages',
            'locator' => '#messages',
            'strategy' => 'css selector',
        ],
        'formPageActions' => [
            'class' => 'Mage\Adminhtml\Test\Block\FormPageActions',
            'locator' => '#category-edit-container .content-header',
            'strategy' => 'css selector',
        ],
        'categoryForm' => [
            'class' => 'Mage\Adminhtml\Test\Block\Catalog\Category\Edit\CategoryForm',
            'locator' => '#category-edit-container',
            'strategy' => 'css selector',
        ],
        'contentBlock' => [
            'class' => 'Mage\Adminhtml\Test\Block\Catalog\Category\Content',
            'locator' => '#anchor-content',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\Catalog\Category\Tree
     */
    public function getTreeCategories()
    {
        return $this->getBlockInstance('treeCategories');
    }

    /**
     * @return \Mage\Core\Test\Block\Messages
     */
    public function getMessagesBlock()
    {
        return $this->getBlockInstance('messagesBlock');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\FormPageActions
     */
    public function getFormPageActions()
    {
        return $this->getBlockInstance('formPageActions');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Catalog\Category\Edit\CategoryForm
     */
    public function getCategoryForm()
    {
        return $this->getBlockInstance('categoryForm');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Catalog\Category\Content
     */
    public function getContentBlock()
    {
        return $this->getBlockInstance('contentBlock');
    }
}
