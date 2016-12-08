<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Rating\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class RatingIndex
 */
class RatingIndex extends BackendPage
{
    const MCA = 'rating';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'ratingGrid' => [
            'class' => 'Mage\Adminhtml\Test\Block\Rating\Grid',
            'locator' => '[id="page:main-container"]',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\Rating\Grid
     */
    public function getRatingGrid()
    {
        return $this->getBlockInstance('ratingGrid');
    }
}
