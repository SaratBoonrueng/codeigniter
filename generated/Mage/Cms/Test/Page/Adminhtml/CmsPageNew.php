<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Cms\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class CmsPageNew
 */
class CmsPageNew extends BackendPage
{
    const MCA = 'cms_page/new';

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
            'class' => 'Mage\Adminhtml\Test\Block\FormPageActions',
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
     * @return \Mage\Adminhtml\Test\Block\FormPageActions
     */
    public function getPageMainActions()
    {
        return $this->getBlockInstance('pageMainActions');
    }
}
