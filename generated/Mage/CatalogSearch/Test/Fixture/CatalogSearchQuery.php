<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\CatalogSearch\Test\Fixture;

/**
 * Class CatalogSearchQuery
 */
class CatalogSearchQuery extends \Magento\Mtf\Fixture\InjectableFixture
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\CatalogSearch\Test\Repository\CatalogSearchQuery';

    /**
     * @var string
     */
    protected $handlerInterface = 'Mage\CatalogSearch\Test\Handler\CatalogSearchQuery\CatalogSearchQueryInterface';


    /**
     * @var array
     */
    protected $query_id = [
        'is_required' => '1',
    ];

    /**
     * @var array
     */
    protected $query_text = [
        'source' => 'Mage\CatalogSearch\Test\Fixture\CatalogSearchQuery\QueryText',
    ];

    /**
     * @var array
     */
    protected $num_results = [
    ];

    /**
     * @var array
     */
    protected $popularity = [
    ];

    /**
     * @var array
     */
    protected $redirect = [
    ];

    /**
     * @var array
     */
    protected $synonym_for = [
    ];

    /**
     * @var array
     */
    protected $store_id = [
    ];

    /**
     * @var array
     */
    protected $display_in_terms = [
    ];

    /**
     * @var array
     */
    protected $is_active = [
    ];

    /**
     * @var array
     */
    protected $is_processed = [
    ];

    /**
     * @var array
     */
    protected $updated_at = [
    ];

    /**
     * @return mixed
     */
    public function getQueryId()
    {
        return $this->getData('query_id');
    }

    /**
     * @return mixed
     */
    public function getQueryText()
    {
        return $this->getData('query_text');
    }

    /**
     * @return mixed
     */
    public function getNumResults()
    {
        return $this->getData('num_results');
    }

    /**
     * @return mixed
     */
    public function getPopularity()
    {
        return $this->getData('popularity');
    }

    /**
     * @return mixed
     */
    public function getRedirect()
    {
        return $this->getData('redirect');
    }

    /**
     * @return mixed
     */
    public function getSynonymFor()
    {
        return $this->getData('synonym_for');
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
    public function getDisplayInTerms()
    {
        return $this->getData('display_in_terms');
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
    public function getIsProcessed()
    {
        return $this->getData('is_processed');
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->getData('updated_at');
    }
}
