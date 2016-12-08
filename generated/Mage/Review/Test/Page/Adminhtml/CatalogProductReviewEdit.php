<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Review\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class CatalogProductReviewEdit
 */
class CatalogProductReviewEdit extends BackendPage
{
    const MCA = 'catalog_product_review/edit';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'reviewForm' => [
            'class' => 'Mage\Adminhtml\Test\Block\Review\ReviewForm',
            'locator' => '#edit_form',
            'strategy' => 'css selector',
        ],
        'formPageActions' => [
            'class' => 'Mage\Adminhtml\Test\Block\FormPageActions',
            'locator' => '.content-header',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\Review\ReviewForm
     */
    public function getReviewForm()
    {
        return $this->getBlockInstance('reviewForm');
    }

    /**
     * @return \Mage\Adminhtml\Test\Block\FormPageActions
     */
    public function getFormPageActions()
    {
        return $this->getBlockInstance('formPageActions');
    }
}
