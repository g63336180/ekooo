<?php
/*
@package WordPress
Template Name: music-hall/
 */
?>
<!DOCTYPE html>
<html lang="zh-cmn-Hans">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
	<title>音乐厅-推荐&文章</title>
	<link rel="stylesheet" href="http://www.weartmap.com/weui/weui.css"/>
	<link rel="stylesheet" href="http://www.weartmap.com/weui/weui2.css"/>
	<link rel="stylesheet" href="http://www.weartmap.com/weui/example.css"/>
	<link rel="stylesheet" href="https://res.wx.qq.com/open/libs/weui/0.4.2/weui.min.css"/>
	<script src="http://www.weartmap.com/weui/zepto.min.js"></script>
	<script src="http://www.weartmap.com/weui/swipe.js"></script>
	<script src="http://www.weartmap.com/weui/iscroll.js"></script>
		<script>
		$( function () {
			TagNav( '#tagnav', {
				type: 'scrollToFirst',
			} );
			$( '.weui_tab' ).tab( {
				defaultIndex: 0,
				activeClass: 'weui_bar_item_on',
				onToggle: function ( index ) {
					if ( index > 0 ) {
						alert( index )
					}
				}
			} );
		} );
	</script>
</head>

<body>

	<div id="tagnav" class="weui-navigator weui-navigator-wrapper">
		<ul class="weui-navigator-list">
			<li><a href="http://www.weartmap.com/tips-articles/">全部</a>
			</li>
			<li><a href="http://www.weartmap.com/articlesmuseum/">艺术馆</a>
			</li>
			<li><a href="http://www.weartmap.com/creative-garden/">创意园</a>
			</li>
			<li class="weui-state-active"><a href="http://www.weartmap.com/music-hall/">音乐厅</a>
			</li>
			<li><a href="http://www.weartmap.com/library/">图书馆</a>
			</li>
			<li><a href="http://www.weartmap.com/art-gallery/">画廊</a>
			</li>
			<li><a href="http://www.weartmap.com/club/">会所</a>
			</li>
			<li><a href="http://www.weartmap.com/train/">培训</a>
			</li>
			<li><a href="http://www.weartmap.com/park/">公园</a>
			</li>
		</ul>
	</div>

	<div class="content">
   <div class="weui-panel weui-panel_access zixun_list">
        <div class="weui-panel__bd" id="listbox">
        <div class="weui-panel__hd">音乐厅相关文章列表</div>
<?php
$postslist = get_posts('category=142&numberposts=100&order=ASC&orderby=title');
			
			
foreach ($postslist as $post) :
   setup_postdata($post);
?>

             <a href="<?php the_permalink(); ?>" class="weui-media-box weui-media-box_appmsg">
                <div class="weui-media-box__hd">
                    <img class="weui-media-box__thumb" src="<?php
$thumbnail_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail');
echo $thumbnail_image_url[0];
?>" alt="<?php the_title(); ?>">
                </div>
                <div class="weui-media-box__bd">
                    <h4 class="weui-media-box__title"><?php the_title(); ?></h4>
                    <p class="weui-media-box__desc"><?php the_modified_time('Y年n月j日'); ?></p>
                </div>
</a>
      
	<?php endforeach; ?>	
			
		      </div>
    </div>   
			  
</div>   

		</div>

</body>

</html>