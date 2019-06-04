<?php


namespace app\admin\model;


use think\Model;
use think\Session;

class BackUser extends Model
{
    public function check($name,$pwd){
       $user=BackUser::where('email',$name)->find();
       if($user){
           if('on'.md5('on'.md5($pwd))===$user['password']){
              \session('uid',$user['id']);
              \session('admin_name',$user['name']);
               return 1;
           }
       }
       return 0;
    }
}