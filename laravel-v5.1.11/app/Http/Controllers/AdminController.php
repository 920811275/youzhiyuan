<?php
namespace App\Http\Controllers;
use App\Http\Controllers;
use DB;
use Request;
// use Illuminate\Http\Request;
use Session;
use Paginator;
use Input;
use Cache;
use Memcache;

class AdminController extends Controller
{
    /**
     * 加载首页
     * @return [type] [description]
     */
    public function index()
    {
        //获取轮播图片
        $url= "http://www.ten.com/imgs";
        $re = file_get_contents($url);
        $arr = json_decode($re,true);
        // print_r($arr);die;
        //获取校园简介
        $url1= "http://www.ten.com/desc";
        $res = file_get_contents($url1);
        $arr1 = json_decode($res,true);
        // print_r($arr1);die;
        //获取校园资讯
        $url2 = "http://www.ten.com/newss";
        $res1 = file_get_contents($url2);
        $data = json_decode($res1,true);
        return view('admin/index',['arr'=>$arr['data'],'arr1'=>$arr1['data'],'data'=>$data['data']]);
    } 
    /**
     * 加载自助报道
     * @return [type] [description]
     */
    public function report()
    {
        return view('admin/report');
    }
    /**
     * 加载绿色通道
     * @return [type] [description]
     */
    public function green()
    {
        return view('admin/green');
    }
    /**
     * 加载抵校登记
     * @return [type] [description]
     */
    public function arrive()
    {
        return view('admin/arrive');
    }
    /**
     * 加载推迟报道
     * @return [type] [description]
     */
    public function delay()
    {
        return view('admin/delay');
    }
    /**
     * 加载入学须知
     * @return [type] [description]
     */
    public function know()
    {
        return view('admin/know');
    }
    /**
     * 加载通知公告
     * @return [type] [description]
     */
    public function notice()
    {
        return view('admin/notice');
    }
    /**
     * 加载下载资料
     * @return [type] [description]
     */
    public function data()
    {
        return view('admin/data');
    }
    /**
     * 加载资讯帮助
     * @return [type] [description]
     */
    public function ask()
    {
        return view('admin/ask');
    }
    /**
     * 加载自助入学
     * @return [type] [description]
     */
    public function entrance()
    {
        return view('admin/entrance');
    }
    /**
     * 加载个人中心
     * @return [type] [description]
     */
    public function user_center()
    {
        return view('admin/user_center');
    }
    /**
     * 加载常见问题
     * @return [type] [description]
     */
    public function commonquestion()
    {
        return view('admin/commonquestion');
    }
    /**
     * 加载地址
     * @return [type] [description]
     */
    public function adress()
    {
        return view('admin/adress');
    }
    /**
     * 加载提问
     * @return [type] [description]
     */
    public function tiwen()
    {
        return view('admin/tiwen');
    }
    /**
     * 加载我的问题
     * @return [type] [description]
     */
    public function myanswer()
    {
        $url="http://www.ten.com/myanswer";  
        $method="GET";
        $myanswer_arr = $this->submit($url,$method);
        return view('admin/myanswer',['myanswer_arr'=>$myanswer_arr['data']]);
    }
    /**
     * 加载个人信息
     * @return [type] [description]
     */
    public function user_info()
    {
        return view('admin/user_info');
    }
    /**
     * 处理个人信息的数据
     * @return [type] [description]
     */
    public function  handle_user_info()
    {
        $dorm_arr = Request::all();
        $filename = Input::file('file');
        //上传文件的类型
        $type=$filename->getClientOriginalExtension();
        //创建文件夹
        $path='uploads/';
        if(!is_dir($path)){
            mkdir($path,777,true);
        }
        //拼接
        $new_file = strtotime(date('Y-m-d'));
        $path1= $new_file.'.'.$type;
        //将上传的文件另存
        $filename->move($path,$path1);
        //清除数据中存在的空值
        foreach($dorm_arr as $k=>$v)
        {
            if ($v=='') 
            {
                unset($dorm_arr[$k]);
            }
        }
         $dorm_arr['file'] = "../".$path.$path1;
        $url="http://www.ten.com/dorm";  
        $method="POST";  
         // cur post模拟提交
        $return = $this->beg($url,$method,$dorm_arr);
        // echo json_encode($return);die;
        // print_r($return);die;
            if ($return['data'] == true) 
            {
                return redirect("admin/dorm");
            }else
            {
                "<script>alert('添加失败!');location.href='http://www.wangjianmin.com/shixun1/laravel-v5.1.11/public/admin/user_info'</script>";
            }
    }
    /**
     * 加载宿舍预定
     * @return [type] [description]
     */
    public function dorm()
    {
        return view('admin/dorm');
    }
    /**
     * 加载报到单
     * @return [type] [description]
     */
    public function reportcard()
    {
        $url="http://www.ten.com/reportcard";  
        $method="GET";
        $arr = $this->submit($url,$method);
        return view('admin/reportcard',['arr'=>$arr]);
    }
    /**
     * 加载到校路线
     * @return [type] [description]
     */
    public function route()
    {
        return view('admin/route');
    }

}
?>