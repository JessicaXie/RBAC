<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;
use app\services\UrlService;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [    ];
    public $js = [    ];
    //用重写的方法加载bootstrap和jQuery。用min是为了加载更快
    public function registerAssetFiles($view){
        //加版本号
        $release = "20131211";
        $this->css = [
            UrlService::buildUrl( "/bootstrap/css/bootstrap.min.css",['v'=>$release]),
            UrlService::buildUrl("/css/app.css")
        ];
        $this->js =[
            UrlService::buildUrl("/bootstrap/js/bootstrap.min.js"),
            UrlService::buildUrl( "/jquery/jquery.min.js")
        ];
        parent::registerAssetFiles($view);
    }
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
