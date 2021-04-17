<?php

namespace app\Logic;

use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\LabelAlignment;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Response\QrCodeResponse;

class wechatCode
{
    public static function make_qrcode($text,$size=105,$domain=false)
    {
        $qrCode = new QrCode();

        $qrCode->setText($text) //设置二维码上的内容
        //二维码尺寸
        ->setSize($size)
            ->setPadding(15)
            //设置二维码的纠错率，可以有low、medium、quartile、hign多个纠错率
            ->setErrorCorrection('high')
            //设置二维码的rgb颜色和透明度a，这里是黑色
            ->setForegroundColor(array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0))
            //设置二维码图片的背景底色，这里是白色
            ->setBackgroundColor(array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0));

        header('Content-Type: '.$qrCode->getContentType());

        exit($qrCode->writeString());

    }

}