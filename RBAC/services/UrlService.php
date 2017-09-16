<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/15
 * Time: 23:01
 */

namespace app\services;

use yii\helpers\Url;

//作用:统一管理链接，并规范书写
class UrlService
{
    //返回一个内部链接
    public static function buildUrl($url,$params=[]){
        return Url::toRoute(array_merge([$url],$params));
    }

    //返回一个空连接
    public static function buildNullUrl(){
        return "javascript:void(0)";
    }

}