<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Adminhtml\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class Dashboard
 */
class Dashboard extends BackendPage
{
    const MCA = 'dashboard';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'adminPanelHeader' => [
            'class' => 'Mage\Adminhtml\Test\Block\Page\Header',
            'locator' => '.header',
            'strategy' => 'css selector',
        ],
        'mainBlock' => [
            'class' => 'Mage\Adminhtml\Test\Block\Page\Main',
            'locator' => '.wrapper',
            'strategy' => 'css selector',
        ],
        'footer' => [
            'class' => 'Mage\Adminhtml\Test\Block\Page\Footer',
            'locator' => '.footer',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\Page\Header
     */
    public function getAdminPanelHeader()
    {
        return $this->getBlockInstance('adminPanelHeader');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Page\Main
     */
    public function getMainBlock()
    {
        return $this->getBlockInstance('mainBlock');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Page\Footer
     */
    public function getFooter()
    {
        return $this->getBlockInstance('footer');
    }
}
