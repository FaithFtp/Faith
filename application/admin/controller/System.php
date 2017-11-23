<?php

namespace app\admin\controller;

class System extends Base
{
    /**
     * [index 系统管理]
     * @return [type] [description]
     */
    public function index()
    {
        return $this->fetch();
    }
    /**
     * [log 系统日志]
     * @return [type] [description]
     */
    public function log()
    {
        return $this->fetch();
    }
    /**
     * [link 友情链接]
     * @return [type] [description]
     */
    public function link()
    {
        return $this->fetch();
    }
    /**
     * [link_edit 友情链接修改]
     * @return [type] [description]
     */
    public function link_edit()
    {
        return $this->fetch();
    }
    /**
     * [qq 三方登录]
     * @return [type] [description]
     */
    public function qq()
    {
        return $this->fetch();
    }
}
