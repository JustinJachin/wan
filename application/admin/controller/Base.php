<?php


namespace app\admin\controller;


use think\Controller;

class Base extends Controller
{
    public function initialize(){
        if(!session('admin_name')){
            $this->error('请先登录！','Login/index');
        }
    }
    public function is_login(){

    }
}