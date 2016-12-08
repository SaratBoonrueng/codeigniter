<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Install\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class InstallWizardAdministrator
 */
class InstallWizardAdministrator extends FrontendPage
{
    const MCA = 'install/wizard/locale/';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'personalInformationForm' => [
            'class' => 'Mage\Install\Test\Block\PersonalInformation',
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
     * @return \Mage\Install\Test\Block\PersonalInformation
     */
    public function getPersonalInformationForm()
    {
        return $this->getBlockInstance('personalInformationForm');
    }

    /**
     * @return \Mage\Install\Test\Block\ContinueBlock
     */
    public function getContinueBlock()
    {
        return $this->getBlockInstance('continueBlock');
    }
}
