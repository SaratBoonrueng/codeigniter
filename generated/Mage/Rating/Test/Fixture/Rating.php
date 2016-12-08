<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Rating\Test\Fixture;

/**
 * Class Rating
 */
class Rating extends \Magento\Mtf\Fixture\InjectableFixture
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\Rating\Test\Repository\Rating';

    /**
     * @var string
     */
    protected $handlerInterface = 'Mage\Rating\Test\Handler\RatingInterface';


    /**
     * @var array
     */
    protected $rating_id = [
        'is_required' => '1',
    ];

    /**
     * @var array
     */
    protected $entity_id = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $rating_code = [
        'is_required' => '0',
        'group' => 'rating_information',
    ];

    /**
     * @var array
     */
    protected $position = [
        'is_required' => '0',
        'group' => 'rating_information',
    ];

    /**
     * @var array
     */
    protected $stores = [
        'group' => 'rating_information',
        'source' => 'Mage\Rating\Test\Fixture\Rating\Stores',
    ];

    /**
     * @var array
     */
    protected $options = [
        'group' => 'rating_information',
    ];

    /**
     * @return mixed
     */
    public function getRatingId()
    {
        return $this->getData('rating_id');
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
    public function getRatingCode()
    {
        return $this->getData('rating_code');
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->getData('position');
    }

    /**
     * @return mixed
     */
    public function getStores()
    {
        return $this->getData('stores');
    }

    /**
     * @return mixed
     */
    public function getOptions()
    {
        return $this->getData('options');
    }
}
