<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Payment\Test\Repository;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class ValidationPassword
 */
class ValidationPassword extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['visa_3d_secure_positive'] = [
            'validationPassword' => '%VALIDATION_PASSWORD%',
        ];

        $this->_data['visa_3d_secure'] = [
            'validationPassword' => '%VALIDATION_PASSWORD%',
        ];

        $this->_data['visa_3d_secure_negative'] = [
            'validationPassword' => '%VALIDATION_PASSWORD%',
        ];
    }
}
