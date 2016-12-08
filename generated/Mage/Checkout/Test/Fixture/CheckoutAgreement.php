<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Checkout\Test\Fixture;

/**
 * Class CheckoutAgreement
 */
class CheckoutAgreement extends \Magento\Mtf\Fixture\InjectableFixture
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\Checkout\Test\Repository\CheckoutAgreement';


    /**
     * @var array
     */
    protected $agreement_id = [
        'is_required' => '1',
    ];

    /**
     * @var array
     */
    protected $name = [
    ];

    /**
     * @var array
     */
    protected $content = [
    ];

    /**
     * @var array
     */
    protected $content_height = [
    ];

    /**
     * @var array
     */
    protected $checkbox_text = [
    ];

    /**
     * @var array
     */
    protected $is_active = [
    ];

    /**
     * @var array
     */
    protected $is_html = [
    ];

    /**
     * @var array
     */
    protected $stores = [
        'source' => 'Mage\Checkout\Test\Fixture\CheckoutAgreement\Stores',
    ];

    /**
     * @return mixed
     */
    public function getAgreementId()
    {
        return $this->getData('agreement_id');
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->getData('name');
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
    public function getContentHeight()
    {
        return $this->getData('content_height');
    }

    /**
     * @return mixed
     */
    public function getCheckboxText()
    {
        return $this->getData('checkbox_text');
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
    public function getIsHtml()
    {
        return $this->getData('is_html');
    }

    /**
     * @return mixed
     */
    public function getStores()
    {
        return $this->getData('stores');
    }
}
