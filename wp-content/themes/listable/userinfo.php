<?php
/*** 
@package WordPress
Template Name:userinfo
*/
?>
<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<html manifest=”http://up.weartmap.com/weui/weui.appcache”>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
	<title>个人资料</title>
	<link rel="stylesheet" href="../../weui/we.css"/>
	<link rel="stylesheet" href="../../weui/weui.css"/>
	<link rel="stylesheet" href="../../weui/example.css"/>
	<link rel="stylesheet" href="../../weui/icon.css"/>
</head>

<body>

<div class="weui-panel__bd">
  <div class="weui-media-box weui-media-box_small-appmsg">
    <div class="weui-cells"> <a class="weui-celll" onclick="history.go(-1);">
      <div class="weui-cell__hds"> <i class="home__back  home__icon___2XgfA"></i> </div>
      <div class="weui-cell__bd">
        <pp>返回</pp>
      </div>
      </a> </div>
  </div>
</div>

	<div class="profile">
		<div class="weui-cells">
			<div id="avatarCell" class="weui-cell">
				<div class="weui-cell__bd">
					<p>头像</p>
				</div>
				<div id="home__avatar___3hB8d">
					<?php echo get_avatar( um_user('ID'), 60); ?>
				</div>
			</div>


			<div class="weui-cell">
				<div class="weui-cell__bd">
					<p>名字</p>
				</div>
				<div class="weui-cell__ft"><?php echo $current_user->user_firstname; ?> </div>
			</div>

			<div class="weui-cell ">
				<div class="weui-cell__bd">
					<p>帐号</p>
				</div>
				<div class="weui-cell__ft"> <?php echo $current_user->user_login; ?></div>
			</div>


		</div>


		<div class="weui-cells">


			<div class="weui-cell">
				<div class="weui-cell__bd">
					<p>邮箱</p>
				</div>
				<div class="weui-cell__ft"><?php echo $current_user->user_email; ?></div>
			</div>

 <a class="weui-cell weui-cell_access" href="http://www.weartmap.com/user/<?php echo $current_user->ID ; ?>/">
  <div class="weui-cell__hd"> </div>
  <div class="weui-cell__bd">
    <p>我的主页</p>
  </div>
  <div class="weui-cell__ft"></div>
  </a>
	</div>

		<div class="weui-btn-area">
			<button id="exitBtn" class="weui-btn weui-btn_unlogin" onClick="location.href='http://www.weartmap.com/user/<?php echo $current_user->ID ; ?>/?profiletab=main&um_action=edit'"/>编辑资料</button>
		</div>

	</div>
<div class="page__ft"> <img src="../../weui/images/icon_footer_link.png" /> </div>
</div>
<script src="http://www.weartmap.com/weui/zepto.min.js"></script> 
<script type="text/javascript" src="https://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script> 
<script src="https://res.wx.qq.com/open/libs/weuijs/1.0.0/weui.min.js"></script> 
</body>
</html>
