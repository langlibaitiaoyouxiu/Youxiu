<?php
use common\services\UrlServices;
use common\composers\BaseController;
$session = BaseController::session();
 ?>

<div class="p_pop h_pop" id="mn_userapp_menu" style="display: none"></div><div id="mu" class="cl">
</div>
</div>
<script src="template/wic_simple/static/js/nv.js" type="text/javascript"></script>

<div id="wp" class="wp">
<div id="pt" class="bm cl">
<div class="y">
<div id="an">
<dl class="cl">

<dd>
</dd>
</dl>
</div>
<script type="text/javascript">announcement();</script>
</div>
<div class="z">
<a href="./" class="nvhm" title="首页">Game Paradise</a><em>&raquo;</em><a href="/">代练通道</a></div>
<div class="z"></div>
</div>


<style id="diy_style" type="text/css"></style>
<script type="text/javascript">
jq(".tablist_t li").each(function(s){
jq(this).hover(function(){
jq(this).addClass("on").siblings().removeClass("on");
jq(".tablist_c .tablist_box").eq(s).show().siblings().hide();
})
})
jq(".wic_ng_user_rank_t li").each(function(s){
jq(this).hover(function(){
jq(this).addClass("on").siblings().removeClass("on");
jq(".wic_ng_user_rank_c .wic_ng_user_rank_box").eq(s).show().siblings().hide();
})
})
</script>

<script type="text/javascript">
jq(".wic_ng_slide").slide({ mainCell:".bd ul",titCell:".hd li",delayTime:600,interTime:5000,triggerTime:50,effect:"fade",autoPlay:true,});
jq(".tablist_news").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",interTime:30,trigger:"click"});
</script>
<div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>


<div id="ct" class="wp cl">
<!--[diy=diy_chart]--><div id="diy_chart" class="area"></div><!--[/diy]-->
<div class="mn">
<div class="fl bm">


<!-- 代练区Star -->
<div class="bm bmw  flg cl">
<div class="bm_h cl">
<span class="o">

</span>
<span class="y"></span><h2><font >犀利的大手子代练</font></h2>
</div>
<div id="category_38" class="bm_c" style="">
    <table cellspacing="0" cellpadding="0" class="fl_tb">
        <tr>
            <?php foreach ($data as $key => $value): ?>
                 
                   <td class="fl_g" width="32.9%">
                <div class="fl_icn_g" style="width: 81px;">  
          
                    <a href="<?=UrlServices::HomeUrl('levedata');?>?id=<?=$value['user_id']  ?>">
                    <?php if($value['user_img'] != "") {?>
                  <img src="<?=UrlServices::HomeUrl('/').$value['user_img']  ?>" align="left" alt="" />
                        <?php }else{ ?>

                    <img src="<?=UrlServices::HomeUrl('/images/touxiang.gif')  ?>" align="left" alt=""  style="width: 80px;height: 80px;"/>

                        <?php } ?>
                </a>

                </div>
                <dl style="margin-left: 81px;">
                    <dt>
                        <?=$value['user_name']  ?>
                            
                      </dt>
                    <!--<dd><em>主题: 473</em>, <em>帖数: 714</em></dd><dd>-->
                    <dd>
               
            个性签名：<span title="2018-4-12 14:50"></span>
    
                    </dd>

                        <?=$value['user_desc']  ?>
                  
                </dl>
            </td>
          
            <?php endforeach ?>
         
        </tr>

                <tr>
            <?php foreach ($list as $key => $value): ?>
                 
                   <td class="fl_g" width="32.9%">
                <div class="fl_icn_g" style="width: 81px;">  
          
                    <a href="<?=UrlServices::HomeUrl('levedata');?>?id=<?=$value['user_id']  ?>">
                    <?php if($value['user_img'] != "") {?>
                  <img src="<?=UrlServices::HomeUrl('/').$value['user_img']  ?>" align="left" alt="" />
                        <?php }else{ ?>

                    <img src="<?=UrlServices::HomeUrl('/images/touxiang.gif')  ?>" align="left" alt=""  style="width: 80px;height: 80px;"/>

                        <?php } ?>
                </a>

                </div>
                <dl style="margin-left: 81px;">
                    <dt>
                        <?=$value['user_name']  ?>
                            
                      </dt>
                    <!--<dd><em>主题: 473</em>, <em>帖数: 714</em></dd><dd>-->
                    <dd>
               
            个性签名：<span title="2018-4-12 14:50"></span>
    
                    </dd>

                        <?=$value['user_desc']  ?>
                  
                </dl>
            </td>
          
            <?php endforeach ?>
         
        </tr>
           


</table>
</div>
</div>

   <center>
       <span>欢迎来到代练专区</span>
   </center>
</div>

<div class="wp mtn">
<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div>




</div>

</div>

</div>

<script type='text/javascript' src='<?=UrlServices::HomeUrl('/')  ?>layui\layui.js'></script>
<script type='text/javascript' src='<?=UrlServices::HomeUrl('/')  ?>layui\layui.all.js'></script>
<script type="text/javascript">
   
</script>
