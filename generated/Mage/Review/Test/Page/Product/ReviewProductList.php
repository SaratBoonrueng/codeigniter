<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Review\Test\Page\Product;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class ReviewProductList
 */
class ReviewProductList extends FrontendPage
{
    const MCA = 'review/product/list';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'reviewFormBlock' => [
            'class' => 'Mage\Review\Test\Block\Product\View\Form',
            'locator' => '#review-form',
            'strategy' => 'css selector',
        ],
        'messagesBlock' => [
            'class' => 'Mage\Core\Test\Block\Messages',
            'locator' => '.messages',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Review\Test\Block\Product\View\Form
     */
    public function getReviewFormBlock()
    {
        return $this->getBlockInstance('reviewFormBlock');
    }

    /**
     * @return \Mage\Core\Test\Block\Messages
     */
    public function getMessagesBlock()
    {
        return $this->getBlockInstance('messagesBlock');
    }
}
