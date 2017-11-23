<?php

namespace app\admin\controller;

use app\admin\model\MAdmin;
use think\Controller;

class Login extends controller
{
    /**
     * [index 登录页]
     * @return [type] [description]
     */
    public function index()
    {
        return $this->fetch();
    }
    /**
     * [isLogin 验证登录信息]
     * @return boolean [description]
     */
    public function isLogin()
    {
        $userName = input("post.user_name");
        $password = input("post.password");
        //调用验证器验证
        $result = $this->validate(compact('userName', 'password'), 'VLogin');
        if (true !== $result) {
            return $this->error($result);
        }
        //调用模型验证
        $userModel = new MAdmin();
        $hasUser   = $userModel->findUserByName($userName);
        if (empty($hasUser)) {
            return $this->error('管理员不存在！！！');
        }
        //验证密码
        if (md5($password) != $hasUser['password']) {
            return $this->error('密码错误！！！');
        }
        //摧毁密码
        unset($hasUser["password"]);
        //存储session
        session('username', $userName);
        //跳转主页
        $this->redirect('admin\index');
    }
}
