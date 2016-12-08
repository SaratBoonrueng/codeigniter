<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\CatalogSearch\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class CatalogSearchEdit
 */
class CatalogSearchEdit extends BackendPage
{
    const MCA = 'catalog_search/edit';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'form' => [
            'class' => 'Mage\Adminhtml\Test\Block\CatalogSearch\Edit\SearchTermForm',
            'locator' => '#edit_form',
            'strategy' => 'css selector',
        ],
        'formPageActions' => [
            'class' => 'Mage\Adminhtml\Test\Block\FormPageActions',
            'locator' => '.form-buttons',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\CatalogSearch\Edit\SearchTermForm
     */
    public function getForm()
    {
        return $this->getBlockInstance('form');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\FormPageActions
     */
    public function getFormPageActions()
    {
        return $this->getBlockInstance('formPageActions');
    }
}
