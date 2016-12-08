<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Sitemap\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class SitemapNew
 */
class SitemapNew extends BackendPage
{
    const MCA = 'sitemap/new';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'sitemapForm' => [
            'class' => 'Mage\Adminhtml\Test\Block\Sitemap\Edit\Form',
            'locator' => '#add_sitemap_form',
            'strategy' => 'css selector',
        ],
        'formPageActions' => [
            'class' => 'Mage\Adminhtml\Test\Block\Sitemap\Edit\FormPageActions',
            'locator' => '.form-buttons',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\Sitemap\Edit\Form
     */
    public function getSitemapForm()
    {
        return $this->getBlockInstance('sitemapForm');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Sitemap\Edit\FormPageActions
     */
    public function getFormPageActions()
    {
        return $this->getBlockInstance('formPageActions');
    }
}
