<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Install\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class DownloaderDeploy
 */
class DownloaderDeploy extends FrontendPage
{
    const MCA = '?action=deploy';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'continueDownloadBlock' => [
            'class' => 'Mage\Install\Test\Block\ContinueDownloadBlock',
            'locator' => '.col-main > .button-set',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Install\Test\Block\ContinueDownloadBlock
     */
    public function getContinueDownloadBlock()
    {
        return $this->getBlockInstance('continueDownloadBlock');
    }
}
