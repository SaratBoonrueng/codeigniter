<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Checkout\Test\Repository;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class CheckoutAgreement
 */
class CheckoutAgreement extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['default'] = [
            'name' => 'checkout_agreement %isolation%',
            'content' => 'TestMessage%isolation%',
            'checkbox_text' => 'test_checkbox%isolation%',
            'is_active' => 'Enabled',
            'is_html' => 'Text',
        ];
    }
}
