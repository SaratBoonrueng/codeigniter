<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\GiftMessage\Test\Repository;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class GiftMessage
 */
class GiftMessage extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['default'] = [
            'sender' => 'John Doe',
            'recipient' => 'Jane Doe',
            'message' => 'text_%isolation%',
        ];
    }
}
