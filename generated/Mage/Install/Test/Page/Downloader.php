<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Install\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class Downloader
 */
class Downloader extends FrontendPage
{
    const MCA = 'downloader/';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'continueDownloadBlock' => [
            'class' => 'Mage\Install\Test\Block\ContinueDownloadBlock',
            'locator' => '#main',
            'strategy' => 'css selector',
        ],
        'messagesBlock' => [
            'class' => 'Mage\Core\Test\Block\Messages',
            'locator' => '#connect_iframe_success .msgs',
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

    /**
     * @return \Mage\Core\Test\Block\Messages
     */
    public function getMessagesBlock()
    {
        return $this->getBlockInstance('messagesBlock');
    }
}
