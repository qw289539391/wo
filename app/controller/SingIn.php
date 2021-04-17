<?php
namespace app\controller;

use app\BaseController;
use think\facade\View;

class SingIn extends BaseController
{
    public function singIn()
    {
        return View::fetch();
    }


}
