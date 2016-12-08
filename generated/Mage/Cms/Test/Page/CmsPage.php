<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Cms\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class CmsPage
 */
class CmsPage extends FrontendPage
{
    const MCA = 'cms/page';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'cmsPageContentBlock' => [
            'class' => 'Mage\Cms\Test\Block\Page',
            'locator' => '.main-container',
            'strategy' => 'css selector',
        ],
        'templateBlock' => [
            'class' => 'Mage\Adminhtml\Test\Block\Template',
            'locator' => '#loading_mask_loader',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Cms\Test\Block\Page
     */
    public function getCmsPageContentBlock()
    {
        return $this->getBlockInstance('cmsPageContentBlock');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Template
     */
    public function getTemplateBlock()
    {
        return $this->getBlockInstance('templateBlock');
    }
}
