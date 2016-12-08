<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Review\Test\Fixture;

/**
 * Class Review
 */
class Review extends \Magento\Mtf\Fixture\InjectableFixture
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\Review\Test\Repository\Review';

    /**
     * @var string
     */
    protected $handlerInterface = 'Mage\Review\Test\Handler\Review\ReviewInterface';


    /**
     * @var array
     */
    protected $review_id = [
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
    protected $entity_id = [
        'is_required' => '0',
        'source' => 'Mage\Review\Test\Fixture\Review\EntityId',
    ];

    /**
     * @var array
     */
    protected $entity_pk_value = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $status_id = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $detail_id = [
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
    protected $title = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $detail = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $nickname = [
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
    protected $select_stores = [
        'is_required' => '1',
    ];

    /**
     * @var array
     */
    protected $ratings = [
        'source' => 'Mage\Review\Test\Fixture\Review\Ratings',
    ];

    /**
     * @var array
     */
    protected $customer = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $type = [
        'is_required' => '0',
    ];

    /**
     * @return mixed
     */
    public function getReviewId()
    {
        return $this->getData('review_id');
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
    public function getEntityId()
    {
        return $this->getData('entity_id');
    }

    /**
     * @return mixed
     */
    public function getEntityPkValue()
    {
        return $this->getData('entity_pk_value');
    }

    /**
     * @return mixed
     */
    public function getStatusId()
    {
        return $this->getData('status_id');
    }

    /**
     * @return mixed
     */
    public function getDetailId()
    {
        return $this->getData('detail_id');
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
    public function getTitle()
    {
        return $this->getData('title');
    }

    /**
     * @return mixed
     */
    public function getDetail()
    {
        return $this->getData('detail');
    }

    /**
     * @return mixed
     */
    public function getNickname()
    {
        return $this->getData('nickname');
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
    public function getSelectStores()
    {
        return $this->getData('select_stores');
    }

    /**
     * @return mixed
     */
    public function getRatings()
    {
        return $this->getData('ratings');
    }

    /**
     * @return mixed
     */
    public function getCustomer()
    {
        return $this->getData('customer');
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->getData('type');
    }
}
