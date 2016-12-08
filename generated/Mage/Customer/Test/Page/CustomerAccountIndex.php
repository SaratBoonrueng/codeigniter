<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Customer\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class CustomerAccountIndex
 */
class CustomerAccountIndex extends FrontendPage
{
    const MCA = 'customer/account/index';

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
        'accountNavigationBlock' => [
            'class' => 'Mage\Customer\Test\Block\Account\Navigation',
            'locator' => '.block-account',
            'strategy' => 'css selector',
        ],
        'compareBlock' => [
            'class' => 'Mage\Catalog\Test\Block\Product\ProductList\Compare',
            'locator' => '.block-compare',
            'strategy' => 'css selector',
        ],
        'infoBlock' => [
            'class' => 'Mage\Customer\Test\Block\Account\Dashboard\Info',
            'locator' => '.my-account',
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
     * @return \Mage\Customer\Test\Block\Account\Navigation
     */
    public function getAccountNavigationBlock()
    {
        return $this->getBlockInstance('accountNavigationBlock');
    }

    /**
     * @return \Mage\Catalog\Test\Block\Product\ProductList\Compare
     */
    public function getCompareBlock()
    {
        return $this->getBlockInstance('compareBlock');
    }

    /**
     * @return \Mage\Customer\Test\Block\Account\Dashboard\Info
     */
    public function getInfoBlock()
    {
        return $this->getBlockInstance('infoBlock');
    }
}
