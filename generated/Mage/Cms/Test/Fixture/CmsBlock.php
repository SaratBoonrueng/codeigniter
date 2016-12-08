<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Cms\Test\Fixture;

/**
 * Class CmsBlock
 */
class CmsBlock extends \Magento\Mtf\Fixture\InjectableFixture
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
    protected $block_id = [
        'is_required' => '1',
    ];

    /**
     * @var array
     */
    protected $title = [
        'is_required' => '1',
    ];

    /**
     * @var array
     */
    protected $identifier = [
        'is_required' => '1',
    ];

    /**
     * @var array
     */
    protected $content = [
        'is_required' => '1',
    ];

    /**
     * @var array
     */
    protected $is_active = [
        'is_required' => '1',
    ];

    /**
     * @return mixed
     */
    public function getBlockId()
    {
        return $this->getData('block_id');
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
    public function getIdentifier()
    {
        return $this->getData('identifier');
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->getData('content');
    }

    /**
     * @return mixed
     */
    public function getIsActive()
    {
        return $this->getData('is_active');
    }
}
