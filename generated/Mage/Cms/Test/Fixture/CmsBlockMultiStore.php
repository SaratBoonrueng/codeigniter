<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Cms\Test\Fixture;

/**
 * Class CmsBlockMultiStore
 */
class CmsBlockMultiStore extends Mage\Cms\Test\Fixture\CmsBlock
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\Cms\Test\Repository\CmsBlock';

    /**
     * @var string
     */
    protected $handlerInterface = 'Mage\Cms\Test\Handler\CmsBlock\CmsBlockInterface';


    /**
     * @var array
     */
    protected $stores = [
        'is_required' => '0',
        'source' => 'Mage\Cms\Test\Fixture\CmsBlock\Stores',
    ];

    /**
     * @return mixed
     */
    public function getStores()
    {
        return $this->getData('stores');
    }
}
