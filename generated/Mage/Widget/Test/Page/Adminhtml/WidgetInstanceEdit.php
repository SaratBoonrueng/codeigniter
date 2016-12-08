<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Widget\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class WidgetInstanceEdit
 */
class WidgetInstanceEdit extends BackendPage
{
    const MCA = 'widget_instance/edit';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'widgetForm' => [
            'class' => 'Mage\Widget\Test\Block\Adminhtml\Widget\Instance\Edit\WidgetForm',
            'locator' => '[id="page:main-container"]',
            'strategy' => 'css selector',
        ],
        'pageActionsBlock' => [
            'class' => 'Mage\Widget\Test\Block\Adminhtml\FormPageActions',
            'locator' => '.form-buttons',
            'strategy' => 'css selector',
        ],
        'templateBlock' => [
            'class' => 'Mage\Adminhtml\Test\Block\Template',
            'locator' => 'body',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Widget\Test\Block\Adminhtml\Widget\Instance\Edit\WidgetForm
     */
    public function getWidgetForm()
    {
        return $this->getBlockInstance('widgetForm');
    }

    /**
     * @return \Mage\Widget\Test\Block\Adminhtml\FormPageActions
     */
    public function getPageActionsBlock()
    {
        return $this->getBlockInstance('pageActionsBlock');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Template
     */
    public function getTemplateBlock()
    {
        return $this->getBlockInstance('templateBlock');
    }
}
