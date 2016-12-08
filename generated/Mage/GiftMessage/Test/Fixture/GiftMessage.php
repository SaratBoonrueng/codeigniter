<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\GiftMessage\Test\Fixture;

/**
 * Class GiftMessage
 */
class GiftMessage extends \Magento\Mtf\Fixture\InjectableFixture
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\GiftMessage\Test\Repository\GiftMessage';

    /**
     * @var string
     */
    protected $handlerInterface = 'Mage\GiftMessage\Test\Handler\GiftMessage\GiftMessageInterface';


    /**
     * @var array
     */
    protected $gift_message_id = [
        'is_required' => '1',
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
    protected $sender = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $recipient = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $message = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $allow_gift_options = [
    ];

    /**
     * @var array
     */
    protected $allow_gift_messages_for_order = [
    ];

    /**
     * @var array
     */
    protected $allow_gift_options_for_items = [
    ];

    /**
     * @var array
     */
    protected $items = [
        'source' => 'Mage\GiftMessage\Test\Fixture\GiftMessage\Items',
        'repository' => 'Mage\GiftMessage\Test\Repository\GiftMessage',
    ];

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
    public function getCustomerId()
    {
        return $this->getData('customer_id');
    }

    /**
     * @return mixed
     */
    public function getSender()
    {
        return $this->getData('sender');
    }

    /**
     * @return mixed
     */
    public function getRecipient()
    {
        return $this->getData('recipient');
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->getData('message');
    }

    /**
     * @return mixed
     */
    public function getAllowGiftOptions()
    {
        return $this->getData('allow_gift_options');
    }

    /**
     * @return mixed
     */
    public function getAllowGiftMessagesForOrder()
    {
        return $this->getData('allow_gift_messages_for_order');
    }

    /**
     * @return mixed
     */
    public function getAllowGiftOptionsForItems()
    {
        return $this->getData('allow_gift_options_for_items');
    }

    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->getData('items');
    }
}
