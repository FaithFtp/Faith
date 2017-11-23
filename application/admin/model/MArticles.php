<?php
/**
 * @Author: Marte
 * @Date:   2017-11-18 23:01:28
 * @Last Modified by:   Marte
 * @Last Modified time: 2017-11-20 22:08:17
 */
namespace app\admin\model;

use think\Model;

class MArticles extends Model
{
    // 确定链接表名
    protected $name = 'articles';
    /**
     * [GetArticlesList description]
     * 获取文章列表
     */
    public function GetArticlesList()
    {
        return $this->select();
    }
    /**
     * 添加文章
     * @param $param 文章数组
     */
    public function SetArticle($param)
    {
        $this->allowField(true)->save($param);
        return $this->id;
    }
}
