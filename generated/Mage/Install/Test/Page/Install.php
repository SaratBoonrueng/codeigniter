<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Install\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class Install
 */
class Install extends FrontendPage
{
    const MCA = 'install/';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'licenseBlock' => [
            'class' => 'Mage\Install\Test\Block\License',
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
     * @return \Mage\Install\Test\Block\License
     */
    public function getLicenseBlock()
    {
        return $this->getBlockInstance('licenseBlock');
    }

    /**
     * @return \Mage\Install\Test\Block\ContinueBlock
     */
    public function getContinueBlock()
    {
        return $this->getBlockInstance('continueBlock');
    }
}
