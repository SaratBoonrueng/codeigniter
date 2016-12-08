<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Newsletter\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class SubscriberIndex
 */
class SubscriberIndex extends BackendPage
{
    const MCA = 'newsletter_subscriber/index';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'subscriberGrid' => [
            'class' => 'Mage\Adminhtml\Test\Block\Newsletter\Grid',
            'locator' => '#subscriberGrid',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\Newsletter\Grid
     */
    public function getSubscriberGrid()
    {
        return $this->getBlockInstance('subscriberGrid');
    }
}
