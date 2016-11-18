<?php
namespace App\Http\Controllers;
use App\Http\Controllers;
use DB;
use Request;
use Session;
use Paginator;
use Input;

class CommonController extends Controller
{
	public function __construct()
	{
		header('Content-type:text/html;charset=utf8');
		//判断是否登陆
		if (!Session::get('uname')||!session::get('id')){
			echo "<script>alert('请先登录');location.href='http://www.wangjianmin.com/shixun1/laravel-v5.1.11/public/index.php'</script>";die;
		}
		$action = \Route::current()->getActionName();
        list($class, $method) = explode('@', $action);
        $class = substr(strrchr($class,'\\'),1);
        $re = ['controller' => $class, 'method' => $method];
		// print_r($re);die;
		$controller = $re['controller'];
		$action = $re['method'];
		print_r($controller);die;
		// if ($action = 'index')
		// {
		// 	return true;
		// }
		
		
	}
	

}









?>