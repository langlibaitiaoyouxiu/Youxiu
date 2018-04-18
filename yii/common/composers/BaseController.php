<?php
  namespace common\composers;
  use common\services\UrlServices;
  use yii\web\Controller;
  use yii;
  class  BaseController extends Controller{
    public  $layout = false;
    public $enableCsrfValidation = false;

    public $access_token;
    public $token = "396ab076399cc7aadb98bf10df56e07f";
    public $appid = "wxcf339ee0926dc0f2";
    public $appsecret = "14c19ca4176bfc5ac27814f36d9ea04a";
    //订阅号信息
    // public $token = "d5bf5a31b4050824bf7fe099c9c0c51a";
    // public $appid = "wx0947ea42d1aecb03";
    // public $appsecret = "8072610ea2adcac884860811e004c31f";
 
   //公钥
   public $pubKey = "-----BEGIN PUBLIC KEY-----
MF0wDQYJKoZIhvcNAQEBBQADTAAwSQJCAY6v3KVo5XB7D2vl81Td/I9WFELctxkb
6GqPgLLejmH8vaCPZsdaE4IoSBi6BYBOOFDstuRRgte/raTpV2FEQRqTAgMBAAE=
-----END PUBLIC KEY-----
";
   //私钥
   public $privKey =  "-----BEGIN PRIVATE KEY-----
MIIBWQIBADANBgkqhkiG9w0BAQEFAASCAUMwggE/AgEAAkIBjq/cpWjlcHsPa+Xz
VN38j1YUQty3GRvoao+Ast6OYfy9oI9mx1oTgihIGLoFgE44UOy25FGC17+tpOlX
YURBGpMCAwEAAQJCAYUyZnpPGVQhvd89/roFbqzagjL3VgK7/Lox1phGrMY5FGXN
Q8touyGPwQ3oQmIiWOadAyDfpgjo2UnNDSFCrhXxAiEbL0gBv5fjcj9mTCydJfWR
FOHtD2FmvSfkYRgKIWF4XdkCIQ6qdfYEBen2uqakpAnhotDWcB8x5nVr93SuDvPC
mPz8SwIhGOMaSu96QDGxtRd7qIq93AqAIyT3iLUXNk9lULDqqOVRAiEN05MmfyB8
NQo/dVTZpAn1zVUjc84LweAn9rlOApZtXAUCIRaJkIv8rWZ38NTGD1m1DGGIBUpn
j3lFBUeek0f1QZTu8g==
-----END PRIVATE KEY-----
";
    private static $header = null;
    private static $cookie = null;

    public $callurl = "http://1510b.tunnel.echomod.cn";
    public $modelName;
    
    //GET提交
    public static function get($params,$default=''){
      return Yii::$app->request->get($params,$default);
    }
    
    //POST提交
  	public static function post($params='',$default=''){
        if($params=='')
        {
         
          return Yii::$app->request->post();
        }
        else
        {
          
          return Yii::$app->request->post($params,$default);
        }
  	}

    //判断是否为GET提交
  	public static function isGet(){
        return Yii::$app->request->isget;
  	}

    //判断是否为POST提交
    public static function isPost(){
         return Yii::$app->request->ispost;
  	}

    //判断是否为AJAX提交
  	public static function isAjax(){
        return Yii::$app->request->isAjax;
  	}

    //跳转
    public static function alertJump($msg,$url='/')
    {
      $url = UrlServices::adminUrl($url);
      echo "<script>alert('$msg');location.href='$url'</script>";
    }


    //session  开启
    public static function  session(){
      
       $session =  Yii::$app->session;
       
       //判断session是否开启 
       if(!$session->isACtive){

        //开启session
          $session->open();
       }
       
      return $session;
    }

    //cookie  开启
    public function cookie()
    {
      $cookies = Yii::$app->request->cookies;

    }

    //公钥加密
    public function publicCode($msg)
    {
      openssl_public_encrypt($msg,$public,$this->pubKey);//要加密的字符串，加密之后的密文，加密所使用的密钥
      return base64_encode($public); 
    }
    //私钥解密
    public function privateDecode($public)
    {
      $public = base64_decode($public);
      openssl_private_decrypt($public, $private, $this->privKey);
      return $private;
    }

  public function returnText($toUser,$Content){
       $text_tpl = <<<EOT
<xml>

<ToUserName><![CDATA[%s]]></ToUserName>

<FromUserName><![CDATA[%s]]></FromUserName>

<CreateTime>%s</CreateTime>

<MsgType><![CDATA[text]]></MsgType>

<Content><![CDATA[%s]]></Content>

</xml>
EOT;
   $fromUser = "gh_20b7b523f340";
   $reply_xml = sprintf($text_tpl,$toUser,$fromUser,time(),$Content);
       return $reply_xml;
    }
    
    //静默登陆
    //$static   为1 为静默登陆  为2 为非静默登陆
    public function Becomelogin($static,$callfunction)
    {

      switch($static)
      {
        case 1:

        $scope = "snsapi_base";

        break;

        case 2:

        $scope = "snsapi_userinfo";

        default  :

        $scope = "snsapi_base";
      } 

       //定义方法
      $redirect_uri = urlencode($this->callurl.$callfunction);

      $url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid={$this->appid}&redirect_uri={$redirect_uri}&response_type=code&scope={$scope}&state=STATE#wechat_redirect";
        //跳转方法
       return $url;

    }
    public function Back()
    {
      $code = $this->get('code');
      $url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid={$this->appid}&secret={$this->appsecret}&code={$code}&grant_type=authorization_code";  

       $data = self::curlGet($url);
       $access_arr = json_decode($data,true);

      list($access_token,$refresh_token,$openid) = array($access_arr['access_token'],$access_arr['refresh_token'],$access_arr['openid']);

        $url = "https://api.weixin.qq.com/sns/userinfo?access_token=".$access_token."&openid=".$openid."&lang=zh_CN";
        $str = self::curlGet($url);
        //用户信息
        $user_arr = json_decode($str,true);
       return $user_arr;
    }

    public function getAccessToken()
    {
      $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid={$this->appid}&secret={$this->appsecret}";
      $data = $this->curlGet($url);
      $accesstoken = json_decode($data,true);

      return $accesstoken['access_token'];
    }

    public function getSessionAccesstoken()
    {
      //初始化session类
      $session = $this->session();
      //判断accesss是否存在
      if(!isset($session['accessToken']))
      {
        //不存在调用getAccessToken()获取AccessToken;
        $data = $this->getAccessToken();
        $session->set('accessToken',$data);
        $accessToken = $data; 

      }

      else
      {
        //否则直接从SESSION中取出access_token;
        $accessToken = $session['accessToken'];
      }
        //关闭session
      $this->Closesession();

      return $accessToken;
    }               
    public function Closesession()
    { 
      //初始化session类
      $session = $this->session();
      $session->removeAll();

    }
      
      private static function curl($url,$type,$data = []){
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        //是否直接输出，默认输出 0，1 不输出
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        //是否输出头信息   0：不输出          
        curl_setopt($ch,CURLOPT_HEADER,0);       
        //模拟浏览器信息           
        curl_setopt($ch,CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']);
        //绕过https请求认证
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
        
        //curl_setopt($ch,CURLOPT_CERTINFO,1);//模拟https证书
        
        //最长请求时间
        curl_setopt($ch,CURLOPT_TIMEOUT,10);
        //跟随重定向
        curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
        
        if(!empty(self::$header)){
            //设置header头信息
            curl_setopt($ch,CURLOPT_HEADER,self::$header);
        }
        if(!empty(self::$cookie)){
            //设置cookie信息
            curl_setopt($ch,CURLOPT_COOKIE,self::$header);
        }
        if($type == 'post') {
            //post请求
            curl_setopt($ch, CURLOPT_POST, 1);
            if (is_array($data)) {
                //post请求数据
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
            } else {
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            }
        }
        //执行
        $info = curl_exec($ch);
        //错误信息
        $error = curl_error($ch);
        if($error){
            //错误码
            $erron  = curl_errno($ch);
            return $erron.':'.$error;
        }
        curl_close($ch);
        return $info;

    }

    public static function setHeader($header){
         self::$header = $header;
    }

    public static function setCookie($cookie){
        self::$header = $cookie;
    }

    public static function curlGet($url){
       return self::curl($url,'get');
    }

    public static function curlPost($url,$data = []){
        return self::curl($url,'post',$data);
    }

    public function randStr($count=16)
  {

    $data = [
      'A','B','C','D','E','F','G','H','I','J','K','L','S','M','O','P','Q','R','S','T','U','V','W','X','Y','Z',
      'a','b','c','d','e','f','g','h','i','j','k','l','s','m','o','p','q','r','s','t','u','v','w','x','y','z',
      '1','2','3','4','5','6','7','8','9','0',
    ];
    $len = count($data)-1;
    $msg = '';
    for ($i=1; $i <=$count ; $i++) { 
      $msg .= $data[rand(0,$len)];
    }
    return $msg;
  }
  public function search($table,$condition,$name)
  {
   return $table::find()->andwhere(['or',['like',$condition,$name],])->asArray()->all();
  }

  public function do_upload($logo,$path='uploads')
    {
        $fileInfo=$_FILES[$logo];

        $maxSize=2097152;//允许的最大值

        $allowExt=array('jpeg','jpg','png','gif','wbmp');//允许的类型

        $flag=true;//检测是否为真实图片类型
        //判断错误号

        if ($fileInfo['error']==0) {
          //判断上传文件的大小
          if ($fileInfo['size']>$maxSize) exit('上传文件大小不符合规则');

          $ext = strtolower(pathinfo($fileInfo['name'],PATHINFO_EXTENSION));
          
          if (!in_array($ext,$allowExt)) exit('非法文件类型');

          if (!is_uploaded_file($fileInfo['tmp_name'])) exit('文件不是通过HTTP POST方式上传的');

          //检测是否是真实图片类型
          if ($flag)
          {
            if (@!getimagesize($fileInfo['tmp_name']))
            {
              exit('不是真正的图片类型');
            }
          }

          if (!file_exists($path))
          {
            mkdir($path,0777,true);
            chmod($path,0777);
          }
          //确保文件名唯一防止产生覆盖
          $nuiName=md5(uniqid(microtime(true),true)).'.'.$ext;

          $destination=$path.'/'.$nuiName;

          if (@move_uploaded_file($fileInfo['tmp_name'], $destination))
          {
            return $destination;
          }
          else
          {
            return $fileInfo['name'] . 'error';
          }
        }
        else
        { 
          return false;
          // $this->uploads_error($fileInfo['error']);//验证错误类型
        }
     }
     // public function upload($img,$path = 'uploads')
     // {
     //  $fileInfo = $_FILES[$img];
      
     //  $maxSize = 2097152;

     //  $allowExt=array('jpeg','jpg','png','gif','wbmp','JPG');//允许的类型


     // }
    public function Masstexting($masstype,$msg)
    {
    if($this->access_token=="") $this->access_token = $this->getSessionAccessToken();
    $url = "https://api.weixin.qq.com/cgi-bin/user/get?access_token={$this->access_token}";
    $openid_arr = $this->curlGet($url);
    $openid_arr = json_decode($openid_arr,true);
    $openid = [];

    $openid = $openid_arr["data"]["openid"];
    $send = "https://api.weixin.qq.com/cgi-bin/message/mass/send?access_token={$this->access_token}";
    $res = '';
    foreach($openid as $key => $val){
      $res.=',"'.$val.'"';
    }

  $res = trim($res,",");
 $select = $masstype;

  switch ($select) {
    
    case 'text':
      $content ='{
          "touser":[
          '.$res.'
                ],
          "msgtype": "text",
          "text": { "content": "'.$msg.'"}
           }';
      break;

    case "news":
      $content = '{
          "touser":[
          '.$res.'
              ],
          "mpnews":{
          "media_id":"123dsdajkasd231jhksad"
          },
       "msgtype":"mpnews"，
          "send_ignore_reprint":0
          }';
    break;

    case "voice":
    $content = '{
        "touser":[
        '.$res.'
        ],
       "voice":{
      "media_id":"mLxl6paC7z2Tl-NJT64yzJve8T9c8u9K2x-Ai6Ujd4lIH9IBuF6-2r66mamn_gIT"
       },
      "msgtype":"voice"
      }';
   break;

    default:
       $content ='{
        "touser":[
        '.$res.'
                ],
          "msgtype": "text",
          "text": { "content": "'.$msg.'"}
          }';
      break;
  }
