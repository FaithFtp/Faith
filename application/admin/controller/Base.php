<?php
namespace app\admin\controller;

use think\Controller;

class Base extends controller
{
    /**
     * [_initialize 初始化判断]
     * @return [type] [description]
     */
    public function _initialize()
    {
        //判断是否登陆
        if (!session('username')) {
            $this->error('登陆超时！！！', '/admin/login');
        }
        //显示名称
        $this->assign([
            'username' => session('username'),
        ]);
    }
}
