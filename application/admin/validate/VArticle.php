<?php
// +----------------------------------------------------------------------
// | snake
// +----------------------------------------------------------------------
// | Copyright (c) 2016~2022 http://baiyf.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: NickBai <1902822973@qq.com>
// +----------------------------------------------------------------------
namespace app\admin\validate;

use think\Validate;

class VArticle extends Validate
{
    protected $rule = [
        ['time', 'require', '文章标题不能为空'],
        ['description', 'require', '文章描述不能为空'],
        ['keywords', 'require', '关键词不能为空'],
    ];

}
