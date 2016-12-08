<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Tax\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class TaxRuleNew
 */
class TaxRuleNew extends BackendPage
{
    const MCA = 'tax_rule/new';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'taxRuleForm' => [
            'class' => 'Mage\Adminhtml\Test\Block\Tax\Rule\Edit\Form',
            'locator' => '#base_fieldset',
            'strategy' => 'css selector',
        ],
        'formPageActions' => [
            'class' => 'Mage\Adminhtml\Test\Block\Tax\Rule\FormPageActions',
            'locator' => '.content-header',
            'strategy' => 'css selector',
        ],
        'messagesBlock' => [
            'class' => 'Mage\Core\Test\Block\Messages',
            'locator' => '#messages',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\Tax\Rule\Edit\Form
     */
    public function getTaxRuleForm()
    {
        return $this->getBlockInstance('taxRuleForm');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\Tax\Rule\FormPageActions
     */
    public function getFormPageActions()
    {
        return $this->getBlockInstance('formPageActions');
    }

    /**
     * @return \Mage\Core\Test\Block\Messages
     */
    public function getMessagesBlock()
    {
        return $this->getBlockInstance('messagesBlock');
    }
}
