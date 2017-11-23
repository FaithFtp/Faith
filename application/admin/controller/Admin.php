<?php
namespace app\admin\controller;

class Admin extends Base
{
    /**
     * [index 管理员列表]
     * @return [type] [description]
     */
    public function index()
    {
        return $this->fetch();
    }
    /**
     * [index 管理员添加]
     * @return [type] [description]
     */
    public function add()
    {
        return $this->fetch();
    }
    /**
     * [index 管理员修改]
     * @return [type] [description]
     */
    public function edit()
    {
        return $this->fetch();
    }
    /**
     * [role 角色管理]
     * @return [type] [description]
     */
    public function role()
    {
        return $this->fetch();
    }
    /**
     * [index 角色添加]
     * @return [type] [description]
     */
    public function role_add()
    {
        return $this->fetch();
    }
    /**
     * [index 角色修改]
     * @return [type] [description]
     */
    public function role_edit()
    {
        return $this->fetch();
    }
}
