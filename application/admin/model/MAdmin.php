<?php
/**
 * @Author: name
 * @Date:   2017-11-15 23:43:44
 * @Last Modified by:   name
 * @Last Modified time: 2017-11-22 11:18:20
 */
namespace app\admin\model;

use think\Model;

class MAdmin extends Model
{
    // 确定链接表名
    protected $name = 'admin';
    /**
     * 根据用户名获取管理员信息
     * @param $name 用户名
     */
    public function findUserByName($name)
    {
        return $this->where('user_name', $name)->find();
    }
}
