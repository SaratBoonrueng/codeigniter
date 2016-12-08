<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Customer\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class CustomerAddress
 */
class CustomerAddress extends FrontendPage
{
    const MCA = 'customer/address';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'bookBlock' => [
            'class' => 'Mage\Customer\Test\Block\Account\Address\Book',
            'locator' => '.addresses-list',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Customer\Test\Block\Account\Address\Book
     */
    public function getBookBlock()
    {
        return $this->getBlockInstance('bookBlock');
    }
}
