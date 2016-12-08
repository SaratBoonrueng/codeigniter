<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Cms\Test\Fixture;

/**
 * Class CmsPage
 */
class CmsPage extends \Magento\Mtf\Fixture\InjectableFixture
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
    protected $page_id = [
        'is_required' => '1',
    ];

    /**
     * @var array
     */
    protected $title = [
        'is_required' => '0',
        'group' => 'page_information',
    ];

    /**
     * @var array
     */
    protected $root_template = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $meta_keywords = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $meta_description = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $identifier = [
        'is_required' => '0',
        'group' => 'page_information',
    ];

    /**
     * @var array
     */
    protected $content_heading = [
        'is_required' => '0',
        'group' => 'content',
    ];

    /**
     * @var array
     */
    protected $content = [
        'is_required' => '0',
        'group' => 'content',
        'source' => 'Mage\Cms\Test\Fixture\CmsPage\Content',
    ];

    /**
     * @var array
     */
    protected $creation_time = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $update_time = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $is_active = [
        'is_required' => '0',
        'group' => 'page_information',
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
    protected $layout_update_xml = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $custom_theme = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $custom_root_template = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $custom_layout_update_xml = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $custom_theme_from = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $custom_theme_to = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $published_revision_id = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $website_root = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $under_version_control = [
        'is_required' => '0',
        'group' => 'page_information',
    ];

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
    public function getPageId()
    {
        return $this->getData('page_id');
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
    public function getRootTemplate()
    {
        return $this->getData('root_template');
    }

    /**
     * @return mixed
     */
    public function getMetaKeywords()
    {
        return $this->getData('meta_keywords');
    }

    /**
     * @return mixed
     */
    public function getMetaDescription()
    {
        return $this->getData('meta_description');
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
    public function getContentHeading()
    {
        return $this->getData('content_heading');
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
    public function getCreationTime()
    {
        return $this->getData('creation_time');
    }

    /**
     * @return mixed
     */
    public function getUpdateTime()
    {
        return $this->getData('update_time');
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
    public function getSortOrder()
    {
        return $this->getData('sort_order');
    }

    /**
     * @return mixed
     */
    public function getLayoutUpdateXml()
    {
        return $this->getData('layout_update_xml');
    }

    /**
     * @return mixed
     */
    public function getCustomTheme()
    {
        return $this->getData('custom_theme');
    }

    /**
     * @return mixed
     */
    public function getCustomRootTemplate()
    {
        return $this->getData('custom_root_template');
    }

    /**
     * @return mixed
     */
    public function getCustomLayoutUpdateXml()
    {
        return $this->getData('custom_layout_update_xml');
    }

    /**
     * @return mixed
     */
    public function getCustomThemeFrom()
    {
        return $this->getData('custom_theme_from');
    }

    /**
     * @return mixed
     */
    public function getCustomThemeTo()
    {
        return $this->getData('custom_theme_to');
    }

    /**
     * @return mixed
     */
    public function getPublishedRevisionId()
    {
        return $this->getData('published_revision_id');
    }

    /**
     * @return mixed
     */
    public function getWebsiteRoot()
    {
        return $this->getData('website_root');
    }

    /**
     * @return mixed
     */
    public function getUnderVersionControl()
    {
        return $this->getData('under_version_control');
    }

    /**
     * @return mixed
     */
    public function getStoreId()
    {
        return $this->getData('store_id');
    }
}
