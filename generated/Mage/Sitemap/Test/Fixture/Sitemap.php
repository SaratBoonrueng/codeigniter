<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Sitemap\Test\Fixture;

/**
 * Class Sitemap
 */
class Sitemap extends \Magento\Mtf\Fixture\InjectableFixture
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\Sitemap\Test\Repository\Sitemap';

    /**
     * @var string
     */
    protected $handlerInterface = 'Mage\Sitemap\Test\Handler\Sitemap\SitemapInterface';


    /**
     * @var array
     */
    protected $sitemap_id = [
        'is_required' => '1',
    ];

    /**
     * @var array
     */
    protected $sitemap_type = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $sitemap_filename = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $sitemap_path = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $sitemap_time = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $store_id = [
        'is_required' => '0',
    ];

    /**
     * @return mixed
     */
    public function getSitemapId()
    {
        return $this->getData('sitemap_id');
    }

    /**
     * @return mixed
     */
    public function getSitemapType()
    {
        return $this->getData('sitemap_type');
    }

    /**
     * @return mixed
     */
    public function getSitemapFilename()
    {
        return $this->getData('sitemap_filename');
    }

    /**
     * @return mixed
     */
    public function getSitemapPath()
    {
        return $this->getData('sitemap_path');
    }

    /**
     * @return mixed
     */
    public function getSitemapTime()
    {
        return $this->getData('sitemap_time');
    }

    /**
     * @return mixed
     */
    public function getStoreId()
    {
        return $this->getData('store_id');
    }
}
