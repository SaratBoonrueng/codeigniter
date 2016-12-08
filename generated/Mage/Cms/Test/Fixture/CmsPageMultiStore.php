<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Cms\Test\Fixture;

/**
 * Class CmsPageMultiStore
 */
class CmsPageMultiStore extends CmsPage
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\Cms\Test\Repository\CmsPage';

    /**
     * @var string
     */
    protected $handlerInterface = 'Mage\Cms\Test\Handler\CmsPage\CmsPageInterface';


    /**
     * @var array
     */
    protected $store_id = [
        'is_required' => '1',
        'group' => 'page_information',
        'source' => 'Mage\Cms\Test\Fixture\CmsPage\StoreId',
    ];

    /**
     * @return mixed
     */
    public function getStoreId()
    {
        return $this->getData('store_id');
    }
}
