<?php
/*
@package WordPress
Template Name: articless
 */
?>
<!DOCTYPE html>
<html lang="zh-cmn-Hans">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
	<title>推荐&文章</title>
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
	<script>
		$( function () {
			$( '#slide1' ).swipeSlide( {
				autoSwipe: true, //自动切换默认是
				speed: 3000, //速度默认4000
				continuousScroll: true, //默认否
				transitionType: 'cubic-bezier(0.22, 0.69, 0.72, 0.88)', //过渡动画linear/ease/ease-in/ease-out/ease-in-out/cubic-bezier
				lazyLoad: true, //懒加载默认否
				firstCallback: function ( i, sum, me ) {
					me.find( '.dot' ).children().first().addClass( 'cur' );
				},
				callback: function ( i, sum, me ) {
					me.find( '.dot' ).children().eq( i ).addClass( 'cur' ).siblings().removeClass( 'cur' );
				}
			} );

			$( '#slide2' ).swipeSlide( {
				autoSwipe: true, //自动切换默认是
				speed: 3000, //速度默认4000
				continuousScroll: true, //默认否
				transitionType: 'cubic-bezier(0.22, 0.69, 0.72, 0.88)', //过渡动画linear/ease/ease-in/ease-out/ease-in-out/cubic-bezier
				lazyLoad: true, //懒加载默认否
				firstCallback: function ( i, sum, me ) {
					me.find( '.dot' ).children().first().addClass( 'cur' );
				},
				callback: function ( i, sum, me ) {
					me.find( '.dot' ).children().eq( i ).addClass( 'cur' ).siblings().removeClass( 'cur' );
				}
			} );
			$( '#slide3' ).swipeSlide( {
				autoSwipe: true, //自动切换默认是
				speed: 3000, //速度默认4000
				continuousScroll: true, //默认否
				transitionType: 'ease-in'
			} );


		} );
	</script>
</head>

<body>

	<div id="tagnav" class="weui-navigator weui-navigator-wrapper">
		<ul class="weui-navigator-list">
			<li class="weui-state-active"><a href="http://www.weartmap.com/tips-articles/">全部</a>
			</li>
			<li ><a href="http://www.weartmap.com/articlesmuseum/">艺术馆</a>
			</li>
			<li><a href="http://www.weartmap.com/creative-garden">创意园</a>
			</li>
			<li><a href="http://www.weartmap.com/music-hall/">音乐厅</a>
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

	<div class="slide" id="slide1">
		<ul>
		<?php 
    $sticky = get_option('sticky_posts'); 
    rsort( $sticky );//对数组逆向排序，即大ID在前 
    $sticky = array_slice( $sticky, 0, 3);//输出置顶文章数，请修改5，0不要动，如果需要全部置顶文章输出，可以把这句注释掉 
    query_posts( array( 'post__in' => $sticky, 'caller_get_posts' => 1 ) ); 
    if (have_posts()) :while (have_posts()) : the_post();     
?> 
			<li>
				<a href="<?php the_permalink(); ?>">
                <img src="<?php
$full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
echo $full_image_url[0];
?>">
            </a>
			
				<div class="slide-desc"><?php the_title(); ?></div>
			</li>
			
			<?php    endwhile; endif; ?> 
		</ul>

	</div>



		<div class="content">

   <div class="weui-panel weui-panel_access zixun_list">
        <div class="weui-panel__bd" id="listbox">
       <div class="weui-panel__hd">全部推荐文章</div>
<?php
$postslist = get_posts('numberposts=100&order=ASC&orderby=title');
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