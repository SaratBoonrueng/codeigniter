<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Install\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class InstallWizardEnd
 */
class InstallWizardEnd extends FrontendPage
{
    const MCA = 'install/wizard/end/';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'mainBlock' => [
            'class' => 'Mage\Install\Test\Block\Main',
            'locator' => 'body',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Install\Test\Block\Main
     */
    public function getMainBlock()
    {
        return $this->getBlockInstance('mainBlock');
    }
}
