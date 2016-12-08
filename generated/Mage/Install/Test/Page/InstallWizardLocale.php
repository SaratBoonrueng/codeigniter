<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Install\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class InstallWizardLocale
 */
class InstallWizardLocale extends FrontendPage
{
    const MCA = 'install/wizard/locale/';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'localizationForm' => [
            'class' => 'Mage\Install\Test\Block\Localization',
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
     * @return \Mage\Install\Test\Block\Localization
     */
    public function getLocalizationForm()
    {
        return $this->getBlockInstance('localizationForm');
    }

    /**
     * @return \Mage\Install\Test\Block\ContinueBlock
     */
    public function getContinueBlock()
    {
        return $this->getBlockInstance('continueBlock');
    }
}
