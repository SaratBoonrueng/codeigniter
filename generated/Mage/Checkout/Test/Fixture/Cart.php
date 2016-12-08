<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Checkout\Test\Fixture;

/**
 * Class Cart
 */
class Cart extends \Magento\Mtf\Fixture\InjectableFixture
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\Checkout\Test\Repository\Cart';

    /**
     * @var string
     */
    protected $handlerInterface = 'Mage\Checkout\Test\Handler\Cart\CartInterface';


    /**
     * @var array
     */
    protected $entity_id = [
        'is_required' => '1',
    ];

    /**
     * @var array
     */
    protected $store_id = [
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
    protected $converted_at = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $is_active = [
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
    protected $is_multi_shipping = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $items_count = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $items_qty = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $orig_order_id = [
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
    protected $store_to_quote_rate = [
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
    protected $store_currency_code = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $quote_currency_code = [
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
    protected $base_grand_total = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $checkout_method = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $customer_id = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $customer_tax_class_id = [
        'is_required' => '0',
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
    protected $customer_email = [
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
    protected $customer_firstname = [
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
    protected $customer_lastname = [
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
    protected $customer_dob = [
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
    protected $customer_note_notify = [
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
    protected $remote_ip = [
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
    protected $reserved_order_id = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $password_hash = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $coupon_code = [
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
    protected $base_to_global_rate = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_to_quote_rate = [
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
    protected $customer_gender = [
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
    protected $base_subtotal = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $subtotal_with_discount = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_subtotal_with_discount = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $is_changed = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $trigger_recollect = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $ext_shipping_info = [
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
    protected $is_persistent = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $customer_balance_amount_used = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_customer_bal_amount_used = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $use_customer_balance = [
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
    protected $gift_cards_amount = [
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
    protected $gift_cards_amount_used = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $base_gift_cards_amount_used = [
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
    protected $use_reward_points = [
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
    protected $items = [
        'is_required' => '0',
        'source' => 'Mage\Checkout\Test\Fixture\Cart\Items',
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
    public function getStoreId()
    {
        return $this->getData('store_id');
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
    public function getConvertedAt()
    {
        return $this->getData('converted_at');
    }

    /**
     * @return mixed
     */
    public function getIsActive()
    {
        return $this->getData('is_active');
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
    public function getIsMultiShipping()
    {
        return $this->getData('is_multi_shipping');
    }

    /**
     * @return mixed
     */
    public function getItemsCount()
    {
        return $this->getData('items_count');
    }

    /**
     * @return mixed
     */
    public function getItemsQty()
    {
        return $this->getData('items_qty');
    }

    /**
     * @return mixed
     */
    public function getOrigOrderId()
    {
        return $this->getData('orig_order_id');
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
    public function getStoreToQuoteRate()
    {
        return $this->getData('store_to_quote_rate');
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
    public function getStoreCurrencyCode()
    {
        return $this->getData('store_currency_code');
    }

    /**
     * @return mixed
     */
    public function getQuoteCurrencyCode()
    {
        return $this->getData('quote_currency_code');
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
    public function getBaseGrandTotal()
    {
        return $this->getData('base_grand_total');
    }

    /**
     * @return mixed
     */
    public function getCheckoutMethod()
    {
        return $this->getData('checkout_method');
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
    public function getCustomerTaxClassId()
    {
        return $this->getData('customer_tax_class_id');
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
    public function getCustomerEmail()
    {
        return $this->getData('customer_email');
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
    public function getCustomerFirstname()
    {
        return $this->getData('customer_firstname');
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
    public function getCustomerLastname()
    {
        return $this->getData('customer_lastname');
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
    public function getCustomerDob()
    {
        return $this->getData('customer_dob');
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
    public function getCustomerNoteNotify()
    {
        return $this->getData('customer_note_notify');
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
    public function getRemoteIp()
    {
        return $this->getData('remote_ip');
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
    public function getReservedOrderId()
    {
        return $this->getData('reserved_order_id');
    }

    /**
     * @return mixed
     */
    public function getPasswordHash()
    {
        return $this->getData('password_hash');
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
    public function getGlobalCurrencyCode()
    {
        return $this->getData('global_currency_code');
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
    public function getBaseToQuoteRate()
    {
        return $this->getData('base_to_quote_rate');
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
    public function getCustomerGender()
    {
        return $this->getData('customer_gender');
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
    public function getBaseSubtotal()
    {
        return $this->getData('base_subtotal');
    }

    /**
     * @return mixed
     */
    public function getSubtotalWithDiscount()
    {
        return $this->getData('subtotal_with_discount');
    }

    /**
     * @return mixed
     */
    public function getBaseSubtotalWithDiscount()
    {
        return $this->getData('base_subtotal_with_discount');
    }

    /**
     * @return mixed
     */
    public function getIsChanged()
    {
        return $this->getData('is_changed');
    }

    /**
     * @return mixed
     */
    public function getTriggerRecollect()
    {
        return $this->getData('trigger_recollect');
    }

    /**
     * @return mixed
     */
    public function getExtShippingInfo()
    {
        return $this->getData('ext_shipping_info');
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
    public function getIsPersistent()
    {
        return $this->getData('is_persistent');
    }

    /**
     * @return mixed
     */
    public function getCustomerBalanceAmountUsed()
    {
        return $this->getData('customer_balance_amount_used');
    }

    /**
     * @return mixed
     */
    public function getBaseCustomerBalAmountUsed()
    {
        return $this->getData('base_customer_bal_amount_used');
    }

    /**
     * @return mixed
     */
    public function getUseCustomerBalance()
    {
        return $this->getData('use_customer_balance');
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
    public function getGiftCardsAmount()
    {
        return $this->getData('gift_cards_amount');
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
    public function getGiftCardsAmountUsed()
    {
        return $this->getData('gift_cards_amount_used');
    }

    /**
     * @return mixed
     */
    public function getBaseGiftCardsAmountUsed()
    {
        return $this->getData('base_gift_cards_amount_used');
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
    public function getUseRewardPoints()
    {
        return $this->getData('use_reward_points');
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
    public function getItems()
    {
        return $this->getData('items');
    }
}
