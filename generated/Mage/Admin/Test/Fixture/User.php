<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mage\Admin\Test\Fixture;

/**
 * Class User
 */
class User extends \Magento\Mtf\Fixture\InjectableFixture
{
    /**
     * @var string
     */
    protected $repositoryClass = 'Mage\Admin\Test\Repository\User';

    /**
     * @var string
     */
    protected $handlerInterface = 'Mage\Admin\Test\Handler\User\UserInterface';


    /**
     * @var array
     */
    protected $user_id = [
        'is_required' => '1',
    ];

    /**
     * @var array
     */
    protected $firstname = [
        'is_required' => '0',
        'group' => 'user-info',
    ];

    /**
     * @var array
     */
    protected $lastname = [
        'is_required' => '0',
        'group' => 'user-info',
    ];

    /**
     * @var array
     */
    protected $email = [
        'is_required' => '0',
        'group' => 'user-info',
    ];

    /**
     * @var array
     */
    protected $username = [
        'is_required' => '0',
        'group' => 'user-info',
    ];

    /**
     * @var array
     */
    protected $password = [
        'is_required' => '0',
        'group' => 'user-info',
    ];

    /**
     * @var array
     */
    protected $password_confirmation = [
        'is_required' => '0',
        'group' => 'user-info',
    ];

    /**
     * @var array
     */
    protected $created = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $modified = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $logdate = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $lognum = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $reload_acl_flag = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $is_active = [
        'is_required' => '0',
        'group' => 'user-info',
    ];

    /**
     * @var array
     */
    protected $extra = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $rp_token = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $rp_token_created_at = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $failures_num = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $first_failure = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $lock_expires = [
        'is_required' => '0',
    ];

    /**
     * @var array
     */
    protected $role_id = [
        'source' => 'Mage\Admin\Test\Fixture\User\RoleId',
        'group' => 'user-role',
    ];

    /**
     * @var array
     */
    protected $current_password = [
        'group' => 'user-info',
    ];

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
    public function getFirstname()
    {
        return $this->getData('firstname');
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->getData('lastname');
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->getData('email');
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->getData('username');
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->getData('password');
    }

    /**
     * @return mixed
     */
    public function getPasswordConfirmation()
    {
        return $this->getData('password_confirmation');
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->getData('created');
    }

    /**
     * @return mixed
     */
    public function getModified()
    {
        return $this->getData('modified');
    }

    /**
     * @return mixed
     */
    public function getLogdate()
    {
        return $this->getData('logdate');
    }

    /**
     * @return mixed
     */
    public function getLognum()
    {
        return $this->getData('lognum');
    }

    /**
     * @return mixed
     */
    public function getReloadAclFlag()
    {
        return $this->getData('reload_acl_flag');
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
    public function getExtra()
    {
        return $this->getData('extra');
    }

    /**
     * @return mixed
     */
    public function getRpToken()
    {
        return $this->getData('rp_token');
    }

    /**
     * @return mixed
     */
    public function getRpTokenCreatedAt()
    {
        return $this->getData('rp_token_created_at');
    }

    /**
     * @return mixed
     */
    public function getFailuresNum()
    {
        return $this->getData('failures_num');
    }

    /**
     * @return mixed
     */
    public function getFirstFailure()
    {
        return $this->getData('first_failure');
    }

    /**
     * @return mixed
     */
    public function getLockExpires()
    {
        return $this->getData('lock_expires');
    }

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
    public function getCurrentPassword()
    {
        return $this->getData('current_password');
    }
}
