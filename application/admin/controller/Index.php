<?php
namespace app\admin\controller;
use app\admin\controller\Base;
class Index extends Base
{
    public function index()
    {
//        if (function_exists('curl_init')) {
//            $url='http://wthrcdn.etouch.cn/weather_mini?citykey=101010100';
//
//            return  file_get_contents("compress.zlib://".$url);
//            $url = "http://wthrcdn.etouch.cn/weather_mini?citykey=101010100";
//
//            $ch = curl_init();
//
//            curl_setopt($ch, CURLOPT_URL, $url);
//
//            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//
//            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
//
//            $dxycontent = curl_exec($ch);
//
//            return  $dxycontent;
//
//        } else {
//
//            return '汗！貌似您的服务器尚未开启curl扩展，无法收到来自云落的通知，请联系您的主机商开启，本地调试请无视';
//
//        }
//        exit;
        $ip=$this->getIP();//获取ip地址
        if($ip==='127.0.0.1'){
            $city=$this->getUrl( $data='https://restapi.amap.com/v3/ip?ip=218.72.111.105&output=json&key=d9f93052beb283a33d67e4b28cb370b6');
        }else{
            $city=$this->getUrl( $data='https://restapi.amap.com/v3/ip?ip='.$ip.'&output=json&key=d9f93052beb283a33d67e4b28cb370b6');
        }
//        $test=file_get_contents('http://wthrcdn.etouch.cn/weather_mini?citykey=101010100');

//        $weather=$this->getUrl("compress.zlib://".'https://restapi.amap.com/v3/weather/weatherInfo?city='.$city['adcode'].'&output=json&key=d9f93052beb283a33d67e4b28cb370b6');
        $weather=$this->getUrl("compress.zlib://".'http://wthrcdn.etouch.cn/weather_mini?city=北京市');
        // print_r($weather);
        $this->assign('vo',$weather);

        return view('index');
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
