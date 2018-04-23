<?php
use common\services\UrlServices;
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
<a href="./" class="nvhm" title="首页">Game Paradise</a><em>&raquo;</em><a href="/">近期热门大作</a></div>
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
<span class="y"></span><h2><font>欢迎来到热门游戏中心</font></a></h2>
</div>
<div id="category_38" class="bm_c" style="height: 340px">
    <table cellspacing="0" cellpadding="0" class="fl_tb">
        <tr>
            <?php foreach ($hot as $key => $value): ?>
                
            <td class="fl_g" width="32.9%">
                <div class="fl_icn_g" style="width: 81px;">
                    <a href="<?=UrlServices::HomeUrl('details')  ?>?id=<?=$value['game_id']  ?>"><img src="<?=UrlServices::HomeUrl('/').$value['mai_ming']  ?>" align="left" alt=""  style='width: 80px;height: 80px;'/></a>
                </div>
                <dl style="margin-left: 81px;">
                    <dt><a href="<?=UrlServices::HomeUrl('details');?>>id=<?=$value['game_id']  ?>"><?=$value['game_name']  ?></a></dt>
                    <!--<dd><em>主题: 473</em>, <em>帖数: 714</em></dd><dd>-->
                    <dd>
                         <span title="2018-4-12 14:50"></span>
                    </dd>
                    <a href="<?=UrlServices::HomeUrl('details');?>?id=<?=$value['game_id']  ?>"><?= mb_substr($value['desc_ribe'],0,30,"utf-8")."......"  ?></a>
                </dl>
            </td>
            <?php endforeach ?>
           
        </tr>
        <tr class="fl_row">
              
                
            <td class="fl_g" width="32.9%">
                <div class="fl_icn_g" style="width: 81px;">
                 
                </div>
                <dl style="margin-left: 81px;">
                    <dt></dt>
                    <!--<dd><em>主题: 473</em>, <em>帖数: 714</em></dd><dd>-->
                    <dd>
                         <span title="2018-4-12 14:50"></span>
                    </dd>
               
                </dl>
            </td>
           

</tr>
<tr class="fl_row">
               <?php foreach ($new as $key => $value): ?>
                
            <td class="fl_g" width="32.9%">
                <div class="fl_icn_g" style="width: 81px;">
                    <a href="<?=UrlServices::HomeUrl('details')  ?>?id=<?=$value['game_id']  ?>"><img src="<?=UrlServices::HomeUrl('/').$value['mai_ming']  ?>" align="left" alt=""  style='width: 80px;height: 80px;'/></a>
                </div>
                <dl style="margin-left: 81px;">
                    <dt><a href="<?=UrlServices::HomeUrl('details');?>>id=<?=$value['game_id']  ?>"><?=$value['game_name']  ?></a></dt>
                    <!--<dd><em>主题: 473</em>, <em>帖数: 714</em></dd><dd>-->
                    <dd>
                         <span title="2018-4-12 14:50"></span>
                    </dd>
                    <a href="<?=UrlServices::HomeUrl('details');?>>id=<?=$value['game_id']  ?>"><?= mb_substr($value['desc_ribe'],0,30,"utf-8")."......"  ?></a>
                </dl>
            </td>
            <?php endforeach ?>

</tr>

</table>
</div>
</div>

   <center>
       <span>欢迎来到热门游戏中心</span>
   </center>
</div>

<div class="wp mtn">
<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div>




</div>

</div>

	</div>


