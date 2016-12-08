<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Cms\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class CmsBlockEdit
 */
class CmsBlockEdit extends BackendPage
{
    const MCA = 'cms_block/edit';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'blockForm' => [
            'class' => 'Mage\Adminhtml\Test\Block\Cms\Block\Edit\BlockForm',
            'locator' => '[id="page:main-container"]',
            'strategy' => 'css selector',
        ],
        'pageMainActions' => [
            'class' => 'Mage\Adminhtml\Test\Block\Cms\Block\Edit\FormPageActions',
            'locator' => '.form-buttons',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\Cms\Block\Edit\BlockForm
     */
    public function getBlockForm()
    {
        return $this->getBlockInstance('blockForm');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Cms\Block\Edit\FormPageActions
     */
    public function getPageMainActions()
    {
        return $this->getBlockInstance('pageMainActions');
    }
}
