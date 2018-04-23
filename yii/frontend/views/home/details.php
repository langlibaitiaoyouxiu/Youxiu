<?php 

use common\services\UrlServices;
 ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div style="width: 100%;height: 850px;"> 

        <div class="connect" style=" width: 81%; height: 460px; padding-left: 60px; padding-top: 40px;">
        <p><img src="<?=UrlServices::HomeUrl('/').$data['mai_ming']  ?>" style="width: 700px;height:400px;"></p>
        <p><?=$data['desc_ribe']  ?></p>
    </div>
    <div class="lie" style='margin-top: 20px;margin-left: 50px;' >
       
       <ul >
        <li><h1 style="font-size: 18px;font-weight: 6px;">最新攻略</h1></li>
        <?php foreach ($strateg as $key => $value): ?>
             
     <li><a href="<?=UrlServices::HomeUrl('strateg')  ?>?id=<?=$value['strateg_id']  ?>">
        
        <?php if($value['strateg_name'] ==''){
            echo "抱歉 此游戏下暂无攻略，敬请期待";
        } else {
       
           echo  $value['strateg_name'];
       } ?> 

    </a></li>
         <?php endforeach ?> 
    
        </ul>
    </div>
    <br>
    <span style="margin-left: 50px;">如果喜欢此游戏请扫描二维码下载</span>
    <p style="margin-left: 50px;"> 
        <a href="<?=UrlServices::HomeUrl('/').$data['code']  ?>"><img src="<?=UrlServices::HomeUrl('/').$data['code']  ?>" style='width: 100px;
        height: 100px;'>
        </a>
        </p>
  
    </div>
</body>
</html>







