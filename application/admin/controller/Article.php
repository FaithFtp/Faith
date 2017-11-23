<?php
namespace app\admin\controller;

class Article extends Base
{
    /**
     * [index 文章列表]
     * @return [type] [description]
     */
    public function index()
    {
        return $this->fetch();
    }
    /**
     * [index 文章添加]
     * @return [type] [description]
     */
    public function add()
    {
        return $this->fetch();
    }
    /**
     * [index 文章修改]
     * @return [type] [description]
     */
    public function edit()
    {
        return $this->fetch();
    }
    /**
     * [index 文章分类]
     * @return [type] [description]
     */
    public function category()
    {
        return $this->fetch();
    }
    /**
     * [index 文章修改]
     * @return [type] [description]
     */
    public function cate_edit()
    {
        return $this->fetch();
    }
    /**
     * [index 文章回收]
     * @return [type] [description]
     */
    public function del()
    {
        return $this->fetch();
    }

}
