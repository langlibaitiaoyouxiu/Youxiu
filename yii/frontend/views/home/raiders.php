<?php 

use common\services\UrlServices;
 use yii\widgets\LinkPager;
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
<a href="./" class="nvhm" title="首页">Game Paradise</a><em>&raquo;</em><a href="/">游戏攻略</a></div>
<div class="z"></div>
</div>



<style id="diy_style" type="text/css">
 a
  {
    float: left;
    margin-right: 10px;

  }


</style>
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

<!--
<div class="bbscount mb10 cl">
<ul>
        <li class="today  cl">
            <div class="bctit">今日</div> 
            <div class="bcnum">0</div>
        </li>
        <li class="yesterday  cl">
            <div class="bctit">昨日</div> 
            <div class="bcnum">0</div>
        </li>
        <li class="posts  cl">
            <div class="bctit">帖子</div> 
            <div class="bcnum">3981</div>
        </li>
        <li class="member  cl">
            <div class="bctit">会员</div> 
            <div class="bcnum">7255</div>
        </li>
    </ul>
    <div class="y mt10">
        <a href="http://www.dailianzj.com/forum.php?mod=guide&amp;view=new" title="最新回复" class="xi2">最新回复</a><span class="pipe">|</span>欢迎新会员: <em><a href="http://dailianzj.com/home.php?mod=space&amp;username=qq642283796" target="_blank" class="xi2">qq642283796</a></em>    </div>
</div>
-->
<div id="ct" class="wp cl">
<!--[diy=diy_chart]--><div id="diy_chart" class="area"></div><!--[/diy]-->
<div class="mn">
<div class="fl bm">


<!-- 代练区Star -->
<div class="bm bmw  flg cl">
   <div class="bm_h cl">
      <span class="o">
      
      </span>
      <span class="y"></span>
      <h2>近期热门游戏攻略</h2>
   </div>
   <div  id="category_38" class="bm_c" style="height: 700px;">
    <form style="margin-top: 20px; margin-left: 50%;" action="<?=UrlServices::HomeUrl('raiders')  ?>" method="post">
        <input type="" name="name" style="border: 1px red solid;"><input type="submit" name="" value="搜索" style="width:40px;height: 21px; background-color: red;color:#fff" >

    </form>
      <table cellspacing="0" cellpadding="0" class="fl_tb" style="margin-left: 60px;">
         
         <?php foreach ($data as $key => $value): ?>

          <tr> 
            
            <td class="fl_g" width="32.9%">
               <a href="<?=UrlServices::HomeUrl('strateg')  ?>?id=<?=$value['strateg_id']  ?>" target="_blank" class="cate"><?=$value['strateg_name']  ?></a> 
            </td>
          </tr>
          <?php endforeach ?>
            
         
</table>  
      <center>
        <div style="margin-left: 30%;" id="d_iv">
   <?= LinkPager::widget([ 
    'pagination' => $pages, 
    'nextPageLabel' => '>>>', 
    'prevPageLabel' => '<<<', 
]); ?>
                 </div>
                          </center>
</div>
</div>



</div>

<div class="wp mtn">
<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div>




</div>

</div>

    </div>


