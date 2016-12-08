<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Install\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class DownloaderDeployEnd
 */
class DownloaderDeployEnd extends FrontendPage
{
    const MCA = '?action=download';

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
        'continueDownloadBlock' => [
            'class' => 'Mage\Install\Test\Block\ContinueDownloadBlock',
            'locator' => '.col-main > .button-set',
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

    /**
     * @return \Mage\Install\Test\Block\ContinueDownloadBlock
     */
    public function getContinueDownloadBlock()
    {
        return $this->getBlockInstance('continueDownloadBlock');
    }
}
