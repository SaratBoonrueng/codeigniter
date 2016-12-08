<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Paypal\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class PaypalExpressReview
 */
class PaypalExpressReview extends FrontendPage
{
    const MCA = 'paypal/express/review';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'reviewBlock' => [
            'class' => 'Mage\Paypal\Test\Block\Express\Review',
            'locator' => '.paypal-express-review .col-main',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Paypal\Test\Block\Express\Review
     */
    public function getReviewBlock()
    {
        return $this->getBlockInstance('reviewBlock');
    }
}
