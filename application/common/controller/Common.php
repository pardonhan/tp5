<?php
/**
 * Created by PhpStorm.
 * User: hanfenglin
 * Date: 2017/12/22
 * Time: 14:58
 */
namespace app\common\controller;

use think\Controller;


class Common extends Controller{

    public function  _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub

        $request = \think\Request::instance();

        define('MODULE_NAME',$request->module());

    }
}