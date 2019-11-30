<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\facade\Route;

/*Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

Route::get('hello/:name', 'index/hello');

return [

];*/

//Route::get('dd','index/index/demo');
//路由参数类型的限定
/*Route::get('dd/[:id]',function ($id = 0){
//    $id = empty($id) ? 0 : $id;
    return '我的参数值是:'.$id;
});

Route::post('/',function (){
    return '我是post请求';
});

Route::put('/',function (){
    return '我是put请求';
});

Route::delete('/',function (){
    return '我是delete请求';
});

Route::any('/',function (){
    dump($_SERVER);
});*/


//路由分组
/*Route::group(['method' => 'get'], function (){
            Route::get('login',function (){
                return '用户登入';
            });
            Route::get(':id',function ($id){
                return '退出'.$id;
            });
        })->pattern(['id' => '\d+']);
*/

//Route::get('abc','index/index/index')->name('indexr');
//Route::get('abc','@index/index/index')->name('indexr');





















