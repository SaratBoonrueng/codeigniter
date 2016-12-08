<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Tax\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class TaxRateEdit
 */
class TaxRateEdit extends BackendPage
{
    const MCA = 'tax_rate/edit';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'formPageActions' => [
            'class' => 'Mage\Adminhtml\Test\Block\FormPageActions',
            'locator' => '.content-header',
            'strategy' => 'css selector',
        ],
        'taxRateForm' => [
            'class' => 'Mage\Adminhtml\Test\Block\Tax\Rate\Edit\Form',
            'locator' => '#base_fieldset',
            'strategy' => 'css selector',
        ],
        'messagesBlock' => [
            'class' => 'Mage\Core\Test\Block\Messages',
            'locator' => '#messages',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\FormPageActions
     */
    public function getFormPageActions()
    {
        return $this->getBlockInstance('formPageActions');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Tax\Rate\Edit\Form
     */
    public function getTaxRateForm()
    {
        return $this->getBlockInstance('taxRateForm');
    }

    /**
     * @return \Mage\Core\Test\Block\Messages
     */
    public function getMessagesBlock()
    {
        return $this->getBlockInstance('messagesBlock');
    }
}
