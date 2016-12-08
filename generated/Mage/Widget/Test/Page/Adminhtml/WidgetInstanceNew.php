<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Widget\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class WidgetInstanceNew
 */
class WidgetInstanceNew extends BackendPage
{
    const MCA = 'widget_instance/new';

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
    ];

    /**
     * @return \Mage\Widget\Test\Block\Adminhtml\Widget\Instance\Edit\WidgetForm
     */
    public function getWidgetForm()
    {
        return $this->getBlockInstance('widgetForm');
    }
}
