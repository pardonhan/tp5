<?php
namespace app\index\controller;

use app\common\controller\Common;

class Index extends Common
{
    public function index()
    {

        return $this->fetch();
    }

    public function hello($name='think'){
        return 'hello,'.$name;
    }

}
