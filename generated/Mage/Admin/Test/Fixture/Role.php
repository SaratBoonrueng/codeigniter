<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Admin\Test\Fixture;

/**
 * Class Role
 */
class Role extends \Magento\Mtf\Fixture\InjectableFixture
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\Admin\Test\Repository\Role';

    /**
     * @var string
     */
    protected $handlerInterface = 'Mage\Admin\Test\Handler\Role\RoleInterface';


    /**
     * @var array
     */
    protected $role_id = [
        'is_required' => '1',
    ];

    /**
     * @var array
     */
    protected $parent_id = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $tree_level = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $sort_order = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $role_type = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $user_id = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $rolename = [
        'is_required' => '0',
        'group' => 'role-info',
    ];

    /**
     * @var array
     */
    protected $gws_is_all = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $gws_websites = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $current_password = [
        'is_required' => '0',
        'group' => 'role-info',
    ];

    /**
     * @var array
     */
    protected $gws_store_groups = [
        'is_required' => '0',
        'source' => 'Mage\Admin\Test\Fixture\Role\GwsStoreGroups',
    ];

    /**
     * @var array
     */
    protected $all = [
        'group' => 'role-resources',
    ];

    /**
     * @var array
     */
    protected $roles_resources = [
        'group' => 'role-resources',
        'source' => 'Mage\Admin\Test\Fixture\Role\RolesResources',
    ];

    /**
     * @var array
     */
    protected $resource_access = [
        'group' => 'role-resources',
    ];

    /**
     * @var array
     */
    protected $in_role_users = [
        'group' => 'in_role_users',
        'source' => 'Mage\Admin\Test\Fixture\Role\InRoleUsers',
    ];

    /**
     * @return mixed
     */
    public function getRoleId()
    {
        return $this->getData('role_id');
    }

    /**
     * @return mixed
     */
    public function getParentId()
    {
        return $this->getData('parent_id');
    }

    /**
     * @return mixed
     */
    public function getTreeLevel()
    {
        return $this->getData('tree_level');
    }

    /**
     * @return mixed
     */
    public function getSortOrder()
    {
        return $this->getData('sort_order');
    }

    /**
     * @return mixed
     */
    public function getRoleType()
    {
        return $this->getData('role_type');
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->getData('user_id');
    }

    /**
     * @return mixed
     */
    public function getRolename()
    {
        return $this->getData('rolename');
    }

    /**
     * @return mixed
     */
    public function getGwsIsAll()
    {
        return $this->getData('gws_is_all');
    }

    /**
     * @return mixed
     */
    public function getGwsWebsites()
    {
        return $this->getData('gws_websites');
    }

    /**
     * @return mixed
     */
    public function getCurrentPassword()
    {
        return $this->getData('current_password');
    }

    /**
     * @return mixed
     */
    public function getGwsStoreGroups()
    {
        return $this->getData('gws_store_groups');
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->getData('all');
    }

    /**
     * @return mixed
     */
    public function getRolesResources()
    {
        return $this->getData('roles_resources');
    }

    /**
     * @return mixed
     */
    public function getResourceAccess()
    {
        return $this->getData('resource_access');
    }

    /**
     * @return mixed
     */
    public function getInRoleUsers()
    {
        return $this->getData('in_role_users');
    }
}
