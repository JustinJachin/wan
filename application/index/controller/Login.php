<?php


namespace app\index\controller;


use think\captcha\Captcha;
use think\Controller;
use app\index\validate\LoginValidate;
use think\Request;
use app\index\model\BackUser;
class Login extends Controller
{
    public function index(){

        $captcha=new Captcha();
        if(request()->isPost()){
            $data=input('post.');
//            var_dump('on'.md5('on'.md5($data['password'])));exit;
            if(!$captcha->check($data['code'])){
                return $this->error('验证码错误，正在跳转......','','',2);
            }
            $backUser=new BackUser();
            $res=$backUser->check($data['email'],$data['password']);
            if($res){
                return $this->success('验证通过，正在跳转......','index/index/index','',1);
            }else{
                return $this->error('邮箱或者密码错误 ，重新填写正在跳转.....','','',2);
            }
        }
//        return view('login');//与$this->fetch()方法相同
        return $this->fetch('login');
    }
    public function  verify(){
        ob_clean();
        $captcha = new Captcha();
        return $captcha->entry();
    }
}