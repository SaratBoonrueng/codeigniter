<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Core\Test\Repository;

use Magento\Mtf\Repository\AbstractRepository;

/**
 * Class ConfigData
 */
class ConfigData extends AbstractRepository
{
    /**
     * @constructor
     * @param array $defaultConfig
     * @param array $defaultData
     */
    public function __construct(array $defaultConfig = [], array $defaultData = [])
    {
        $this->_data['store_view_local_germany'] = [
            'general/locale/code' => [
                'scope' => 'general/website/base/store',
                'scope_id' => '1',
                'label' => 'German (Germany)',
                'value' => 'de_DE',
            ],
        ];

        $this->_data['store_view_local_us'] = [
            'general/locale/code' => [
                'scope' => 'general/website/base/store',
                'scope_id' => '1',
                'label' => 'English (United States)',
                'value' => 'en_US',
            ],
        ];

        $this->_data['store_view_local_rollback'] = [
            'general/locale/code' => [
                'scope' => 'general/website/base/store',
                'scope_id' => '1',
                'label' => 'English (United States)',
                'value' => 'en_US',
            ],
        ];

        $this->_data['authorizenet_without_3d_secure'] = [
            'payment/authorizenet/active' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/authorizenet/using_pbridge' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/authorizenet/payment_action' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Authorize Only',
                'value' => 'authorize',
            ],
            'payment/authorizenet/login' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'authorize',
                'value' => '',
            ],
            'payment/authorizenet/trans_key' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/authorizenet/cgi_url' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/authorizenet/test' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/authorizenet/debug' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/authorizenet/useccv' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
        ];

        $this->_data['authorizenet_without_3d_secure_rollback'] = [
            'payment/authorizenet/active' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['authorizenet_without_3d_secure_action_capture'] = [
            'payment/authorizenet/active' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/authorizenet/using_pbridge' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/authorizenet/payment_action' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Authorize and Capture',
                'value' => 'authorize_capture',
            ],
            'payment/authorizenet/login' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'authorize',
                'value' => '',
            ],
            'payment/authorizenet/trans_key' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/authorizenet/cgi_url' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/authorizenet/test' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/authorizenet/debug' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
        ];

        $this->_data['authorizenet_without_3d_secure_action_capture_rollback'] = [
            'payment/authorizenet/active' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['authorizenet_directpost'] = [
            'payment/authorizenet_directpost/active' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/authorizenet_directpost/payment_action' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Authorize Only',
                'value' => 'authorize',
            ],
            'payment/authorizenet_directpost/login' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/authorizenet_directpost/trans_key' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/authorizenet_directpost/trans_md5' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/authorizenet_directpost/cgi_url' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/authorizenet_directpost/test' => [
                'scope' => 'payment',
                'scope_id' => '0',
                'label' => 'No',
                'value' => '',
            ],
            'payment/authorizenet_directpost/debug' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/authorizenet_directpost/useccv' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
        ];

        $this->_data['authorizenet_directpost_rollback'] = [
            'payment/authorizenet_directpost/active' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['authorizenet_directpost_capture'] = [
            'payment/authorizenet_directpost/active' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/authorizenet_directpost/payment_action' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Authorize and Capture',
                'value' => 'authorize_capture',
            ],
            'payment/authorizenet_directpost/login' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/authorizenet_directpost/trans_key' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/authorizenet_directpost/trans_md5' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/authorizenet_directpost/cgi_url' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/authorizenet_directpost/test' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/authorizenet_directpost/debug' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/authorizenet_directpost/useccv' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
        ];

        $this->_data['authorizenet_directpost_capture_rollback'] = [
            'payment/authorizenet_directpost/active' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['authorizenet_with_3d_secure_action_authorized'] = [
            'payment/authorizenet/active' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/authorizenet/using_pbridge' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/authorizenet/payment_action' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Authorize Only',
                'value' => 'authorize',
            ],
            'payment/authorizenet/login' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'authorize',
                'value' => '',
            ],
            'payment/authorizenet/trans_key' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/authorizenet/cgi_url' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/authorizenet/test' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/authorizenet/debug' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/authorizenet/useccv' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/authorizenet/centinel' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
        ];

        $this->_data['authorizenet_with_3d_secure_action_authorized_rollback'] = [
            'payment/authorizenet/active' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/authorizenet/centinel' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['manual_layered_navigation_mysql'] = [
            'catalog/layered_navigation/price_range_calculation' => [
                'scope' => 'catalog',
                'scope_id' => '1',
                'label' => 'Manual',
                'value' => 'manual',
            ],
            'catalog/layered_navigation/price_range_step' => [
                'scope' => 'catalog',
                'scope_id' => '1',
                'label' => '',
                'value' => '10',
            ],
            'catalog/layered_navigation/price_range_max_intervals' => [
                'scope' => 'catalog',
                'scope_id' => '1',
                'label' => '',
                'value' => '10',
            ],
        ];

        $this->_data['manual_layered_navigation_mysql_rollback'] = [
            'catalog/layered_navigation/price_range_calculation' => [
                'scope' => 'catalog',
                'scope_id' => '1',
                'label' => 'Automatic (equalize price ranges)',
                'value' => 'auto',
            ],
        ];

        $this->_data['display_out_of_stock_products'] = [
            'cataloginventory/options/show_out_of_stock' => [
                'scope' => 'cataloginventory',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
        ];

        $this->_data['display_out_of_stock_products_rollback'] = [
            'cataloginventory/options/show_out_of_stock' => [
                'scope' => 'cataloginventory',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['enable_multishipping'] = [
            'shipping/option/checkout_multiple' => [
                'scope' => 'shipping',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
        ];

        $this->_data['checkout_term_condition'] = [
            'checkout/options/enable_agreements' => [
                'scope' => 'checkout',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
        ];

        $this->_data['checkout_term_condition_rollback'] = [
            'checkout/options/enable_agreements' => [
                'scope' => 'checkout',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['default'] = [
            'scope' => 'default',
            'scope_id' => '0',
            'path' => 'general',
        ];

        $this->_data['config_currency_symbols_usd_and_uah'] = [
            'currency/options/allow' => [
                'scope' => 'currency',
                'scope_id' => '1',
                'label' => '',
                'value' => [
                    'US Dollar' => 'USD',
                    'Ukrainian Hryvnia' => 'UAH',
                ],
            ],
        ];

        $this->_data['config_currency_symbols_usd'] = [
            'currency/options/allow' => [
                'scope' => 'currency',
                'scope_id' => '1',
                'label' => '',
                'value' => [
                    'US Dollar' => 'USD',
                ],
            ],
        ];

        $this->_data['enable_vat'] = [
            'customer/create_account/auto_group_assign' => [
                'scope' => 'customer',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'customer/create_account/tax_calculation_address_type' => [
                'scope' => 'customer',
                'scope_id' => '1',
                'label' => 'Billing Address',
                'value' => 'billing',
            ],
            'customer/create_account/viv_disable_auto_group_assign_default' => [
                'scope' => 'customer',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
        ];

        $this->_data['enable_vat_rollback'] = [
            'customer/create_account/auto_group_assign' => [
                'scope' => 'customer',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '0',
            ],
            'customer/create_account/viv_disable_auto_group_assign_default' => [
                'scope' => 'customer',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '0',
            ],
        ];

        $this->_data['cashondelivery'] = [
            'payment/cashondelivery/active' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
        ];

        $this->_data['cashondelivery_rollback'] = [
            'payment/cashondelivery/active' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '0',
            ],
        ];

        $this->_data['banktransfer'] = [
            'payment/banktransfer/active' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
        ];

        $this->_data['banktransfer_rollback'] = [
            'payment/banktransfer/active' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '0',
            ],
        ];

        $this->_data['purchaseorder'] = [
            'payment/purchaseorder/active' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
        ];

        $this->_data['purchaseorder_rollback'] = [
            'payment/purchaseorder/active' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '0',
            ],
        ];

        $this->_data['checkmo_specificcountry_gb'] = [
            'payment/checkmo/active' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/checkmo/allowspecific' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Specific Countries',
                'value' => '1',
            ],
            'payment/checkmo/specificcountry' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'United Kingdom',
                'value' => 'GB',
            ],
        ];

        $this->_data['checkmo_specificcountry_gb_rollback'] = [
            'payment/checkmo/allowspecific' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '0',
            ],
        ];

        $this->_data['enable_3d_secure'] = [
            'payment_services/centinel/processor_id' => [
                'scope' => 'payment_services',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment_services/centinel/merchant_id' => [
                'scope' => 'payment_services',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment_services/centinel/password' => [
                'scope' => 'payment_services',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment_services/centinel/test_mode' => [
                'scope' => 'payment_services',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment_services/centinel/debug' => [
                'scope' => 'payment_services',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
        ];

        $this->_data['payflow_express_authorization_line_items'] = [
            'payment/payflow_link_payflow_link/partner' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => 'PayPal',
            ],
            'payment/payflow_link_payflow_link/user' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payflow_link_payflow_link/pwd' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payflow_link_payflow_link/vendor' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payflow_link_payflow_link/sandbox_flag' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/payflow_link_required/enable_payflow_link' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/payflow_link_express_checkout/business_account' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payflow_link_express_checkout/api_username' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payflow_link_express_checkout/api_password' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payflow_link_express_checkout/api_signature' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payflow_link_express_checkout/sandbox_flag' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/payflow_link_required/enable_express_checkout' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/settings_payflow_link_express_checkout_advanced/line_items_enabled' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/settings_payflow_link_express_checkout_advanced/transfer_shipping_options' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '0',
            ],
            'payment/settings_payflow_link_express_checkout_advanced/verify_peer' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['payflow_express_authorization_line_items_rollback'] = [
            'payment/payflow_link_required/enable_payflow_link' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/payflow_link_required/enable_express_checkout' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/settings_payflow_link_express_checkout_advanced/line_items_enabled' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['payflow_express_authorization_specificcountry_us'] = [
            'payment/payflow_link_payflow_link/partner' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => 'PayPal',
            ],
            'payment/payflow_link_payflow_link/user' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payflow_link_payflow_link/pwd' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payflow_link_payflow_link/vendor' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payflow_link_payflow_link/sandbox_flag' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/payflow_link_required/enable_payflow_link' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/payflow_link_express_checkout/business_account' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payflow_link_express_checkout/api_username' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payflow_link_express_checkout/api_password' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payflow_link_express_checkout/api_signature' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payflow_link_express_checkout/sandbox_flag' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/payflow_link_required/enable_express_checkout' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/settings_payflow_link_express_checkout_advanced/allowspecific' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Specific Countries',
                'value' => '1',
            ],
            'payment/settings_payflow_link_express_checkout_advanced/specificcountry' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => [
                    'United States' => 'US',
                ],
            ],
            'payment/settings_payflow_link_express_checkout_advanced/verify_peer' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['payflow_express_authorization_specificcountry_us_rollback'] = [
            'payment/payflow_link_required/enable_payflow_link' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/payflow_link_required/enable_express_checkout' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/settings_payflow_link_express_checkout_advanced/allowspecific' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'All Allowed Countries',
                'value' => '',
            ],
        ];

        $this->_data['payflow_express_sale'] = [
            'payment/payflow_link_payflow_link/partner' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => 'PayPal',
            ],
            'payment/payflow_link_payflow_link/user' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payflow_link_payflow_link/pwd' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payflow_link_payflow_link/vendor' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payflow_link_payflow_link/sandbox_flag' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/payflow_link_required/enable_payflow_link' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/payflow_link_express_checkout/business_account' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payflow_link_express_checkout/api_username' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payflow_link_express_checkout/api_password' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payflow_link_express_checkout/api_signature' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payflow_link_express_checkout/sandbox_flag' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/settings_payflow_link_express_checkout/payment_action' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Sale',
                'value' => 'Sale',
            ],
            'payment/payflow_link_required/enable_express_checkout' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/settings_payflow_link_express_checkout_advanced/verify_peer' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['payflow_express_sale_rollback'] = [
            'payment/payflow_link_required/enable_payflow_link' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/payflow_link_required/enable_express_checkout' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/settings_payflow_link_express_checkout/payment_action' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Authorization',
                'value' => 'Authorization',
            ],
        ];

        $this->_data['payflow_express_sale_specificcountry_gb_line_items'] = [
            'payment/payflow_link_payflow_link/partner' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => 'PayPal',
            ],
            'payment/payflow_link_payflow_link/user' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payflow_link_payflow_link/pwd' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payflow_link_payflow_link/vendor' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payflow_link_payflow_link/sandbox_flag' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '1',
            ],
            'payment/payflow_link_required/enable_payflow_link' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/payflow_link_express_checkout/business_account' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payflow_link_express_checkout/api_username' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payflow_link_express_checkout/api_password' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payflow_link_express_checkout/api_signature' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payflow_link_express_checkout/sandbox_flag' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/payflow_link_required/enable_express_checkout' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/settings_payflow_link_express_checkout_advanced/allowspecific' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Specific Countries',
                'value' => '1',
            ],
            'payment/settings_payflow_link_express_checkout_advanced/specificcountry' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => [
                    'United States' => 'US',
                ],
            ],
            'payment/settings_payflow_link_express_checkout_advanced/verify_peer' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['payflow_express_sale_specificcountry_gb_line_items_rollback'] = [
            'payment/payflow_link_required/enable_payflow_link' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/payflow_link_required/enable_express_checkout' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/settings_payflow_link_express_checkout_advanced/allowspecific' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'All Allowed Countries',
                'value' => '',
            ],
        ];

        $this->_data['paypal_express_sale_specificcountry_us_shipping_options_mark'] = [
            'payment/express_checkout_required_express_checkout/business_account' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/express_checkout_required_express_checkout/api_authentication' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'API Signature',
                'value' => '',
            ],
            'payment/express_checkout_required_express_checkout/api_username' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/express_checkout_required_express_checkout/api_password' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/express_checkout_required_express_checkout/api_signature' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/express_checkout_required_express_checkout/sandbox_flag' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/express_checkout_required_express_checkout/use_proxy' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/express_checkout_required/enable_express_checkout' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/settings_ec_advanced/allowspecific' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Specific Countries',
                'value' => '1',
            ],
            'payment/settings_ec_advanced/specificcountry' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => [
                    'United States' => 'US',
                ],
            ],
            'payment/settings_ec_advanced/transfer_shipping_options' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/settings_ec_advanced/solution_type' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => 'Mark',
            ],
            'payment/settings_ec_advanced/verify_peer' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['paypal_express_sale_specificcountry_us_shipping_options_mark_rollback'] = [
            'payment/express_checkout_required/enable_express_checkout' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/settings_ec_advanced/allowspecific' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'All Allowed Countries',
                'value' => '',
            ],
            'payment/settings_ec_advanced/transfer_shipping_options' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/settings_ec_advanced/solution_type' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => 'Mark',
            ],
        ];

        $this->_data['paypal_express_order_line_items_mark_require_billing_address'] = [
            'payment/express_checkout_required_express_checkout/business_account' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/express_checkout_required_express_checkout/api_authentication' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'API Signature',
                'value' => '',
            ],
            'payment/express_checkout_required_express_checkout/api_username' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/express_checkout_required_express_checkout/api_password' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/express_checkout_required_express_checkout/api_signature' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/express_checkout_required_express_checkout/sandbox_flag' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/express_checkout_required_express_checkout/use_proxy' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/express_checkout_required/enable_express_checkout' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/settings_ec_advanced/line_items_enabled' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/settings_ec_advanced/require_billing_address' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/settings_ec_advanced/verify_peer' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/settings_ec/payment_action' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Authorization',
                'value' => 'Authorization',
            ],
            'payment/settings_payflow_link_express_checkout_advanced/transfer_shipping_options' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '0',
            ],
        ];

        $this->_data['paypal_express_order_line_items_mark_require_billing_address_rollback'] = [
            'payment/express_checkout_required/enable_express_checkout' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/settings_ec_advanced/line_items_enabled' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/settings_ec_advanced/require_billing_address' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['paypal_standard'] = [
            'payment/wps_express_checkout_required_express_checkout/business_account' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/wps_express_checkout_required_express_checkout/api_username' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/wps_express_checkout_required_express_checkout/api_password' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/wps_express_checkout_required_express_checkout/api_signature' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/wps_express_checkout_required_express_checkout/sandbox_flag' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/wps_express_checkout_required/enable_wps_express_checkout' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/settings_wps_express_advanced/debug' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/settings_wps_express_advanced/verify_peer' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/express_checkout_required/enable_express_checkout' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
        ];

        $this->_data['paypal_standard_rollback'] = [
            'payment/wps_express_checkout_required/enable_wps_express_checkout' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/express_checkout_required/enable_express_checkout' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '',
            ],
        ];

        $this->_data['paypal_payments_pro'] = [
            'payment/wpp_and_express_checkout/business_account' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/wpp_and_express_checkout/api_username' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/wpp_and_express_checkout/api_password' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/wpp_and_express_checkout/api_signature' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/wpp_and_express_checkout/sandbox_flag' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/wpp_required_settings/enable_wpp' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/wpp_required_settings/enable_express_checkout_bml' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/wpp_settings/payment_action' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Authorization',
                'value' => 'Authorization',
            ],
            'payment/wpp_settings_advanced/debug' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/wpp_settings_advanced/verify_peer' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['paypal_payments_pro_rollback'] = [
            'payment/wpp_required_settings/enable_wpp' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/wpp_required_settings/enable_express_checkout_bml' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['paypal_payments_pro_action_sale'] = [
            'payment/wpp_and_express_checkout/business_account' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/wpp_and_express_checkout/api_username' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/wpp_and_express_checkout/api_password' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/wpp_and_express_checkout/api_signature' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/wpp_and_express_checkout/sandbox_flag' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/wpp_required_settings/enable_wpp' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/wpp_required_settings/enable_express_checkout_bml' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/wpp_settings/payment_action' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Sale',
                'value' => 'Sale',
            ],
            'payment/wpp_settings_advanced/debug' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/wpp_settings_advanced/verify_peer' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['paypal_payments_pro_action_sale_rollback'] = [
            'payment/wpp_required_settings/enable_wpp' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/wpp_required_settings/enable_express_checkout_bml' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['paypal_payflow_pro'] = [
            'payment/paypal_payflow_api_settings/business_account' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/paypal_payflow_api_settings/partner' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => 'PayPal',
            ],
            'payment/paypal_payflow_api_settings/user' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/paypal_payflow_api_settings/vendor' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/paypal_payflow_api_settings/pwd' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/paypal_payflow_api_settings/sandbox_flag' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/paypal_payflow_api_settings/use_proxy' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/paypal_payflow_required/enable_paypal_payflow' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/paypal_payflow_required/enable_express_checkout_bml_uk' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/settings_paypal_payflow/payment_action' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Authorization',
                'value' => 'Authorization',
            ],
            'payment/settings_paypal_payflow_advanced/allowspecific' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'All Allowed Countries',
                'value' => '',
            ],
            'payment/settings_paypal_payflow_advanced/debug' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/settings_paypal_payflow_advanced/verify_peer' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['paypal_payflow_pro_rollback'] = [
            'payment/paypal_payflow_required/enable_paypal_payflow' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/paypal_payflow_required/enable_express_checkout_bml_uk' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['paypal_payflow_pro_action_sale'] = [
            'payment/paypal_payflow_api_settings/business_account' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/paypal_payflow_api_settings/partner' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => 'PayPal',
            ],
            'payment/paypal_payflow_api_settings/user' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/paypal_payflow_api_settings/vendor' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/paypal_payflow_api_settings/pwd' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/paypal_payflow_api_settings/sandbox_flag' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/paypal_payflow_required/enable_paypal_payflow' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/paypal_payflow_required/enable_express_checkout_bml_uk' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/settings_paypal_payflow/payment_action' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Sale',
                'value' => 'Sale',
            ],
            'payment/settings_paypal_payflow_advanced/debug' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/settings_paypal_payflow_advanced/verify_peer' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['paypal_payflow_pro_action_sale_rollback'] = [
            'payment/paypal_payflow_required/enable_paypal_payflow' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/paypal_payflow_required/enable_express_checkout_bml_uk' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['paypal_payflow_link'] = [
            'payment/payflow_link_payflow_link/partner' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => 'PayPal',
            ],
            'payment/payflow_link_payflow_link/user' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payflow_link_payflow_link/pwd' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payflow_link_payflow_link/vendor' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payflow_link_payflow_link/sandbox_flag' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/payflow_link_required/enable_payflow_link' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/settings_payflow_link/payment_action' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Authorization',
                'value' => 'Authorization',
            ],
            'payment/settings_payflow_link_advanced/debug' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/settings_payflow_link_advanced/verify_peer' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['paypal_payflow_link_rollback'] = [
            'payment/payflow_link_required/enable_payflow_link' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['paypal_payflow_link_action_sale'] = [
            'payment/payflow_link_payflow_link/partner' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => 'PayPal',
            ],
            'payment/payflow_link_payflow_link/user' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payflow_link_payflow_link/pwd' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payflow_link_payflow_link/vendor' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payflow_link_payflow_link/sandbox_flag' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/payflow_link_required/enable_payflow_link' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/settings_payflow_link/payment_action' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Sale',
                'value' => 'Sale',
            ],
            'payment/settings_payflow_link_advanced/debug' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/settings_payflow_link_advanced/verify_peer' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['paypal_payflow_link_action_sale_rollback'] = [
            'payment/payflow_link_required/enable_payflow_link' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['paypal_advanced'] = [
            'payment/payments_advanced/partner' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => 'PayPal',
            ],
            'payment/payments_advanced/vendor' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payments_advanced/user' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payments_advanced/pwd' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payments_advanced/sandbox_flag' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/express/business_account' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/express/api_username' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/express/api_password' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/express/api_signature' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/express/sandbox_flag' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/required_settings/enable_payflow_advanced' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/required_settings/enable_express_checkout_bml' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/settings_payments_advanced/title' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => 'Credit Card (PayPal Advanced)',
            ],
            'payment/settings_payments_advanced/payment_action' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Authorization',
                'value' => 'Authorization',
            ],
            'payment/settings_payments_advanced_advanced/debug' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/settings_payments_advanced_advanced/verify_peer' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/settings_express_checkout/payment_action' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Authorization',
                'value' => 'Authorization',
            ],
            'payment/settings_express_checkout_advanced/debug' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/settings_express_checkout_advanced/verify_peer' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['paypal_advanced_rollback'] = [
            'payment/required_settings/enable_payflow_advanced' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/required_settings/enable_express_checkout_bml' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['paypal_advanced_action_sale'] = [
            'payment/payments_advanced/partner' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => 'PayPal',
            ],
            'payment/payments_advanced/vendor' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payments_advanced/user' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payments_advanced/pwd' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/payments_advanced/sandbox_flag' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/express/business_account' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/express/api_username' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/express/api_password' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/express/api_signature' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/express/sandbox_flag' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/required_settings/enable_payflow_advanced' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/required_settings/enable_express_checkout_bml' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/settings_payments_advanced/title' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => 'Credit Card (PayPal Advanced)',
            ],
            'payment/settings_payments_advanced/payment_action' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Sale',
                'value' => 'Sale',
            ],
            'payment/settings_payments_advanced_advanced/debug' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/settings_payments_advanced_advanced/verify_peer' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/settings_express_checkout/payment_action' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Authorization',
                'value' => 'Authorization',
            ],
            'payment/settings_express_checkout_advanced/debug' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/settings_express_checkout_advanced/verify_peer' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['paypal_advanced_action_sale_rollback'] = [
            'payment/required_settings/enable_payflow_advanced' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/required_settings/enable_express_checkout_bml' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['paypal_hosted_solution'] = [
            'payment/account/merchant_country' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'United Kingdom',
                'value' => 'GB',
            ],
            'payment/pphs_required_settings_pphs/business_account' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/pphs_required_settings_pphs/api_username' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/pphs_required_settings_pphs/api_password' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/pphs_required_settings_pphs/api_signature' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/pphs_required_settings_pphs/sandbox_flag' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/pphs_required_settings/pphs_enable' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/pphs_settings/payment_action' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Authorization',
                'value' => 'Authorization',
            ],
            'payment/pphs_settings_advanced/debug' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/pphs_settings_advanced/verify_peer' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['paypal_hosted_solution_rollback'] = [
            'payment/account/merchant_country' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'United States',
                'value' => 'US',
            ],
            'payment/pphs_required_settings/pphs_enable' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['paypal_hosted_solution_action_sale'] = [
            'payment/account/merchant_country' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'United Kingdom',
                'value' => 'GB',
            ],
            'payment/pphs_required_settings_pphs/business_account' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/pphs_required_settings_pphs/api_username' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/pphs_required_settings_pphs/api_password' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/pphs_required_settings_pphs/api_signature' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/pphs_required_settings_pphs/sandbox_flag' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/pphs_required_settings/pphs_enable' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/pphs_settings/payment_action' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Sale',
                'value' => 'Sale',
            ],
            'payment/pphs_settings_advanced/debug' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/pphs_settings_advanced/verify_peer' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['paypal_hosted_solution_action_sale_rollback'] = [
            'payment/account/merchant_country' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'United States',
                'value' => 'US',
            ],
            'payment/pphs_required_settings/pphs_enable' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['paypal_payments_pro_3d_secure'] = [
            'payment/wpp_and_express_checkout/business_account' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/wpp_and_express_checkout/api_username' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/wpp_and_express_checkout/api_password' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/wpp_and_express_checkout/api_signature' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/wpp_and_express_checkout/sandbox_flag' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/wpp_required_settings/enable_wpp' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/wpp_required_settings/enable_express_checkout_bml' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/wpp_settings/payment_action' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Authorization',
                'value' => 'Authorization',
            ],
            'payment/wpp_settings_advanced/debug' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/wpp_settings_advanced/verify_peer' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/wpp_settings_advanced/useccv' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/wpp_settings_advanced/centinel' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/express_checkout_required/enable_express_checkout' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/wpp_settings_express_checkout_advanced/verify_peer' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['paypal_payments_pro_3d_secure_rollback'] = [
            'payment/wpp_required_settings/enable_wpp' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/wpp_required_settings/enable_express_checkout_bml' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/wpp_settings_advanced/centinel' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/express_checkout_required/enable_express_checkout' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/wpp_settings_advanced/useccv' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
        ];

        $this->_data['paypal_payflow_pro_3d_secure'] = [
            'payment/paypal_payflow_api_settings/business_account' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/paypal_payflow_api_settings/partner' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => 'PayPal',
            ],
            'payment/paypal_payflow_api_settings/user' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/paypal_payflow_api_settings/vendor' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/paypal_payflow_api_settings/pwd' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'payment/paypal_payflow_api_settings/sandbox_flag' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/paypal_payflow_api_settings/use_proxy' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/paypal_payflow_required/enable_paypal_payflow' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/paypal_payflow_required/enable_express_checkout_bml_uk' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/settings_paypal_payflow/payment_action' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Authorization',
                'value' => 'Authorization',
            ],
            'payment/settings_paypal_payflow_advanced/allowspecific' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'All Allowed Countries',
                'value' => '',
            ],
            'payment/settings_paypal_payflow_advanced/debug' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/settings_paypal_payflow_advanced/verify_peer' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/settings_paypal_payflow_advanced/centinel' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'payment/settings_paypal_payflow_advanced/useccv' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
        ];

        $this->_data['paypal_payflow_pro_3d_secure_rollback'] = [
            'payment/paypal_payflow_required/enable_paypal_payflow' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/paypal_payflow_required/enable_express_checkout_bml_uk' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'payment/settings_paypal_payflow_advanced/centinel' => [
                'scope' => 'payment',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['enable_map_on_gesture'] = [
            'sales/msrp/enabled' => [
                'scope' => 'sales',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'sales/msrp/apply_for_all' => [
                'scope' => 'sales',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'sales/msrp/display_price_type' => [
                'scope' => 'sales',
                'scope_id' => '1',
                'label' => 'On Gesture',
                'value' => '1',
            ],
        ];

        $this->_data['enable_map_on_gesture_rollback'] = [
            'sales/msrp/enabled' => [
                'scope' => 'sales',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'sales/msrp/apply_for_all' => [
                'scope' => 'sales',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['enable_map_in_cart'] = [
            'sales/msrp/enabled' => [
                'scope' => 'sales',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'sales/msrp/apply_for_all' => [
                'scope' => 'sales',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'sales/msrp/display_price_type' => [
                'scope' => 'sales',
                'scope_id' => '1',
                'label' => 'In Cart',
                'value' => '2',
            ],
        ];

        $this->_data['enable_map_in_cart_rollback'] = [
            'sales/msrp/enabled' => [
                'scope' => 'sales',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'sales/msrp/apply_for_all' => [
                'scope' => 'sales',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['enable_map_before_order'] = [
            'sales/msrp/enabled' => [
                'scope' => 'sales',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'sales/msrp/apply_for_all' => [
                'scope' => 'sales',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'sales/msrp/display_price_type' => [
                'scope' => 'sales',
                'scope_id' => '1',
                'label' => 'Before Order Confirmation',
                'value' => '3',
            ],
        ];

        $this->_data['enable_map_before_order_rollback'] = [
            'sales/msrp/enabled' => [
                'scope' => 'sales',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'sales/msrp/apply_for_all' => [
                'scope' => 'sales',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['enableGiftMessages'] = [
            'sales/gift_options/allow_order' => [
                'scope' => 'sales',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'sales/gift_options/allow_items' => [
                'scope' => 'sales',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
        ];

        $this->_data['enableGiftMessages_rollback'] = [
            'sales/gift_options/allow_order' => [
                'scope' => 'sales',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'sales/gift_options/allow_items' => [
                'scope' => 'sales',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['ups'] = [
            'carriers/ups/active' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'carriers/ups/active_rma' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'carriers/ups/type' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => 'United Parcel Service XML',
                'value' => 'UPS_XML',
            ],
            'carriers/ups/is_account_live' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '0',
            ],
            'carriers/ups/password' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'carriers/ups/username' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'carriers/ups/mode_xml' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => 'Development',
                'value' => '0',
            ],
            'carriers/ups/gateway_url' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => '',
                'value' => 'https://wwwcie.ups.com/ups.app/xml/Rate',
            ],
            'carriers/ups/origin_shipment' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => '',
                'value' => 'Shipments Originating in United States',
            ],
            'carriers/ups/access_license_number' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'carriers/ups/negotiated_active' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'carriers/ups/shipper_number' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'carriers/ups/container' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => 'Customer Packaging',
                'value' => 'CP',
            ],
            'carriers/ups/dest_type' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => 'Residential',
                'value' => 'RES',
            ],
            'carriers/ups/tracking_xml_url' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => '',
                'value' => 'https://wwwcie.ups.com/ups.app/xml/Track',
            ],
            'carriers/ups/unit_of_measure' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => 'LBS',
                'value' => 'LBS',
            ],
            'carriers/ups/allowed_methods' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => '',
                'value' => [
                    'UPS Standard' => '11',
                    'UPS Three-Day Select' => '12',
                    'UPS Next Day Air Early A.M.' => '14',
                    'UPS Worldwide Express Plus' => '54',
                    'UPS Second Day Air A.M.' => '59',
                    'UPS Worldwide Saver' => '65',
                    'UPS Next Day Air' => '01',
                    'UPS Second Day Air' => '02',
                    'UPS Ground' => '03',
                    'UPS Worldwide Express' => '07',
                    'UPS Worldwide Expedited' => '08',
                ],
            ],
            'carriers/ups/sallowspecific' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => 'All Allowed Countries',
                'value' => '0',
            ],
            'carriers/ups/showmethod' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'carriers/ups/debug' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
        ];

        $this->_data['ups_rollback'] = [
            'carriers/ups/active' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '0',
            ],
            'carriers/ups/active_rma' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '0',
            ],
        ];

        $this->_data['usps'] = [
            'carriers/usps/active' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'carriers/usps/gateway_url' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => '',
                'value' => 'http://production.shippingapis.com/ShippingAPI.dll',
            ],
            'carriers/usps/gateway_secure_url' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => '',
                'value' => 'https://secure.shippingapis.com/ShippingAPI.dll',
            ],
            'carriers/usps/userid' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'carriers/usps/password' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
        ];

        $this->_data['usps_rollback'] = [
            'carriers/usps/active' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '0',
            ],
        ];

        $this->_data['fedex'] = [
            'carriers/fedex/active' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'carriers/fedex/account' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'carriers/fedex/meter_number' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'carriers/fedex/key' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'carriers/fedex/password' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'carriers/fedex/sandbox_mode' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => '',
                'value' => '1',
            ],
            'carriers/fedex/unit_of_measure' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => 'LB',
                'value' => 'LB',
            ],
            'carriers/fedex/allowed_methods' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => '',
                'value' => [
                    'Europe First Priority' => 'EUROPE_FIRST_INTERNATIONAL_PRIORITY',
                    '1 Day Freight' => 'FEDEX_1_DAY_FREIGHT',
                    '2 Day Freight' => 'FEDEX_2_DAY_FREIGHT',
                    '2 Day' => 'FEDEX_2_DAY',
                    '2 Day AM' => 'FEDEX_2_DAY_AM',
                    '3 Day Freight' => 'FEDEX_3_DAY_FREIGHT',
                    'Express Saver' => 'FEDEX_EXPRESS_SAVER',
                    'Ground' => 'FEDEX_GROUND',
                    'First Overnight' => 'FIRST_OVERNIGHT',
                    'Home Delivery' => 'GROUND_HOME_DELIVERY',
                    'International Economy' => 'INTERNATIONAL_ECONOMY',
                    'Intl Economy Freight' => 'INTERNATIONAL_ECONOMY_FREIGHT',
                    'International First' => 'INTERNATIONAL_FIRST',
                    'International Ground' => 'INTERNATIONAL_GROUND',
                    'International Priority' => 'INTERNATIONAL_PRIORITY',
                    'Intl Priority Freight' => 'INTERNATIONAL_PRIORITY_FREIGHT',
                    'Priority Overnight' => 'PRIORITY_OVERNIGHT',
                    'Smart Post' => 'SMART_POST',
                    'Standard Overnight' => 'STANDARD_OVERNIGHT',
                    'Freight' => 'FEDEX_FREIGHT',
                    'National Freight' => 'FEDEX_NATIONAL_FREIGHT',
                ],
            ],
            'carriers/fedex/debug' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'carriers/fedex/showmethod' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
        ];

        $this->_data['fedex_rollback'] = [
            'carriers/fedex/active' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '0',
            ],
        ];

        $this->_data['shipping_origin'] = [
            'shipping/origin/country_id' => [
                'scope' => 'shipping',
                'scope_id' => '1',
                'label' => 'United States',
                'value' => 'US',
            ],
            'shipping/origin/region_id' => [
                'scope' => 'shipping',
                'scope_id' => '1',
                'label' => 'California',
                'value' => '12',
            ],
            'shipping/origin/postcode' => [
                'scope' => 'shipping',
                'scope_id' => '1',
                'label' => '',
                'value' => '90232',
            ],
            'shipping/origin/city' => [
                'scope' => 'shipping',
                'scope_id' => '1',
                'label' => '',
                'value' => 'Culver City',
            ],
            'shipping/origin/street_line1' => [
                'scope' => 'shipping',
                'scope_id' => '1',
                'label' => '',
                'value' => '10441 Jefferson Blvd',
            ],
            'shipping/origin/street_line2' => [
                'scope' => 'shipping',
                'scope_id' => '1',
                'label' => '',
                'value' => 'Suite 200',
            ],
        ];

        $this->_data['shipping_origin_rollback'] = [
            'shipping/origin/country_id' => [
                'scope' => 'shipping',
                'scope_id' => '1',
                'label' => 'United States',
                'value' => 'US',
            ],
            'shipping/origin/region_id' => [
                'scope' => 'shipping',
                'scope_id' => '1',
                'label' => 'California',
                'value' => '12',
            ],
            'shipping/origin/postcode' => [
                'scope' => 'shipping',
                'scope_id' => '1',
                'label' => '',
                'value' => '90034',
            ],
            'shipping/origin/city' => [
                'scope' => 'shipping',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'shipping/origin/street_line1' => [
                'scope' => 'shipping',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'shipping/origin/street_line2' => [
                'scope' => 'shipping',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
        ];

        $this->_data['shipping_origin_gb'] = [
            'shipping/origin/country_id' => [
                'scope' => 'shipping',
                'scope_id' => '1',
                'label' => 'United Kingdom',
                'value' => 'GB',
            ],
            'shipping/origin/postcode' => [
                'scope' => 'shipping',
                'scope_id' => '1',
                'label' => '',
                'value' => 'SE1 7RW',
            ],
            'shipping/origin/city' => [
                'scope' => 'shipping',
                'scope_id' => '1',
                'label' => '',
                'value' => 'London',
            ],
            'shipping/origin/street_line1' => [
                'scope' => 'shipping',
                'scope_id' => '1',
                'label' => '',
                'value' => '172, WestminsterBridge Rd',
            ],
            'shipping/origin/street_line2' => [
                'scope' => 'shipping',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
        ];

        $this->_data['shipping_origin_gb_rollback'] = [
            'shipping/origin/country_id' => [
                'scope' => 'shipping',
                'scope_id' => '1',
                'label' => 'United States',
                'value' => 'US',
            ],
            'shipping/origin/region_id' => [
                'scope' => 'shipping',
                'scope_id' => '1',
                'label' => 'California',
                'value' => '12',
            ],
            'shipping/origin/postcode' => [
                'scope' => 'shipping',
                'scope_id' => '1',
                'label' => '',
                'value' => '90034',
            ],
            'shipping/origin/city' => [
                'scope' => 'shipping',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'shipping/origin/street_line1' => [
                'scope' => 'shipping',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'shipping/origin/street_line2' => [
                'scope' => 'shipping',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
        ];

        $this->_data['dhl_eu'] = [
            'carriers/dhlint/active' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'carriers/dhlint/gateway_url' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => '',
                'value' => 'https://xmlpi-ea.dhl.com/XMLShippingServlet',
            ],
            'carriers/dhlint/id' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'carriers/dhlint/password' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'carriers/dhlint/content_type' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => 'Documents',
                'value' => 'D',
            ],
            'carriers/dhlint/account' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'carriers/dhlint/showmethod' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'carriers/dhlint/debug' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'carriers/dhlint/doc_methods' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => '',
                'value' => [
                    'Easy shop' => '2',
                    'Sprintline' => '5',
                    'Secureline' => '6',
                    'Express easy' => '7',
                    'Europack' => '9',
                    'Break bulk express' => 'B',
                    'Medical express' => 'C',
                    'Express worldwide' => 'D',
                    'Express worldwide ' => 'U',
                    'Express 9:00' => 'K',
                    'Express 10:30' => 'L',
                    'Domestic economy select' => 'G',
                    'Economy select' => 'W',
                    'Break bulk economy' => 'I',
                    'Domestic express' => 'N',
                    'Others' => 'O',
                    'Globalmail business' => 'R',
                    'Same day' => 'S',
                    'Express 12:00' => 'T',
                    'Express envelope' => 'X',
                ],
            ],
        ];

        $this->_data['dhl_eu_rollback'] = [
            'carriers/dhlint/active' => [
                'scope' => 'carriers',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '0',
            ],
        ];

        $this->_data['shipping_tax_class_taxable_goods'] = [
            'tax/classes/shipping_tax_class' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Taxable Goods',
                'value' => '2',
            ],
        ];

        $this->_data['shipping_tax_class_taxable_goods_rollback'] = [
            'tax/classes/shipping_tax_class' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'None',
                'value' => '',
            ],
        ];

        $this->_data['tax_calculation_base_on_shipping_origin'] = [
            'tax/calculation/based_on' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Shipping Origin',
                'value' => 'origin',
            ],
        ];

        $this->_data['tax_calculation_base_on_shipping_origin_rollback'] = [
            'tax/calculation/based_on' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Shipping Address',
                'value' => 'shipping',
            ],
        ];

        $this->_data['cross_border_enabled_price_incl_tax'] = [
            'tax/calculation/algorithm' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Total',
                'value' => 'TOTAL_BASE_CALCULATION',
            ],
            'tax/calculation/price_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '1',
            ],
            'tax/calculation/shipping_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '1',
            ],
            'tax/calculation/apply_after_discount' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Before Discount',
                'value' => '',
            ],
            'tax/calculation/discount_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '1',
            ],
            'tax/display/type' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '2',
            ],
            'tax/display/shipping' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '2',
            ],
            'tax/cart_display/price' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '2',
            ],
            'tax/cart_display/subtotal' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '2',
            ],
            'tax/cart_display/shipping' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '2',
            ],
            'tax/cart_display/grandtotal' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'tax/cart_display/full_summary' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'tax/calculation/cross_border_trade_enabled' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'tax/weee/enable' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'tax/weee/display_list' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including FPT and FPT description',
                'value' => '1',
            ],
            'tax/weee/display' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including FPT and FPT description',
                'value' => '1',
            ],
            'tax/weee/display_sales' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including FPT and FPT description',
                'value' => '1',
            ],
            'tax/weee/apply_vat' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Not Taxed',
                'value' => '',
            ],
            'tax/weee/include_in_subtotal' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['cross_border_enabled_price_excl_tax'] = [
            'tax/calculation/algorithm' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Total',
                'value' => 'TOTAL_BASE_CALCULATION',
            ],
            'tax/calculation/price_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '',
            ],
            'tax/calculation/shipping_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '1',
            ],
            'tax/calculation/apply_after_discount' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Before Discount',
                'value' => '',
            ],
            'tax/calculation/discount_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '',
            ],
            'tax/display/type' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '2',
            ],
            'tax/display/shipping' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '2',
            ],
            'tax/cart_display/price' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '2',
            ],
            'tax/cart_display/subtotal' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '2',
            ],
            'tax/cart_display/shipping' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '2',
            ],
            'tax/cart_display/grandtotal' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'tax/cart_display/full_summary' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'tax/calculation/cross_border_trade_enabled' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'tax/weee/enable' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'tax/weee/display_list' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including FPT and FPT description',
                'value' => '1',
            ],
            'tax/weee/display' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including FPT and FPT description',
                'value' => '1',
            ],
            'tax/weee/display_sales' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including FPT and FPT description',
                'value' => '1',
            ],
            'tax/weee/apply_vat' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Not Taxed',
                'value' => '',
            ],
            'tax/weee/include_in_subtotal' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['default_tax_configuration'] = [
            'tax/calculation/algorithm' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Total',
                'value' => 'TOTAL_BASE_CALCULATION',
            ],
            'tax/calculation/price_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '',
            ],
            'tax/calculation/shipping_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '',
            ],
            'tax/calculation/apply_after_discount' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Before Discount',
                'value' => '',
            ],
            'tax/calculation/discount_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '',
            ],
            'tax/calculation/cross_border_trade_enabled' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'tax/display/type' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '1',
            ],
            'tax/display/shipping' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '1',
            ],
            'tax/cart_display/price' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '1',
            ],
            'tax/cart_display/subtotal' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '1',
            ],
            'tax/cart_display/shipping' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '1',
            ],
            'tax/cart_display/grandtotal' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'tax/cart_display/full_summary' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'tax/sales_display/price' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '1',
            ],
            'tax/sales_display/subtotal' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '1',
            ],
            'tax/sales_display/shipping' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '1',
            ],
            'tax/sales_display/gift_wrapping' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '1',
            ],
            'tax/sales_display/printed_card' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '1',
            ],
            'tax/sales_display/grandtotal' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'tax/sales_display/full_summary' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'tax/sales_display/zero_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'tax/weee/enable' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'tax/weee/display_list' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including FPT and FPT description',
                'value' => '1',
            ],
            'tax/weee/display' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including FPT and FPT description',
                'value' => '1',
            ],
            'tax/weee/display_sales' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including FPT and FPT description',
                'value' => '1',
            ],
            'tax/weee/apply_vat' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'tax/weee/include_in_subtotal' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['display_including_tax'] = [
            'tax/display/type' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '2',
            ],
            'tax/display/shipping' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '2',
            ],
            'tax/cart_display/price' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '2',
            ],
            'tax/cart_display/subtotal' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '2',
            ],
            'tax/cart_display/shipping' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '2',
            ],
            'tax/cart_display/grandtotal' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'tax/cart_display/full_summary' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'tax/sales_display/price' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '2',
            ],
            'tax/sales_display/subtotal' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '2',
            ],
            'tax/sales_display/shipping' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '2',
            ],
            'tax/sales_display/grandtotal' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
        ];

        $this->_data['display_excluding_including_tax'] = [
            'tax/display/type' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including and Excluding Tax',
                'value' => '3',
            ],
            'tax/display/shipping' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including and Excluding Tax',
                'value' => '3',
            ],
            'tax/cart_display/price' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including and Excluding Tax',
                'value' => '3',
            ],
            'tax/cart_display/subtotal' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including and Excluding Tax',
                'value' => '3',
            ],
            'tax/cart_display/shipping' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including and Excluding Tax',
                'value' => '3',
            ],
            'tax/cart_display/grandtotal' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'tax/cart_display/full_summary' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'tax/sales_display/price' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including and Excluding Tax',
                'value' => '3',
            ],
            'tax/sales_display/subtotal' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including and Excluding Tax',
                'value' => '3',
            ],
            'tax/sales_display/shipping' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including and Excluding Tax',
                'value' => '3',
            ],
            'tax/sales_display/grandtotal' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
        ];

        $this->_data['row_cat_incl_ship_excl_after_disc_on_excl'] = [
            'tax/calculation/algorithm' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Row Total',
                'value' => 'ROW_BASE_CALCULATION',
            ],
            'tax/calculation/price_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '1',
            ],
            'tax/calculation/shipping_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '',
            ],
            'tax/calculation/apply_after_discount' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'After Discount',
                'value' => '1',
            ],
            'tax/calculation/discount_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '',
            ],
            'tax/calculation/cross_border_trade_enabled' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['row_cat_excl_ship_incl_before_disc_on_incl'] = [
            'tax/calculation/algorithm' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Row Total',
                'value' => 'ROW_BASE_CALCULATION',
            ],
            'tax/calculation/price_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '',
            ],
            'tax/calculation/shipping_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '1',
            ],
            'tax/calculation/apply_after_discount' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Before Discount',
                'value' => '',
            ],
            'tax/calculation/discount_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '1',
            ],
            'tax/calculation/cross_border_trade_enabled' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['total_cat_excl_ship_incl_after_disc_on_excl'] = [
            'tax/calculation/algorithm' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Total',
                'value' => 'TOTAL_BASE_CALCULATION',
            ],
            'tax/calculation/price_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '',
            ],
            'tax/calculation/shipping_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '1',
            ],
            'tax/calculation/apply_after_discount' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'After Discount',
                'value' => '1',
            ],
            'tax/calculation/discount_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '',
            ],
            'tax/calculation/cross_border_trade_enabled' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['row_cat_incl_ship_excl_before_disc_on_incl'] = [
            'tax/calculation/algorithm' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Row Total',
                'value' => 'ROW_BASE_CALCULATION',
            ],
            'tax/calculation/price_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '1',
            ],
            'tax/calculation/shipping_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '',
            ],
            'tax/calculation/apply_after_discount' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Before Discount',
                'value' => '',
            ],
            'tax/calculation/discount_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '1',
            ],
            'tax/calculation/cross_border_trade_enabled' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['unit_cat_incl_ship_incl_before_disc_on_incl'] = [
            'tax/calculation/algorithm' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => '',
                'value' => 'UNIT_BASE_CALCULATION',
            ],
            'tax/calculation/price_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '1',
            ],
            'tax/calculation/shipping_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '1',
            ],
            'tax/calculation/apply_after_discount' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Before Discount',
                'value' => '',
            ],
            'tax/calculation/discount_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '1',
            ],
            'tax/calculation/cross_border_trade_enabled' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['total_cat_excl_ship_incl_before_disc_on_incl'] = [
            'tax/calculation/algorithm' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Total',
                'value' => 'TOTAL_BASE_CALCULATION',
            ],
            'tax/calculation/price_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '',
            ],
            'tax/calculation/shipping_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '1',
            ],
            'tax/calculation/apply_after_discount' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Before Discount',
                'value' => '',
            ],
            'tax/calculation/discount_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '1',
            ],
            'tax/calculation/cross_border_trade_enabled' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['unit_cat_excl_ship_excl_after_disc_on_excl'] = [
            'tax/calculation/algorithm' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Unit Price',
                'value' => 'UNIT_BASE_CALCULATION',
            ],
            'tax/calculation/price_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '',
            ],
            'tax/calculation/shipping_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '',
            ],
            'tax/calculation/apply_after_discount' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'After Discount',
                'value' => '1',
            ],
            'tax/calculation/discount_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '',
            ],
            'tax/calculation/cross_border_trade_enabled' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['total_cat_incl_ship_excl_before_disc_on_excl'] = [
            'tax/calculation/algorithm' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Total',
                'value' => 'TOTAL_BASE_CALCULATION',
            ],
            'tax/calculation/price_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '1',
            ],
            'tax/calculation/shipping_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '',
            ],
            'tax/calculation/apply_after_discount' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Before Discount',
                'value' => '',
            ],
            'tax/calculation/discount_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '',
            ],
            'tax/calculation/cross_border_trade_enabled' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['total_cat_excl_ship_incl_after_disc_on_incl'] = [
            'tax/calculation/algorithm' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Total',
                'value' => 'TOTAL_BASE_CALCULATION',
            ],
            'tax/calculation/price_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '',
            ],
            'tax/calculation/shipping_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '1',
            ],
            'tax/calculation/apply_after_discount' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'After Discount',
                'value' => '1',
            ],
            'tax/calculation/discount_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '1',
            ],
            'tax/calculation/cross_border_trade_enabled' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['unit_cat_excl_ship_incl_after_disc_on_excl'] = [
            'tax/calculation/algorithm' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Unit Price',
                'value' => 'UNIT_BASE_CALCULATION',
            ],
            'tax/calculation/price_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '',
            ],
            'tax/calculation/shipping_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '1',
            ],
            'tax/calculation/apply_after_discount' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'After Discount',
                'value' => '1',
            ],
            'tax/calculation/discount_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '',
            ],
            'tax/calculation/cross_border_trade_enabled' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
        ];

        $this->_data['tax_with_fpt_taxed_cat_excl_disc_on_excl'] = [
            'tax/calculation/algorithm' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Total',
                'value' => 'TOTAL_BASE_CALCULATION',
            ],
            'tax/calculation/price_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '',
            ],
            'tax/calculation/shipping_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '',
            ],
            'tax/calculation/apply_after_discount' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'After Discount',
                'value' => '1',
            ],
            'tax/calculation/discount_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '',
            ],
            'tax/calculation/cross_border_trade_enabled' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'tax/weee/enable' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'tax/weee/display_list' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding FPT, FPT description, final price',
                'value' => '2',
            ],
            'tax/weee/display' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding FPT, FPT description, final price',
                'value' => '2',
            ],
            'tax/weee/display_sales' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding FPT, FPT description, final price',
                'value' => '2',
            ],
            'tax/weee/apply_vat' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'tax/weee/include_in_subtotal' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
        ];

        $this->_data['tax_with_fpt_taxed_cat_excl_disc_on_incl'] = [
            'tax/calculation/algorithm' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Total',
                'value' => 'TOTAL_BASE_CALCULATION',
            ],
            'tax/calculation/price_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '',
            ],
            'tax/calculation/shipping_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '',
            ],
            'tax/calculation/apply_after_discount' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'tax/calculation/discount_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '1',
            ],
            'tax/calculation/cross_border_trade_enabled' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'tax/weee/enable' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'tax/weee/display_list' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including FPT and FPT description',
                'value' => '1',
            ],
            'tax/weee/display' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including FPT and FPT description',
                'value' => '1',
            ],
            'tax/weee/display_sales' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including FPT and FPT description',
                'value' => '1',
            ],
            'tax/weee/apply_vat' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'tax/weee/include_in_subtotal' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
        ];

        $this->_data['tax_with_fpt_taxed_cat_incl_disc_on_excl'] = [
            'tax/calculation/algorithm' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Total',
                'value' => 'TOTAL_BASE_CALCULATION',
            ],
            'tax/calculation/price_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '1',
            ],
            'tax/calculation/shipping_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '1',
            ],
            'tax/calculation/apply_after_discount' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'After Discount',
                'value' => '1',
            ],
            'tax/calculation/discount_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '',
            ],
            'tax/calculation/cross_border_trade_enabled' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'tax/weee/enable' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'tax/weee/display_list' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding FPT, FPT description, final price',
                'value' => '2',
            ],
            'tax/weee/display' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding FPT, FPT description, final price',
                'value' => '2',
            ],
            'tax/weee/display_sales' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding FPT, FPT description, final price',
                'value' => '2',
            ],
            'tax/weee/apply_vat' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'tax/weee/include_in_subtotal' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
        ];

        $this->_data['tax_with_fpt_taxed_cat_incl_disc_on_incl'] = [
            'tax/calculation/algorithm' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Total',
                'value' => 'TOTAL_BASE_CALCULATION',
            ],
            'tax/calculation/price_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '1',
            ],
            'tax/calculation/shipping_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '1',
            ],
            'tax/calculation/apply_after_discount' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'tax/calculation/discount_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '1',
            ],
            'tax/calculation/cross_border_trade_enabled' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'tax/weee/enable' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'tax/weee/display_list' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including FPT and FPT description',
                'value' => '1',
            ],
            'tax/weee/display' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including FPT and FPT description',
                'value' => '1',
            ],
            'tax/weee/display_sales' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including FPT and FPT description',
                'value' => '1',
            ],
            'tax/weee/apply_vat' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'tax/weee/include_in_subtotal' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
        ];

        $this->_data['tax_with_fpt_cat_excl_disc_on_excl'] = [
            'tax/calculation/algorithm' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Total',
                'value' => 'TOTAL_BASE_CALCULATION',
            ],
            'tax/calculation/price_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '',
            ],
            'tax/calculation/shipping_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '',
            ],
            'tax/calculation/apply_after_discount' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'After Discount',
                'value' => '1',
            ],
            'tax/calculation/discount_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '',
            ],
            'tax/calculation/cross_border_trade_enabled' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'tax/weee/enable' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'tax/weee/display_list' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding FPT, FPT description, final price',
                'value' => '2',
            ],
            'tax/weee/display' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding FPT, FPT description, final price',
                'value' => '2',
            ],
            'tax/weee/display_sales' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding FPT, FPT description, final price',
                'value' => '2',
            ],
            'tax/weee/apply_vat' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'tax/weee/include_in_subtotal' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
        ];

        $this->_data['tax_with_fpt_cat_excl_disc_on_incl'] = [
            'tax/calculation/algorithm' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Total',
                'value' => 'TOTAL_BASE_CALCULATION',
            ],
            'tax/calculation/price_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '',
            ],
            'tax/calculation/shipping_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '',
            ],
            'tax/calculation/apply_after_discount' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'tax/calculation/discount_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '1',
            ],
            'tax/calculation/cross_border_trade_enabled' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'tax/weee/enable' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'tax/weee/display_list' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding FPT, FPT description, final price',
                'value' => '2',
            ],
            'tax/weee/display' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding FPT, FPT description, final price',
                'value' => '2',
            ],
            'tax/weee/display_sales' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding FPT, FPT description, final price',
                'value' => '2',
            ],
            'tax/weee/apply_vat' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'tax/weee/include_in_subtotal' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
        ];

        $this->_data['tax_with_fpt_cat_incl_disc_on_excl'] = [
            'tax/calculation/algorithm' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Total',
                'value' => 'TOTAL_BASE_CALCULATION',
            ],
            'tax/calculation/price_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '1',
            ],
            'tax/calculation/shipping_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '1',
            ],
            'tax/calculation/apply_after_discount' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'After Discount',
                'value' => '1',
            ],
            'tax/calculation/discount_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding Tax',
                'value' => '',
            ],
            'tax/calculation/cross_border_trade_enabled' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'tax/weee/enable' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'tax/weee/display_list' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding FPT, FPT description, final price',
                'value' => '2',
            ],
            'tax/weee/display' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding FPT, FPT description, final price',
                'value' => '2',
            ],
            'tax/weee/display_sales' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Excluding FPT, FPT description, final price',
                'value' => '2',
            ],
            'tax/weee/apply_vat' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'tax/weee/include_in_subtotal' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
        ];

        $this->_data['tax_with_fpt_cat_incl_disc_on_incl'] = [
            'tax/calculation/algorithm' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Total',
                'value' => 'TOTAL_BASE_CALCULATION',
            ],
            'tax/calculation/price_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '1',
            ],
            'tax/calculation/shipping_includes_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '1',
            ],
            'tax/calculation/apply_after_discount' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => '',
                'value' => '',
            ],
            'tax/calculation/discount_tax' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including Tax',
                'value' => '1',
            ],
            'tax/calculation/cross_border_trade_enabled' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'tax/weee/enable' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
            'tax/weee/display_list' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including FPT and FPT description',
                'value' => '1',
            ],
            'tax/weee/display' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including FPT and FPT description',
                'value' => '1',
            ],
            'tax/weee/display_sales' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Including FPT and FPT description',
                'value' => '1',
            ],
            'tax/weee/apply_vat' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'No',
                'value' => '',
            ],
            'tax/weee/include_in_subtotal' => [
                'scope' => 'tax',
                'scope_id' => '1',
                'label' => 'Yes',
                'value' => '1',
            ],
        ];
    }
}
