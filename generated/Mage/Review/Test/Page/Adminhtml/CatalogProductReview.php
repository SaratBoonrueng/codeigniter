<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Review\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class CatalogProductReview
 */
class CatalogProductReview extends BackendPage
{
    const MCA = 'catalog_product_review';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'reviewGrid' => [
            'class' => 'Mage\Adminhtml\Test\Block\Review\Grid',
            'locator' => '#reviwGrid',
            'strategy' => 'css selector',
        ],
        'messagesBlock' => [
            'class' => 'Mage\Core\Test\Block\Messages',
            'locator' => '.messages',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\Review\Grid
     */
    public function getReviewGrid()
    {
        return $this->getBlockInstance('reviewGrid');
    }

    /**
     * @return \Mage\Core\Test\Block\Messages
     */
    public function getMessagesBlock()
    {
        return $this->getBlockInstance('messagesBlock');
    }
}
