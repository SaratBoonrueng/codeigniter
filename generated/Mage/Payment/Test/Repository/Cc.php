<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Payment\Test\Repository;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class Cc
 */
class Cc extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['default'] = [
            'cc_type' => 'Visa',
            'cc_number' => '%CC_VISA_1%',
            'cc_exp_month' => '01 - January',
            'cc_exp_year' => '2020',
            'cc_cid' => '123',
        ];

        $this->_data['payments_pro'] = [
            'cc_type' => 'Visa',
            'cc_number' => '%CC_VISA_2%',
            'cc_exp_month' => '01 - January',
            'cc_exp_year' => '2020',
            'cc_cid' => '123',
        ];

        $this->_data['visa_3d_secure_positive'] = [
            'cc_type' => 'Visa',
            'cc_number' => '%CC_VISA_3%',
            'cc_exp_month' => '01 - January',
            'cc_exp_year' => '2020',
            'cc_cid' => '123',
        ];

        $this->_data['visa_3d_secure_positive_without_pass'] = [
            'cc_type' => 'Visa',
            'cc_number' => '%CC_VISA_3%',
            'cc_exp_month' => '01 - January',
            'cc_exp_year' => '2020',
        ];

        $this->_data['visa_3d_secure'] = [
            'cc_type' => 'Visa',
            'cc_number' => '%CC_VISA_4%',
            'cc_exp_month' => '01 - January',
            'cc_exp_year' => '2017',
            'cc_cid' => '123',
        ];

        $this->_data['visa_3d_secure_negative'] = [
            'cc_type' => 'Visa',
            'cc_number' => '%CC_VISA_4%',
            'cc_exp_month' => '01 - January',
            'cc_exp_year' => '2020',
            'cc_cid' => '123',
        ];

        $this->_data['visa_3d_secure_negative_without_pass'] = [
            'cc_type' => 'Visa',
            'cc_number' => '%CC_VISA_4%',
            'cc_exp_month' => '01 - January',
            'cc_exp_year' => '2020',
        ];

        $this->_data['for_iframe'] = [
            'cc_type' => 'Visa',
            'cc_number' => '%CC_VISA_1%',
            'cc_exp_month' => '01',
            'cc_exp_year' => '19',
            'cc_cid' => '123',
        ];

        $this->_data['hosted_pro_action_sale'] = [
            'cc_type' => 'Visa',
            'cc_number' => '%CC_VISA_2%',
            'cc_exp_month' => '01',
            'cc_exp_year' => '19',
            'cc_cid' => '123',
        ];

        $this->_data['hosted_pro'] = [
            'cc_type' => 'Visa',
            'cc_number' => '%CC_VISA_2%',
            'cc_exp_month' => '01',
            'cc_exp_year' => '19',
            'cc_cid' => '123',
        ];
    }
}
