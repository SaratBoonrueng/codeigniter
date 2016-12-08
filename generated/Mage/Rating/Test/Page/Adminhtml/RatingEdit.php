<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Rating\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class RatingEdit
 */
class RatingEdit extends BackendPage
{
    const MCA = 'rating/edit';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'pageActions' => [
            'class' => 'Mage\Adminhtml\Test\Block\FormPageActions',
            'locator' => '.content-header',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\FormPageActions
     */
    public function getPageActions()
    {
        return $this->getBlockInstance('pageActions');
    }
}
