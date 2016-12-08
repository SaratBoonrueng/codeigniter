<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Tax\Test\Fixture;

/**
 * Class TaxRule
 */
class TaxRule extends \Magento\Mtf\Fixture\InjectableFixture
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\Tax\Test\Repository\TaxRule';

    /**
     * @var string
     */
    protected $handlerInterface = 'Mage\Tax\Test\Handler\TaxRule\TaxRuleInterface';


    /**
     * @var array
     */
    protected $tax_calculation_rule_id = [
        'is_required' => '1',
    ];

    /**
     * @var array
     */
    protected $code = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $priority = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $position = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $calculate_subtotal = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $tax_rate = [
        'source' => 'Mage\Tax\Test\Fixture\TaxRule\TaxRate',
        'repository' => 'Mage\Tax\Test\Repository\TaxRate',
    ];

    /**
     * @var array
     */
    protected $tax_customer_class = [
        'source' => 'Mage\Tax\Test\Fixture\TaxRule\TaxClass',
        'repository' => 'Mage\Tax\Test\Repository\TaxClass',
    ];

    /**
     * @var array
     */
    protected $tax_product_class = [
        'source' => 'Mage\Tax\Test\Fixture\TaxRule\TaxClass',
        'repository' => 'Mage\Tax\Test\Repository\TaxClass',
    ];

    /**
     * @return mixed
     */
    public function getTaxCalculationRuleId()
    {
        return $this->getData('tax_calculation_rule_id');
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->getData('code');
    }

    /**
     * @return mixed
     */
    public function getPriority()
    {
        return $this->getData('priority');
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->getData('position');
    }

    /**
     * @return mixed
     */
    public function getCalculateSubtotal()
    {
        return $this->getData('calculate_subtotal');
    }

    /**
     * @return mixed
     */
    public function getTaxRate()
    {
        return $this->getData('tax_rate');
    }

    /**
     * @return mixed
     */
    public function getTaxCustomerClass()
    {
        return $this->getData('tax_customer_class');
    }

    /**
     * @return mixed
     */
    public function getTaxProductClass()
    {
        return $this->getData('tax_product_class');
    }
}
