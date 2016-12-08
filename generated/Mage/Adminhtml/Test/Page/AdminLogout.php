<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Adminhtml\Test\Page;

use Magento\Mtf\Page\FrontendPage;

/**
 * Class AdminLogout
 */
class AdminLogout extends FrontendPage
{
    const MCA = 'admin/index/logout';

    /**
     * Blocks' config
     *
     * @var array
     */
    protected $blocks = [
    ];
}
