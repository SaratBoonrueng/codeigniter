<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Adminhtml\Test\Page\Adminhtml;

use Magento\Mtf\Page\BackendPage;

/**
 * Class ProcessList
 */
class ProcessList extends BackendPage
{
    const MCA = 'process/list';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
        'indexManagementGrid' => [
            'class' => 'Mage\Adminhtml\Test\Block\System\Process\Grid',
            'locator' => '#indexer_processes_grid',
            'strategy' => 'css selector',
        ],
    ];

    /**
     * @return \Mage\Adminhtml\Test\Block\System\Process\Grid
     */
    public function getIndexManagementGrid()
    {
        return $this->getBlockInstance('indexManagementGrid');
    }
}
