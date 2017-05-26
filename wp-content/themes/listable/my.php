<?php
/*** 
@package WordPress
Template Name:my
*/

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>个人中心</title>
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/listable/assets/css/ui.css">

</head>
<body>
	<div class="aui-container">
		<div class="aui-page">
			<div class="aui-page-my">
				<div class="aui-my-info">
					<div class="aui-my-info-back">


					<?php if ( um_profile('cover_photo') ) { ?>

					<?php

					if( $ultimatemember->mobile->isMobile() ){
						if ( $ultimatemember->mobile->isTablet() ) {
							echo um_user('cover_photo', 1000);
						} else {
							echo um_user('cover_photo', 220);
						}
					} else {
						echo um_user('cover_photo', 1000);
					}

					?>

					<?php } elseif ( $default_cover && $default_cover['url'] ) {

						$default_cover = $default_cover['url'];

						echo '<img src="'. $default_cover . '" alt="" />';

					} else {

						if ( !isset( $ultimatemember->user->cannot_edit ) ) { ?>

						<a href="#" class="um-cover-add um-manual-trigger" data-parent=".um-cover" data-child=".um-btn-auto-width"><span class="um-cover-add-i"><i class="um-icon-plus um-tip-n" title="<?php _e('Upload a cover photo','ultimatemember'); ?>"></i></span></a>

					<?php }

					} ?>

	     
                    </div>
              <a href="/user/?profiletab=main&um_action=edit"><div class="aui-my-avatar"><?php echo get_avatar( um_user('ID'), 96); ?></div></a>
  
					<div class="aui-mt-location aui-l-red"></div>
				</div>
				<div class="aui-l-content">
					<div class="aui-menu-list aui-menu-list-clear">
						<ul>
                        	<li class="b-line">
								<a href="http://www.weartmap.com/waplogin">
									<div class="aui-icon"><img src="/wp-content/themes/listable/assets/images/iconhome/login.png"></div>
									<h3>注册登录</h3>
									<div class="aui-time"><i class="aui-jump"></i></div>
								</a>
							</li>
							<li class="b-line">
								<a href="http://www.weartmap.com/account">
									<div class="aui-icon"><img src="/wp-content/themes/listable/assets/images/iconhome/account.png"></div>
									<h3>账户设置</h3>
									<div class="aui-time"><i class="aui-jump"></i></div>
								</a>
							</li>
							<li class="b-line">
								<a href="http://www.weartmap.com/user">
									<div class="aui-icon"><img src="/wp-content/themes/listable/assets/images/iconhome/user.png"></div>
									<h3>个人中心</h3>
									<div class="aui-time"><i class="aui-jump"></i></div>
								</a>
							</li>
							<li class="b-line">
								<a href="http://www.weartmap.com/wap/ditu.html">
									<div class="aui-icon"><img src="/wp-content/themes/listable/assets/images/iconhome/ditu.png"></div>
									<h3>地图服务</h3>
									<div class="aui-time"><i class="aui-jump"></i></div>
								</a>
							</li>
							<li class="b-line">
								<a href="http://www.weartmap.com/wap/article.html">
									<div class="aui-icon"><img src="/wp-content/themes/listable/assets/images/iconhome/article.png"></div>
									<h3>发布投稿</h3>
									<div class="aui-time"><i class="aui-jump"></i></div>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
<div class="page__ft"> <img src="./images/icon_footer_link.png" /> </div>
</div>
<script src="./zepto.min.js"></script> 
<script type="text/javascript" src="https://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script> 
<script src="https://res.wx.qq.com/open/libs/weuijs/1.0.0/weui.min.js"></script> 
<script src="./example.js"></script>
</body>
</html>