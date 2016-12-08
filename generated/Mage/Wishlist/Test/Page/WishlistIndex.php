<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Wishlist\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class WishlistIndex
 */
class WishlistIndex extends FrontendPage
{
    const MCA = 'wishlist/index/index';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'messagesBlock' => [
            'class' => 'Mage\Core\Test\Block\Messages',
            'locator' => '.messages',
            'strategy' => 'css selector',
        ],
        'wishlistBlock' => [
            'class' => 'Mage\Wishlist\Test\Block\Customer\Wishlist',
            'locator' => '#wishlist-view-form',
            'strategy' => 'css selector',
        ],
        'itemsBlock' => [
            'class' => 'Mage\Wishlist\Test\Block\Customer\Wishlist\Items',
            'locator' => '#wishlist-table',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Core\Test\Block\Messages
     */
    public function getMessagesBlock()
    {
        return $this->getBlockInstance('messagesBlock');
    }

    /**
     * @return \Mage\Wishlist\Test\Block\Customer\Wishlist
     */
    public function getWishlistBlock()
    {
        return $this->getBlockInstance('wishlistBlock');
    }

    /**
     * @return \Mage\Wishlist\Test\Block\Customer\Wishlist\Items
     */
    public function getItemsBlock()
    {
        return $this->getBlockInstance('itemsBlock');
    }
}
