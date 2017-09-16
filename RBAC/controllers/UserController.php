<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/16
 * Time: 0:40
 */

namespace app\controllers;


use app\controllers\common\BaseController;

class UserController extends BaseController
{
    //伪登录业务方法
    public function actionVlogin(){
        $uid = $this->get("uid",0);
    }

}