<?php
namespace app\index\controller;
use app\index\controller\Base;
class Index extends Base
{
    public function index()
    {
        $ip=$this->getIP();//获取ip地址
        if($ip==='127.0.0.1'){
            $city=$this->getUrl( $data='https://restapi.amap.com/v3/ip?ip=218.72.111.105&output=json&key=d9f93052beb283a33d67e4b28cb370b6');
        }else{
            $city=$this->getUrl( $data='https://restapi.amap.com/v3/ip?ip='.$ip.'&output=json&key=d9f93052beb283a33d67e4b28cb370b6');
        }
          print_r($city);exit;
        $weather=$this->getUrl('https://restapi.amap.com/v3/weather/weatherInfo?city='.$city['adcode'].'&output=json&key=d9f93052beb283a33d67e4b28cb370b6');
        print_r($weather);
        $this->assign('vo',$weather);

        return view('index');

//        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V5.1<br/><span style="font-size:30px">12载初心不改（2006-2018） - 你值得信赖的PHP框架</span></p></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="eab4b9f840753f8e7"></think>';
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
    private function getIP(){
        static $realip;
        if(isset($_SERVER)){
            if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
                $realip=$_SERVER['HTTP_X_FORWARDED_FOR'];
            }else if(isset($_SERVER['HTTP_CLIENT_IP'])){
                $realip=$_SERVER['HTTP_CLIENT_IP'];
            }else{
                $realip=$_SERVER['REMOTE_ADDR'];
            }
        }else{
            if(getenv('HTTP_X_FORWARDED_FOR')){
                $realip=getenv('HTTP_X_FORWARDED_FOR');
            }else if(getenv('HTTP_CLIENT_IP')){
                $realip=getenv('HTTP_CLIENT_IP');
            }else{
                $realip = getenv("REMOTE_ADDR");
            }
        }
        return $realip;
    }
    private function getUrl($data){
        $arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        );
        $city=file_get_contents($data, false, stream_context_create($arrContextOptions));
        return json_decode($city,true);
    }

}
