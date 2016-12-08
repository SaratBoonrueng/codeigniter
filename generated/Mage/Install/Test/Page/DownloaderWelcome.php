<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Install\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class DownloaderWelcome
 */
class DownloaderWelcome extends FrontendPage
{
    const MCA = 'downloader.php';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'welcomeBlock' => [
            'class' => 'Mage\Install\Test\Block\Welcome',
            'locator' => '.col-main',
            'strategy' => 'css selector',
        ],
        'continueDownloadBlock' => [
            'class' => 'Mage\Install\Test\Block\ContinueDownloadBlock',
            'locator' => '.button-set',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Install\Test\Block\Welcome
     */
    public function getWelcomeBlock()
    {
        return $this->getBlockInstance('welcomeBlock');
    }

    /**
     * @return \Mage\Install\Test\Block\ContinueDownloadBlock
     */
    public function getContinueDownloadBlock()
    {
        return $this->getBlockInstance('continueDownloadBlock');
    }
}
