<?php

namespace app\index\controller;

use think\Controller;

class Demo extends Controller
{
    public function index(){
        return $this->success('登录成!',url('indexr'),'',5);
    }

    //成功页面
    public function su(){
        return '我是成功界面';
    }
}
