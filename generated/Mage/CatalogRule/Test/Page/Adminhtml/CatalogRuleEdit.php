<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\CatalogRule\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class CatalogRuleEdit
 */
class CatalogRuleEdit extends BackendPage
{
    const MCA = 'promo_catalog/new';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'formPageActions' => [
            'class' => 'Mage\Adminhtml\Test\Block\CatalogRule\FormPageActions',
            'locator' => '.form-buttons',
            'strategy' => 'css selector',
        ],
        'editForm' => [
            'class' => 'Mage\Adminhtml\Test\Block\CatalogRule\Promo\Catalog\Edit\Form',
            'locator' => '[id="page:main-container"]',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\CatalogRule\FormPageActions
     */
    public function getFormPageActions()
    {
        return $this->getBlockInstance('formPageActions');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\CatalogRule\Promo\Catalog\Edit\Form
     */
    public function getEditForm()
    {
        return $this->getBlockInstance('editForm');
    }
}
