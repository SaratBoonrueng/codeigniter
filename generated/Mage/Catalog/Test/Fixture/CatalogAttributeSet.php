<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Catalog\Test\Fixture;

/**
 * Class CatalogAttributeSet
 */
class CatalogAttributeSet extends \Magento\Mtf\Fixture\InjectableFixture
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\Catalog\Test\Repository\CatalogAttributeSet';

    /**
     * @var string
     */
    protected $handlerInterface = 'Mage\Catalog\Test\Handler\CatalogAttributeSet\CatalogAttributeSetInterface';


    /**
     * @var array
     */
    protected $attribute_set_id = [
        'is_required' => '1',
    ];

    /**
     * @var array
     */
    protected $entity_type_id = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $attribute_set_name = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $sort_order = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $skeleton_set = [
        'source' => 'Mage\Catalog\Test\Fixture\CatalogAttributeSet\SkeletonSet',
    ];

    /**
     * @var array
     */
    protected $assigned_attributes = [
        'source' => 'Mage\Catalog\Test\Fixture\CatalogAttributeSet\AssignedAttributes',
    ];

    /**
     * @return mixed
     */
    public function getAttributeSetId()
    {
        return $this->getData('attribute_set_id');
    }

    /**
     * @return mixed
     */
    public function getEntityTypeId()
    {
        return $this->getData('entity_type_id');
    }

    /**
     * @return mixed
     */
    public function getAttributeSetName()
    {
        return $this->getData('attribute_set_name');
    }

    /**
     * @return mixed
     */
    public function getSortOrder()
    {
        return $this->getData('sort_order');
    }

    /**
     * @return mixed
     */
    public function getSkeletonSet()
    {
        return $this->getData('skeleton_set');
    }

    /**
     * @return mixed
     */
    public function getAssignedAttributes()
    {
        return $this->getData('assigned_attributes');
    }
}
