<?php
/*** 
@package WordPress
Template Name:we
*/
?>
<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<html manifest=”http://up.weartmap.com/weui/weui.appcache”>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
<title>我的</title>
<link rel="stylesheet" href="http://www.weartmap.com/weui/we.css"/>
<link rel="stylesheet" href="http://www.weartmap.com/weui/weui.css"/>
<link rel="stylesheet" href="http://www.weartmap.com/weui/example.css"/>
<link rel="stylesheet" href="http://www.weartmap.com/weui/icon.css"/>
<script type="text/javascript">
window.onload(){
    if(location.href.indexOf('#reloaded')==-1){
    location.href=location.href+"#reloaded";
    location.reload();
    }
 }
</script>
</head>
<body>
<div class="weui-tab__content" style="display: block;">
<div class="weui-cells">
<a class="weui-cell weui-cell_access" href="http://www.weartmap.com/userinfo/">
<div class="weui-cell__hd">
<div id="home__avatar___3hB8h"><?php echo get_avatar( um_user('ID'), 60); ?></div>
</div>
<div class="weui-cell__bd">

<?php 
      //global $current_user;
      $current_user = get_currentuserinfo();
$fname = $current_user->user_firstname;
if($fname==''){
   $fname = '名字未填写';
}

if ( is_user_logged_in() ) {
  echo'<P>'.$fname.'</P> <dd>帐号:'.$current_user->user_login.'</dd> ';
} else {
  echo '<P>未登录</P>';
}
?> 

</div>
<div class="weui-cell__ft">
</div>
</a>
</div>
</div>


<div class="weui-cells"> 
 
 <a class="weui-cell weui-cell_access" href="http://www.weartmap.com/waplogin">
  <div class="weui-cell__hd"> <i class="home__icon-photo___1gqa3 home__icon___2XgfG"></i> </div>
  <div class="weui-cell__bd">
    <p>登录</p>
  </div>
  <div class="weui-cell__ft"></div>
  </a>
  
  <a class="weui-cell weui-cell_access " href="http://www.weartmap.com/user">
  <div class="weui-cell__hd"> <i class="home__icon-photo___1gqa4 home__icon___2XgfG"></i> </div>
  <div class="weui-cell__bd">
    <p>主页</p>
  </div>
 <div class="weui-cell__ft"></div>
  </a> 
  
  <a class="weui-cell weui-cell_access  weui-cell_access" href="http://www.weartmap.com/wap/ditu.html">
  <div class="weui-cell__hd"> <i class="home__icon-photo___1gqa5 home__icon___2XgfG"></i> </div>
  <div class="weui-cell__bd">
    <p>地图</p>
  </div>
	  <div class="weui-cell__ft"></div>
  </a> 
  
  <a class="weui-cell weui-cell_access weui-cell_access" href="http://www.weartmap.com/wap/article.html">
  <div class="weui-cell__hd"> <i class="home__icon-photo___1gqa6 home__icon___2XgfG"></i> </div>
  <div class="weui-cell__bd">
    <p>投稿</p>
  </div>
    <div class="weui-cell__ft"></div>
  </a> 
  
  </div>
  
<div class="weui-cells">
 
 <a class="weui-cell weui-cell_access" href="http://www.weartmap.com/account">
  <div class="weui-cell__hd"> <i class="home__icon-photo___1gqa7 home__icon___2XgfG"></i> </div>
  <div class="weui-cell__bd">
    <p>设置</p>
  </div>
 <div class="weui-cell__ft"></div>
  </a>

  </div>
  

  
  
</div>
<div class="page__ft"> <img src="../../weui/images/icon_footer_link.png" /> </div>
</div>
<script src="http://www.weartmap.com/weui/zepto.min.js"></script> 
<script type="text/javascript" src="https://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script> 
<script src="https://res.wx.qq.com/open/libs/weuijs/1.0.0/weui.min.js"></script> 
</body>
</html>
