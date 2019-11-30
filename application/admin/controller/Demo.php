<?php


namespace app\admin\controller;


use think\Controller;

class Demo extends Controller
{
/*    protected $beforeActionList = [
     //要       请求
      'aa' => ['index','bb']
    ];*/

    public function index(){
        return $this->success('登录成功!',url('admin/demo/su'));
    }

    //成功页面
    public function su(){
        return '我是成功界面';
    }

/*    public function aa(){
        echo '<hr>aaaa<hr>';
    }

    public function bb(){
        return '<hr>bbbb<hr>';
    }*/
}