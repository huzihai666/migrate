<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    // echo "this is laravel6";
    //输出时间
    // echo  date("Y-m-d H:i:s");
    //读取配置 Config 底层的配置类  get方法是获取配置信息
    // echo Config::get("app.timezone");
    //设置配置
    // Config::set("app.locale","ssss");
    // echo Config::get("app.locale");
    //获取文件上传的配置
    // echo Config::get("app.app_upload");
    //快速获取配置文件信息
    echo env("DB_CONNECTION");
});

//定义路由 admin路由规则  get请求方式  route 底层的路由类
//如果路径和路由规则匹配到的话,自动的执行function匿名函数
//路由它其实就是一个指导角色,指导请求的方式和路径
Route::get("/admin",function(){
	echo "this is admin";
});

//get基本的路由
Route::get("/home",function(){
	echo "this is home";
});

//模拟post请求
//加载表单
Route::get("/form",function(){
	//加载模板
	return view('form');
});
//post基本路由
Route::post("/insert",function(){
	echo "this is insert";
});

//带参数的路由
Route::get("/adminads/{id}",function($id){
	echo "this is adminads id is".$id;
});

//限制参数的路由
Route::get("/adminshops/{name}",function($name){
	echo "this is adminshops name is ".$name;
})->where('name','[a-z]+');

//传递多个参数
Route::get("/admincates/{id}-{name}",function($id,$name){
	echo "this is admincates id is".$id."name is ".$name;
});

//路由组的设置 []里面可以写中间件=>过滤的效果(项目推荐写法)
Route::group([],function(){
	//子路由
	Route::get("/adminlists",function(){
		echo "this is admin list";
	});
	//子路由2
		Route::get("/adminorder",function(){
		echo "this is admin order";
	});
});