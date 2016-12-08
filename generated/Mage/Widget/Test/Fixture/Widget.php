<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Widget\Test\Fixture;

/**
 * Class Widget
 */
class Widget extends \Magento\Mtf\Fixture\InjectableFixture
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\Widget\Test\Repository\Widget';

    /**
     * @var string
     */
    protected $handlerInterface = 'Mage\Widget\Test\Handler\Widget\WidgetInterface';


    /**
     * @var array
     */
    protected $instance_id = [
        'is_required' => '1',
    ];

    /**
     * @var array
     */
    protected $instance_type = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $package_theme = [
        'is_required' => '0',
        'group' => 'settings',
    ];

    /**
     * @var array
     */
    protected $title = [
        'is_required' => '0',
        'group' => 'frontend_properties',
    ];

    /**
     * @var array
     */
    protected $store_ids = [
        'source' => 'Mage\Widget\Test\Fixture\Widget\StoreIds',
    ];

    /**
     * @var array
     */
    protected $parameters = [
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
    protected $type = [
        'group' => 'settings',
    ];

    /**
     * @var array
     */
    protected $widget_instance = [
    ];

    /**
     * @var array
     */
    protected $id = [
    ];

    /**
     * @var array
     */
    protected $page_id = [
    ];

    /**
     * @var array
     */
    protected $layout = [
        'group' => 'layout_updates',
        'source' => 'Mage\Widget\Test\Fixture\Widget\LayoutUpdates',
        'repository' => 'Mage\Widget\Test\Repository\Widget\LayoutUpdates',
    ];

    /**
     * @var array
     */
    protected $widgetOptions = [
        'group' => 'widget_options',
        'source' => 'Mage\Widget\Test\Fixture\Widget\WidgetOptions',
        'repository' => 'Mage\Widget\Test\Repository\Widget',
    ];

    /**
     * @return mixed
     */
    public function getInstanceId()
    {
        return $this->getData('instance_id');
    }

    /**
     * @return mixed
     */
    public function getInstanceType()
    {
        return $this->getData('instance_type');
    }

    /**
     * @return mixed
     */
    public function getPackageTheme()
    {
        return $this->getData('package_theme');
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
    public function getStoreIds()
    {
        return $this->getData('store_ids');
    }

    /**
     * @return mixed
     */
    public function getParameters()
    {
        return $this->getData('parameters');
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
    public function getType()
    {
        return $this->getData('type');
    }

    /**
     * @return mixed
     */
    public function getWidgetInstance()
    {
        return $this->getData('widget_instance');
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->getData('id');
    }

    /**
     * @return mixed
     */
    public function getPageId()
    {
        return $this->getData('page_id');
    }

    /**
     * @return mixed
     */
    public function getLayout()
    {
        return $this->getData('layout');
    }

    /**
     * @return mixed
     */
    public function getWidgetOptions()
    {
        return $this->getData('widgetOptions');
    }
}
