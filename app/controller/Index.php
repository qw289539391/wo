<?php
namespace app\controller;

use app\BaseController;
use app\common\Logic;
use app\Logic\wechatCode;
use think\facade\Db;
use think\facade\Request;
use think\facade\View;

class Index extends BaseController
{
    public function index()
    {

//        header("Content-type:image/png");
//        require "../vendor/phpqrcode/phpqrcode.php";
//        $qRcode = new \QRcode();
//        $data = 'https://www.baidu.com/';//网址或者是文本内容
//        // 纠错级别：L、M、Q、H
//        $level = 'L';
//        // 点的大小：1到10,用于手机端4就可以了
//        $size = 4;
//        // 生成的文件名
//        $qRcode->png($data, false, $level, $size);
//        $imagestring = base64_encode(ob_get_contents());
//        ob_end_clean();
//        return "<img src='data:image/png;base64,{$imagestring}'  />";
    }

    public function test(){
        return View::fetch('index/index');
    }

//    // 生成二维码
//    public function code()
//    {
//        // 生成二维码
//        require "../vendor/phpqrcode/phpqrcode.php";
//        $qRcode = new \QRcode();
//        $data = "http://www.baidu.com";//网址或者是文本内容
//        // 纠错级别：L、M、Q、H
//        $level = 'L';
//        // 点的大小：1到10,用于手机端4就可以了
//        $size = 4;
//        // 生成的文件名
//        $qRcode->png($data, false, $level, $size);
//        $img =ob_get_contents();
//        ob_end_clean();
//        $imginfo = 'data:png;base64,' . chunk_split(base64_encode($img));//转base64
//        return "<img src='{$imginfo}'  />";
//    }

}
