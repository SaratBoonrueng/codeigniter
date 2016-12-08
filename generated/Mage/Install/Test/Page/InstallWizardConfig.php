<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Install\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class InstallWizardConfig
 */
class InstallWizardConfig extends FrontendPage
{
    const MCA = 'install/wizard/config/';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'configurationForm' => [
            'class' => 'Mage\Install\Test\Block\Configuration',
            'locator' => 'body',
            'strategy' => 'css selector',
        ],
        'continueBlock' => [
            'class' => 'Mage\Install\Test\Block\ContinueBlock',
            'locator' => '.button-set',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Install\Test\Block\Configuration
     */
    public function getConfigurationForm()
    {
        return $this->getBlockInstance('configurationForm');
    }

    /**
     * @return \Mage\Install\Test\Block\ContinueBlock
     */
    public function getContinueBlock()
    {
        return $this->getBlockInstance('continueBlock');
    }
}
