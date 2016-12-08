<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Connect\Test\Fixture;

/**
 * Class Connect
 */
class Connect extends \Magento\Mtf\Fixture\InjectableFixture
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\Connect\Test\Repository\Connect';


    /**
     * @var array
     */
    protected $Mage_All_Latest = [
    ];

    /**
     * @return mixed
     */
    public function getMageAllLatest()
    {
        return $this->getData('Mage_All_Latest');
    }
}
