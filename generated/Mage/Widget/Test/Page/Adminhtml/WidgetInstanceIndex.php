<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Widget\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class WidgetInstanceIndex
 */
class WidgetInstanceIndex extends BackendPage
{
    const MCA = 'widget_instance/index';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'pageActionsBlock' => [
            'class' => 'Mage\Adminhtml\Test\Block\GridPageActions',
            'locator' => '.form-buttons',
            'strategy' => 'css selector',
        ],
        'widgetGrid' => [
            'class' => 'Mage\Widget\Test\Block\Adminhtml\Widget\WidgetGrid',
            'locator' => '#widgetInstanceGrid',
            'strategy' => 'css selector',
        ],
        'messagesBlock' => [
            'class' => 'Mage\Core\Test\Block\Messages',
            'locator' => '#messages',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\GridPageActions
     */
    public function getPageActionsBlock()
    {
        return $this->getBlockInstance('pageActionsBlock');
    }

    /**
     * @return \Mage\Widget\Test\Block\Adminhtml\Widget\WidgetGrid
     */
    public function getWidgetGrid()
    {
        return $this->getBlockInstance('widgetGrid');
    }

    /**
     * @return \Mage\Core\Test\Block\Messages
     */
    public function getMessagesBlock()
    {
        return $this->getBlockInstance('messagesBlock');
    }
}
