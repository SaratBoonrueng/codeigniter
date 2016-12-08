<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Sales\Test\Fixture;

/**
 * Class Order
 */
class Order extends \Magento\Mtf\Fixture\InjectableFixture
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\Sales\Test\Repository\Order';

    /**
     * @var string
     */
    protected $handlerInterface = 'Mage\Sales\Test\Handler\Order\OrderInterface';


    /**
     * @var array
     */
    protected $entity_id = [
        'is_required' => '1',
        'source' => 'Mage\Sales\Test\Fixture\Order\EntityId',
        'group' => 'null',
    ];

    /**
     * @var array
     */
    protected $state = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $status = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $coupon_code = [
        'is_required' => '0',
        'group' => 'null',
    ];

    /**
     * @var array
     */
    protected $protect_code = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $shipping_description = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $is_virtual = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $store_id = [
        'is_required' => '0',
        'source' => 'Mage\Sales\Test\Fixture\Order\StoreId',
        'group' => 'null',
    ];

    /**
     * @var array
     */
    protected $customer_id = [
        'is_required' => '0',
        'source' => 'Mage\Sales\Test\Fixture\Order\CustomerId',
        'group' => 'null',
    ];

    /**
     * @var array
     */
    protected $base_discount_amount = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_discount_canceled = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_discount_invoiced = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_discount_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_grand_total = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_shipping_amount = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_shipping_canceled = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_shipping_invoiced = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_shipping_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_shipping_tax_amount = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_shipping_tax_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_subtotal = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_subtotal_canceled = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_subtotal_invoiced = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_subtotal_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_tax_amount = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_tax_canceled = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_tax_invoiced = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_tax_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_to_global_rate = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_to_order_rate = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_total_canceled = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_total_invoiced = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_total_invoiced_cost = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_total_offline_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_total_online_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_total_paid = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_total_qty_ordered = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_total_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $discount_amount = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $discount_canceled = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $discount_invoiced = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $discount_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $grand_total = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $shipping_amount = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $shipping_canceled = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $shipping_invoiced = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $shipping_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $shipping_tax_amount = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $shipping_tax_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $store_to_base_rate = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $store_to_order_rate = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $subtotal = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $subtotal_canceled = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $subtotal_invoiced = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $subtotal_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $tax_amount = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $tax_canceled = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $tax_invoiced = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $tax_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $total_canceled = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $total_invoiced = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $total_offline_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $total_online_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $total_paid = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $total_qty_ordered = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $total_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $can_ship_partially = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $can_ship_partially_item = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $customer_is_guest = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $customer_note_notify = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $billing_address_id = [
        'is_required' => '0',
        'source' => 'Mage\Sales\Test\Fixture\Order\BillingAddressId',
    ];

    /**
     * @var array
     */
    protected $customer_group_id = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $edit_increment = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $email_sent = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $forced_shipment_with_invoice = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $payment_auth_expiration = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $quote_address_id = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $quote_id = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $shipping_address_id = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $adjustment_negative = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $adjustment_positive = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_adjustment_negative = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_adjustment_positive = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_shipping_discount_amount = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_subtotal_incl_tax = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_total_due = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $payment_authorization_amount = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $shipping_discount_amount = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $subtotal_incl_tax = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $total_due = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $weight = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $customer_dob = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $increment_id = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $applied_rule_ids = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_currency_code = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $customer_email = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $customer_firstname = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $customer_lastname = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $customer_middlename = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $customer_prefix = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $customer_suffix = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $customer_taxvat = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $discount_description = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $ext_customer_id = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $ext_order_id = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $global_currency_code = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $hold_before_state = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $hold_before_status = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $order_currency_code = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $original_increment_id = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $relation_child_id = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $relation_child_real_id = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $relation_parent_id = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $relation_parent_real_id = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $remote_ip = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $shipping_method = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $store_currency_code = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $store_name = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $x_forwarded_for = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $customer_note = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $created_at = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $updated_at = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $total_item_count = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $customer_gender = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $hidden_tax_amount = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_hidden_tax_amount = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $shipping_hidden_tax_amount = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_shipping_hidden_tax_amnt = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $hidden_tax_invoiced = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_hidden_tax_invoiced = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $hidden_tax_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_hidden_tax_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $shipping_incl_tax = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_shipping_incl_tax = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $coupon_rule_name = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_customer_balance_amount = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $customer_balance_amount = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_customer_balance_invoiced = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $customer_balance_invoiced = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_customer_balance_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $customer_balance_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $bs_customer_bal_total_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $customer_bal_total_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gift_cards = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_gift_cards_amount = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gift_cards_amount = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_gift_cards_invoiced = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gift_cards_invoiced = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_gift_cards_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gift_cards_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gift_message_id = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_id = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_allow_gift_receipt = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_add_card = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_base_price = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_price = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_items_base_price = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_items_price = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_card_base_price = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_card_price = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_base_tax_amount = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_tax_amount = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_items_base_tax_amount = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_items_tax_amount = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_card_base_tax_amount = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_card_tax_amount = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_base_price_invoiced = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_price_invoiced = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_items_base_price_invoiced = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_items_price_invoiced = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_card_base_price_invoiced = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_card_price_invoiced = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_base_tax_amount_invoiced = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_tax_amount_invoiced = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_items_base_tax_invoiced = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_items_tax_invoiced = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_card_base_tax_invoiced = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_card_tax_invoiced = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_base_price_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_price_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_items_base_price_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_items_price_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_card_base_price_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_card_price_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_base_tax_amount_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_tax_amount_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_items_base_tax_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_items_tax_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_card_base_tax_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gw_card_tax_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $paypal_ipn_customer_notified = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $reward_points_balance = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_reward_currency_amount = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $reward_currency_amount = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_rwrd_crrncy_amt_invoiced = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $rwrd_currency_amount_invoiced = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_rwrd_crrncy_amnt_refnded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $rwrd_crrncy_amnt_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $reward_points_balance_refund = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $reward_points_balance_refunded = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $reward_salesrule_points = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $id = [
    ];

    /**
     * @var array
     */
    protected $price = [
        'is_required' => '1',
        'group' => 'null',
    ];

    /**
     * @return mixed
     */
    public function getEntityId()
    {
        return $this->getData('entity_id');
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->getData('state');
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->getData('status');
    }

    /**
     * @return mixed
     */
    public function getCouponCode()
    {
        return $this->getData('coupon_code');
    }

    /**
     * @return mixed
     */
    public function getProtectCode()
    {
        return $this->getData('protect_code');
    }

    /**
     * @return mixed
     */
    public function getShippingDescription()
    {
        return $this->getData('shipping_description');
    }

    /**
     * @return mixed
     */
    public function getIsVirtual()
    {
        return $this->getData('is_virtual');
    }

    /**
     * @return mixed
     */
    public function getStoreId()
    {
        return $this->getData('store_id');
    }

    /**
     * @return mixed
     */
    public function getCustomerId()
    {
        return $this->getData('customer_id');
    }

    /**
     * @return mixed
     */
    public function getBaseDiscountAmount()
    {
        return $this->getData('base_discount_amount');
    }

    /**
     * @return mixed
     */
    public function getBaseDiscountCanceled()
    {
        return $this->getData('base_discount_canceled');
    }

    /**
     * @return mixed
     */
    public function getBaseDiscountInvoiced()
    {
        return $this->getData('base_discount_invoiced');
    }

    /**
     * @return mixed
     */
    public function getBaseDiscountRefunded()
    {
        return $this->getData('base_discount_refunded');
    }

    /**
     * @return mixed
     */
    public function getBaseGrandTotal()
    {
        return $this->getData('base_grand_total');
    }

    /**
     * @return mixed
     */
    public function getBaseShippingAmount()
    {
        return $this->getData('base_shipping_amount');
    }

    /**
     * @return mixed
     */
    public function getBaseShippingCanceled()
    {
        return $this->getData('base_shipping_canceled');
    }

    /**
     * @return mixed
     */
    public function getBaseShippingInvoiced()
    {
        return $this->getData('base_shipping_invoiced');
    }

    /**
     * @return mixed
     */
    public function getBaseShippingRefunded()
    {
        return $this->getData('base_shipping_refunded');
    }

    /**
     * @return mixed
     */
    public function getBaseShippingTaxAmount()
    {
        return $this->getData('base_shipping_tax_amount');
    }

    /**
     * @return mixed
     */
    public function getBaseShippingTaxRefunded()
    {
        return $this->getData('base_shipping_tax_refunded');
    }

    /**
     * @return mixed
     */
    public function getBaseSubtotal()
    {
        return $this->getData('base_subtotal');
    }

    /**
     * @return mixed
     */
    public function getBaseSubtotalCanceled()
    {
        return $this->getData('base_subtotal_canceled');
    }

    /**
     * @return mixed
     */
    public function getBaseSubtotalInvoiced()
    {
        return $this->getData('base_subtotal_invoiced');
    }

    /**
     * @return mixed
     */
    public function getBaseSubtotalRefunded()
    {
        return $this->getData('base_subtotal_refunded');
    }

    /**
     * @return mixed
     */
    public function getBaseTaxAmount()
    {
        return $this->getData('base_tax_amount');
    }

    /**
     * @return mixed
     */
    public function getBaseTaxCanceled()
    {
        return $this->getData('base_tax_canceled');
    }

    /**
     * @return mixed
     */
    public function getBaseTaxInvoiced()
    {
        return $this->getData('base_tax_invoiced');
    }

    /**
     * @return mixed
     */
    public function getBaseTaxRefunded()
    {
        return $this->getData('base_tax_refunded');
    }

    /**
     * @return mixed
     */
    public function getBaseToGlobalRate()
    {
        return $this->getData('base_to_global_rate');
    }

    /**
     * @return mixed
     */
    public function getBaseToOrderRate()
    {
        return $this->getData('base_to_order_rate');
    }

    /**
     * @return mixed
     */
    public function getBaseTotalCanceled()
    {
        return $this->getData('base_total_canceled');
    }

    /**
     * @return mixed
     */
    public function getBaseTotalInvoiced()
    {
        return $this->getData('base_total_invoiced');
    }

    /**
     * @return mixed
     */
    public function getBaseTotalInvoicedCost()
    {
        return $this->getData('base_total_invoiced_cost');
    }

    /**
     * @return mixed
     */
    public function getBaseTotalOfflineRefunded()
    {
        return $this->getData('base_total_offline_refunded');
    }

    /**
     * @return mixed
     */
    public function getBaseTotalOnlineRefunded()
    {
        return $this->getData('base_total_online_refunded');
    }

    /**
     * @return mixed
     */
    public function getBaseTotalPaid()
    {
        return $this->getData('base_total_paid');
    }

    /**
     * @return mixed
     */
    public function getBaseTotalQtyOrdered()
    {
        return $this->getData('base_total_qty_ordered');
    }

    /**
     * @return mixed
     */
    public function getBaseTotalRefunded()
    {
        return $this->getData('base_total_refunded');
    }

    /**
     * @return mixed
     */
    public function getDiscountAmount()
    {
        return $this->getData('discount_amount');
    }

    /**
     * @return mixed
     */
    public function getDiscountCanceled()
    {
        return $this->getData('discount_canceled');
    }

    /**
     * @return mixed
     */
    public function getDiscountInvoiced()
    {
        return $this->getData('discount_invoiced');
    }

    /**
     * @return mixed
     */
    public function getDiscountRefunded()
    {
        return $this->getData('discount_refunded');
    }

    /**
     * @return mixed
     */
    public function getGrandTotal()
    {
        return $this->getData('grand_total');
    }

    /**
     * @return mixed
     */
    public function getShippingAmount()
    {
        return $this->getData('shipping_amount');
    }

    /**
     * @return mixed
     */
    public function getShippingCanceled()
    {
        return $this->getData('shipping_canceled');
    }

    /**
     * @return mixed
     */
    public function getShippingInvoiced()
    {
        return $this->getData('shipping_invoiced');
    }

    /**
     * @return mixed
     */
    public function getShippingRefunded()
    {
        return $this->getData('shipping_refunded');
    }

    /**
     * @return mixed
     */
    public function getShippingTaxAmount()
    {
        return $this->getData('shipping_tax_amount');
    }

    /**
     * @return mixed
     */
    public function getShippingTaxRefunded()
    {
        return $this->getData('shipping_tax_refunded');
    }

    /**
     * @return mixed
     */
    public function getStoreToBaseRate()
    {
        return $this->getData('store_to_base_rate');
    }

    /**
     * @return mixed
     */
    public function getStoreToOrderRate()
    {
        return $this->getData('store_to_order_rate');
    }

    /**
     * @return mixed
     */
    public function getSubtotal()
    {
        return $this->getData('subtotal');
    }

    /**
     * @return mixed
     */
    public function getSubtotalCanceled()
    {
        return $this->getData('subtotal_canceled');
    }

    /**
     * @return mixed
     */
    public function getSubtotalInvoiced()
    {
        return $this->getData('subtotal_invoiced');
    }

    /**
     * @return mixed
     */
    public function getSubtotalRefunded()
    {
        return $this->getData('subtotal_refunded');
    }

    /**
     * @return mixed
     */
    public function getTaxAmount()
    {
        return $this->getData('tax_amount');
    }

    /**
     * @return mixed
     */
    public function getTaxCanceled()
    {
        return $this->getData('tax_canceled');
    }

    /**
     * @return mixed
     */
    public function getTaxInvoiced()
    {
        return $this->getData('tax_invoiced');
    }

    /**
     * @return mixed
     */
    public function getTaxRefunded()
    {
        return $this->getData('tax_refunded');
    }

    /**
     * @return mixed
     */
    public function getTotalCanceled()
    {
        return $this->getData('total_canceled');
    }

    /**
     * @return mixed
     */
    public function getTotalInvoiced()
    {
        return $this->getData('total_invoiced');
    }

    /**
     * @return mixed
     */
    public function getTotalOfflineRefunded()
    {
        return $this->getData('total_offline_refunded');
    }

    /**
     * @return mixed
     */
    public function getTotalOnlineRefunded()
    {
        return $this->getData('total_online_refunded');
    }

    /**
     * @return mixed
     */
    public function getTotalPaid()
    {
        return $this->getData('total_paid');
    }

    /**
     * @return mixed
     */
    public function getTotalQtyOrdered()
    {
        return $this->getData('total_qty_ordered');
    }

    /**
     * @return mixed
     */
    public function getTotalRefunded()
    {
        return $this->getData('total_refunded');
    }

    /**
     * @return mixed
     */
    public function getCanShipPartially()
    {
        return $this->getData('can_ship_partially');
    }

    /**
     * @return mixed
     */
    public function getCanShipPartiallyItem()
    {
        return $this->getData('can_ship_partially_item');
    }

    /**
     * @return mixed
     */
    public function getCustomerIsGuest()
    {
        return $this->getData('customer_is_guest');
    }

    /**
     * @return mixed
     */
    public function getCustomerNoteNotify()
    {
        return $this->getData('customer_note_notify');
    }

    /**
     * @return mixed
     */
    public function getBillingAddressId()
    {
        return $this->getData('billing_address_id');
    }

    /**
     * @return mixed
     */
    public function getCustomerGroupId()
    {
        return $this->getData('customer_group_id');
    }

    /**
     * @return mixed
     */
    public function getEditIncrement()
    {
        return $this->getData('edit_increment');
    }

    /**
     * @return mixed
     */
    public function getEmailSent()
    {
        return $this->getData('email_sent');
    }

    /**
     * @return mixed
     */
    public function getForcedShipmentWithInvoice()
    {
        return $this->getData('forced_shipment_with_invoice');
    }

    /**
     * @return mixed
     */
    public function getPaymentAuthExpiration()
    {
        return $this->getData('payment_auth_expiration');
    }

    /**
     * @return mixed
     */
    public function getQuoteAddressId()
    {
        return $this->getData('quote_address_id');
    }

    /**
     * @return mixed
     */
    public function getQuoteId()
    {
        return $this->getData('quote_id');
    }

    /**
     * @return mixed
     */
    public function getShippingAddressId()
    {
        return $this->getData('shipping_address_id');
    }

    /**
     * @return mixed
     */
    public function getAdjustmentNegative()
    {
        return $this->getData('adjustment_negative');
    }

    /**
     * @return mixed
     */
    public function getAdjustmentPositive()
    {
        return $this->getData('adjustment_positive');
    }

    /**
     * @return mixed
     */
    public function getBaseAdjustmentNegative()
    {
        return $this->getData('base_adjustment_negative');
    }

    /**
     * @return mixed
     */
    public function getBaseAdjustmentPositive()
    {
        return $this->getData('base_adjustment_positive');
    }

    /**
     * @return mixed
     */
    public function getBaseShippingDiscountAmount()
    {
        return $this->getData('base_shipping_discount_amount');
    }

    /**
     * @return mixed
     */
    public function getBaseSubtotalInclTax()
    {
        return $this->getData('base_subtotal_incl_tax');
    }

    /**
     * @return mixed
     */
    public function getBaseTotalDue()
    {
        return $this->getData('base_total_due');
    }

    /**
     * @return mixed
     */
    public function getPaymentAuthorizationAmount()
    {
        return $this->getData('payment_authorization_amount');
    }

    /**
     * @return mixed
     */
    public function getShippingDiscountAmount()
    {
        return $this->getData('shipping_discount_amount');
    }

    /**
     * @return mixed
     */
    public function getSubtotalInclTax()
    {
        return $this->getData('subtotal_incl_tax');
    }

    /**
     * @return mixed
     */
    public function getTotalDue()
    {
        return $this->getData('total_due');
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->getData('weight');
    }

    /**
     * @return mixed
     */
    public function getCustomerDob()
    {
        return $this->getData('customer_dob');
    }

    /**
     * @return mixed
     */
    public function getIncrementId()
    {
        return $this->getData('increment_id');
    }

    /**
     * @return mixed
     */
    public function getAppliedRuleIds()
    {
        return $this->getData('applied_rule_ids');
    }

    /**
     * @return mixed
     */
    public function getBaseCurrencyCode()
    {
        return $this->getData('base_currency_code');
    }

    /**
     * @return mixed
     */
    public function getCustomerEmail()
    {
        return $this->getData('customer_email');
    }

    /**
     * @return mixed
     */
    public function getCustomerFirstname()
    {
        return $this->getData('customer_firstname');
    }

    /**
     * @return mixed
     */
    public function getCustomerLastname()
    {
        return $this->getData('customer_lastname');
    }

    /**
     * @return mixed
     */
    public function getCustomerMiddlename()
    {
        return $this->getData('customer_middlename');
    }

    /**
     * @return mixed
     */
    public function getCustomerPrefix()
    {
        return $this->getData('customer_prefix');
    }

    /**
     * @return mixed
     */
    public function getCustomerSuffix()
    {
        return $this->getData('customer_suffix');
    }

    /**
     * @return mixed
     */
    public function getCustomerTaxvat()
    {
        return $this->getData('customer_taxvat');
    }

    /**
     * @return mixed
     */
    public function getDiscountDescription()
    {
        return $this->getData('discount_description');
    }

    /**
     * @return mixed
     */
    public function getExtCustomerId()
    {
        return $this->getData('ext_customer_id');
    }

    /**
     * @return mixed
     */
    public function getExtOrderId()
    {
        return $this->getData('ext_order_id');
    }

    /**
     * @return mixed
     */
    public function getGlobalCurrencyCode()
    {
        return $this->getData('global_currency_code');
    }

    /**
     * @return mixed
     */
    public function getHoldBeforeState()
    {
        return $this->getData('hold_before_state');
    }

    /**
     * @return mixed
     */
    public function getHoldBeforeStatus()
    {
        return $this->getData('hold_before_status');
    }

    /**
     * @return mixed
     */
    public function getOrderCurrencyCode()
    {
        return $this->getData('order_currency_code');
    }

    /**
     * @return mixed
     */
    public function getOriginalIncrementId()
    {
        return $this->getData('original_increment_id');
    }

    /**
     * @return mixed
     */
    public function getRelationChildId()
    {
        return $this->getData('relation_child_id');
    }

    /**
     * @return mixed
     */
    public function getRelationChildRealId()
    {
        return $this->getData('relation_child_real_id');
    }

    /**
     * @return mixed
     */
    public function getRelationParentId()
    {
        return $this->getData('relation_parent_id');
    }

    /**
     * @return mixed
     */
    public function getRelationParentRealId()
    {
        return $this->getData('relation_parent_real_id');
    }

    /**
     * @return mixed
     */
    public function getRemoteIp()
    {
        return $this->getData('remote_ip');
    }

    /**
     * @return mixed
     */
    public function getShippingMethod()
    {
        return $this->getData('shipping_method');
    }

    /**
     * @return mixed
     */
    public function getStoreCurrencyCode()
    {
        return $this->getData('store_currency_code');
    }

    /**
     * @return mixed
     */
    public function getStoreName()
    {
        return $this->getData('store_name');
    }

    /**
     * @return mixed
     */
    public function getXForwardedFor()
    {
        return $this->getData('x_forwarded_for');
    }

    /**
     * @return mixed
     */
    public function getCustomerNote()
    {
        return $this->getData('customer_note');
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->getData('created_at');
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->getData('updated_at');
    }

    /**
     * @return mixed
     */
    public function getTotalItemCount()
    {
        return $this->getData('total_item_count');
    }

    /**
     * @return mixed
     */
    public function getCustomerGender()
    {
        return $this->getData('customer_gender');
    }

    /**
     * @return mixed
     */
    public function getHiddenTaxAmount()
    {
        return $this->getData('hidden_tax_amount');
    }

    /**
     * @return mixed
     */
    public function getBaseHiddenTaxAmount()
    {
        return $this->getData('base_hidden_tax_amount');
    }

    /**
     * @return mixed
     */
    public function getShippingHiddenTaxAmount()
    {
        return $this->getData('shipping_hidden_tax_amount');
    }

    /**
     * @return mixed
     */
    public function getBaseShippingHiddenTaxAmnt()
    {
        return $this->getData('base_shipping_hidden_tax_amnt');
    }

    /**
     * @return mixed
     */
    public function getHiddenTaxInvoiced()
    {
        return $this->getData('hidden_tax_invoiced');
    }

    /**
     * @return mixed
     */
    public function getBaseHiddenTaxInvoiced()
    {
        return $this->getData('base_hidden_tax_invoiced');
    }

    /**
     * @return mixed
     */
    public function getHiddenTaxRefunded()
    {
        return $this->getData('hidden_tax_refunded');
    }

    /**
     * @return mixed
     */
    public function getBaseHiddenTaxRefunded()
    {
        return $this->getData('base_hidden_tax_refunded');
    }

    /**
     * @return mixed
     */
    public function getShippingInclTax()
    {
        return $this->getData('shipping_incl_tax');
    }

    /**
     * @return mixed
     */
    public function getBaseShippingInclTax()
    {
        return $this->getData('base_shipping_incl_tax');
    }

    /**
     * @return mixed
     */
    public function getCouponRuleName()
    {
        return $this->getData('coupon_rule_name');
    }

    /**
     * @return mixed
     */
    public function getBaseCustomerBalanceAmount()
    {
        return $this->getData('base_customer_balance_amount');
    }

    /**
     * @return mixed
     */
    public function getCustomerBalanceAmount()
    {
        return $this->getData('customer_balance_amount');
    }

    /**
     * @return mixed
     */
    public function getBaseCustomerBalanceInvoiced()
    {
        return $this->getData('base_customer_balance_invoiced');
    }

    /**
     * @return mixed
     */
    public function getCustomerBalanceInvoiced()
    {
        return $this->getData('customer_balance_invoiced');
    }

    /**
     * @return mixed
     */
    public function getBaseCustomerBalanceRefunded()
    {
        return $this->getData('base_customer_balance_refunded');
    }

    /**
     * @return mixed
     */
    public function getCustomerBalanceRefunded()
    {
        return $this->getData('customer_balance_refunded');
    }

    /**
     * @return mixed
     */
    public function getBsCustomerBalTotalRefunded()
    {
        return $this->getData('bs_customer_bal_total_refunded');
    }

    /**
     * @return mixed
     */
    public function getCustomerBalTotalRefunded()
    {
        return $this->getData('customer_bal_total_refunded');
    }

    /**
     * @return mixed
     */
    public function getGiftCards()
    {
        return $this->getData('gift_cards');
    }

    /**
     * @return mixed
     */
    public function getBaseGiftCardsAmount()
    {
        return $this->getData('base_gift_cards_amount');
    }

    /**
     * @return mixed
     */
    public function getGiftCardsAmount()
    {
        return $this->getData('gift_cards_amount');
    }

    /**
     * @return mixed
     */
    public function getBaseGiftCardsInvoiced()
    {
        return $this->getData('base_gift_cards_invoiced');
    }

    /**
     * @return mixed
     */
    public function getGiftCardsInvoiced()
    {
        return $this->getData('gift_cards_invoiced');
    }

    /**
     * @return mixed
     */
    public function getBaseGiftCardsRefunded()
    {
        return $this->getData('base_gift_cards_refunded');
    }

    /**
     * @return mixed
     */
    public function getGiftCardsRefunded()
    {
        return $this->getData('gift_cards_refunded');
    }

    /**
     * @return mixed
     */
    public function getGiftMessageId()
    {
        return $this->getData('gift_message_id');
    }

    /**
     * @return mixed
     */
    public function getGwId()
    {
        return $this->getData('gw_id');
    }

    /**
     * @return mixed
     */
    public function getGwAllowGiftReceipt()
    {
        return $this->getData('gw_allow_gift_receipt');
    }

    /**
     * @return mixed
     */
    public function getGwAddCard()
    {
        return $this->getData('gw_add_card');
    }

    /**
     * @return mixed
     */
    public function getGwBasePrice()
    {
        return $this->getData('gw_base_price');
    }

    /**
     * @return mixed
     */
    public function getGwPrice()
    {
        return $this->getData('gw_price');
    }

    /**
     * @return mixed
     */
    public function getGwItemsBasePrice()
    {
        return $this->getData('gw_items_base_price');
    }

    /**
     * @return mixed
     */
    public function getGwItemsPrice()
    {
        return $this->getData('gw_items_price');
    }

    /**
     * @return mixed
     */
    public function getGwCardBasePrice()
    {
        return $this->getData('gw_card_base_price');
    }

    /**
     * @return mixed
     */
    public function getGwCardPrice()
    {
        return $this->getData('gw_card_price');
    }

    /**
     * @return mixed
     */
    public function getGwBaseTaxAmount()
    {
        return $this->getData('gw_base_tax_amount');
    }

    /**
     * @return mixed
     */
    public function getGwTaxAmount()
    {
        return $this->getData('gw_tax_amount');
    }

    /**
     * @return mixed
     */
    public function getGwItemsBaseTaxAmount()
    {
        return $this->getData('gw_items_base_tax_amount');
    }

    /**
     * @return mixed
     */
    public function getGwItemsTaxAmount()
    {
        return $this->getData('gw_items_tax_amount');
    }

    /**
     * @return mixed
     */
    public function getGwCardBaseTaxAmount()
    {
        return $this->getData('gw_card_base_tax_amount');
    }

    /**
     * @return mixed
     */
    public function getGwCardTaxAmount()
    {
        return $this->getData('gw_card_tax_amount');
    }

    /**
     * @return mixed
     */
    public function getGwBasePriceInvoiced()
    {
        return $this->getData('gw_base_price_invoiced');
    }

    /**
     * @return mixed
     */
    public function getGwPriceInvoiced()
    {
        return $this->getData('gw_price_invoiced');
    }

    /**
     * @return mixed
     */
    public function getGwItemsBasePriceInvoiced()
    {
        return $this->getData('gw_items_base_price_invoiced');
    }

    /**
     * @return mixed
     */
    public function getGwItemsPriceInvoiced()
    {
        return $this->getData('gw_items_price_invoiced');
    }

    /**
     * @return mixed
     */
    public function getGwCardBasePriceInvoiced()
    {
        return $this->getData('gw_card_base_price_invoiced');
    }

    /**
     * @return mixed
     */
    public function getGwCardPriceInvoiced()
    {
        return $this->getData('gw_card_price_invoiced');
    }

    /**
     * @return mixed
     */
    public function getGwBaseTaxAmountInvoiced()
    {
        return $this->getData('gw_base_tax_amount_invoiced');
    }

    /**
     * @return mixed
     */
    public function getGwTaxAmountInvoiced()
    {
        return $this->getData('gw_tax_amount_invoiced');
    }

    /**
     * @return mixed
     */
    public function getGwItemsBaseTaxInvoiced()
    {
        return $this->getData('gw_items_base_tax_invoiced');
    }

    /**
     * @return mixed
     */
    public function getGwItemsTaxInvoiced()
    {
        return $this->getData('gw_items_tax_invoiced');
    }

    /**
     * @return mixed
     */
    public function getGwCardBaseTaxInvoiced()
    {
        return $this->getData('gw_card_base_tax_invoiced');
    }

    /**
     * @return mixed
     */
    public function getGwCardTaxInvoiced()
    {
        return $this->getData('gw_card_tax_invoiced');
    }

    /**
     * @return mixed
     */
    public function getGwBasePriceRefunded()
    {
        return $this->getData('gw_base_price_refunded');
    }

    /**
     * @return mixed
     */
    public function getGwPriceRefunded()
    {
        return $this->getData('gw_price_refunded');
    }

    /**
     * @return mixed
     */
    public function getGwItemsBasePriceRefunded()
    {
        return $this->getData('gw_items_base_price_refunded');
    }

    /**
     * @return mixed
     */
    public function getGwItemsPriceRefunded()
    {
        return $this->getData('gw_items_price_refunded');
    }

    /**
     * @return mixed
     */
    public function getGwCardBasePriceRefunded()
    {
        return $this->getData('gw_card_base_price_refunded');
    }

    /**
     * @return mixed
     */
    public function getGwCardPriceRefunded()
    {
        return $this->getData('gw_card_price_refunded');
    }

    /**
     * @return mixed
     */
    public function getGwBaseTaxAmountRefunded()
    {
        return $this->getData('gw_base_tax_amount_refunded');
    }

    /**
     * @return mixed
     */
    public function getGwTaxAmountRefunded()
    {
        return $this->getData('gw_tax_amount_refunded');
    }

    /**
     * @return mixed
     */
    public function getGwItemsBaseTaxRefunded()
    {
        return $this->getData('gw_items_base_tax_refunded');
    }

    /**
     * @return mixed
     */
    public function getGwItemsTaxRefunded()
    {
        return $this->getData('gw_items_tax_refunded');
    }

    /**
     * @return mixed
     */
    public function getGwCardBaseTaxRefunded()
    {
        return $this->getData('gw_card_base_tax_refunded');
    }

    /**
     * @return mixed
     */
    public function getGwCardTaxRefunded()
    {
        return $this->getData('gw_card_tax_refunded');
    }

    /**
     * @return mixed
     */
    public function getPaypalIpnCustomerNotified()
    {
        return $this->getData('paypal_ipn_customer_notified');
    }

    /**
     * @return mixed
     */
    public function getRewardPointsBalance()
    {
        return $this->getData('reward_points_balance');
    }

    /**
     * @return mixed
     */
    public function getBaseRewardCurrencyAmount()
    {
        return $this->getData('base_reward_currency_amount');
    }

    /**
     * @return mixed
     */
    public function getRewardCurrencyAmount()
    {
        return $this->getData('reward_currency_amount');
    }

    /**
     * @return mixed
     */
    public function getBaseRwrdCrrncyAmtInvoiced()
    {
        return $this->getData('base_rwrd_crrncy_amt_invoiced');
    }

    /**
     * @return mixed
     */
    public function getRwrdCurrencyAmountInvoiced()
    {
        return $this->getData('rwrd_currency_amount_invoiced');
    }

    /**
     * @return mixed
     */
    public function getBaseRwrdCrrncyAmntRefnded()
    {
        return $this->getData('base_rwrd_crrncy_amnt_refnded');
    }

    /**
     * @return mixed
     */
    public function getRwrdCrrncyAmntRefunded()
    {
        return $this->getData('rwrd_crrncy_amnt_refunded');
    }

    /**
     * @return mixed
     */
    public function getRewardPointsBalanceRefund()
    {
        return $this->getData('reward_points_balance_refund');
    }

    /**
     * @return mixed
     */
    public function getRewardPointsBalanceRefunded()
    {
        return $this->getData('reward_points_balance_refunded');
    }

    /**
     * @return mixed
     */
    public function getRewardSalesrulePoints()
    {
        return $this->getData('reward_salesrule_points');
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->getData('id');
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->getData('price');
    }
}
