<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Cms\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class CmsPageEdit
 */
class CmsPageEdit extends BackendPage
{
    const MCA = 'cms_page/edit';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'pageForm' => [
            'class' => 'Mage\Adminhtml\Test\Block\Cms\Page\Edit\PageForm',
            'locator' => '[id="page:main-container"]',
            'strategy' => 'css selector',
        ],
        'pageMainActions' => [
            'class' => 'Mage\Adminhtml\Test\Block\Cms\Page\Edit\FormPageActions',
            'locator' => '.form-buttons',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\Cms\Page\Edit\PageForm
     */
    public function getPageForm()
    {
        return $this->getBlockInstance('pageForm');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Cms\Page\Edit\FormPageActions
     */
    public function getPageMainActions()
    {
        return $this->getBlockInstance('pageMainActions');
    }
}