$data = $this->curlPost($send,$content);

return $data;
  
 } 


 //redis 进数据
 public function RedisInsert($static,$name,$value)
 {
    $redis = \Yii::$app->redis;

  
    switch($static)
    {

      case 1:

      return $redis->lpush($name,$value);
     
      break;

      case 0:

      return $redis->rpush($name,$value);

      break;

      default :

      return  $redis->lpush($name,$value);

      break;
     
    }

 }

 //取数据
 public function getRedis($static,$name)
 {
    $redis = \Yii::$app->redis;

    $order = $static;
    switch ($order) 
    {

      case 1:

      return $redis->lpop($name);

      break;

      case 2:

      return $redis->rpop($name); 

      break;

      default:

      return $redis->lpop($name);

      break;

    }


 }


//打印
 public function p($data)
 {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
 }
 //登陆
 public function login($user_name,$userpwd,$name,$pwd,$user)
 {
    $session = $this->session();

    $where[$user_name] = $name; 
   
    $user = $user->findone($where);

    if($user == '')
    {

      return  "该账号不存在";die;
    }
   

    if($user[$user_name] == $name && $user[$userpwd] == $pwd)
    {
      
      $session->set('user',$user);
      
      return  "成功";die;
    }
    else
    {

      return  "失败";die;
    }
 }

 //注册
  public function register($user,$name,$pwd)
  {
    $session = $this->session();

    $user_name = $user."_name";

    $user_pwd = $user.'_pwd';

    $user->$user_name = $name;
    
    $user->$user_pwd = $pwd;

   $res = $user->save(0);

   if($res)
   {
      $session->set('name',$name);

      return 0;
   }
   else
   {
      return 1;
   }

  }
  

    
}