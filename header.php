<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" dir="ltr" lang="ja">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" dir="ltr" lang="ja">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" dir="ltr" lang="ja">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html dir="ltr" lang="ja">
<!--<![endif]-->
<head>
<title><?php
global $page, $paged;
wp_title( '|', true, 'right' );
bloginfo( 'name' );

$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) )

if ( $paged >= 2 || $page >= 2 )
	echo '|'. sprintf( __( 'Page %s', 'Repos' ), max( $paged, $page ) );
?>
</title>
<meta name="description" content="株式会社グッデイが運営を行うファブラボ太宰府のwebサイト<?php if(!is_front_page()): ?><?php the_title(); ?>ページ<?php endif; ?>です。イベントやワークショップ、トークショーなど様々な催しをご案内します。福岡初のfablab、ご期待ください。" />
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=1100; user-scalable = yes">
<meta name="google-site-verification" content="fbStEAF-XEfQ6PvtGGNWI_6wFo-AeXRleq3Hl4LbLGY" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon-precomposed" href="/_ico/icon.png" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('url'); ?>/feed" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('url'); ?>/feed/rss" />
<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('url'); ?>/feed/atom" />
<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('url'); ?>/index.rdf" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" ></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" ></script>
<!--[if lte IE 8]>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/DOMAssistantCompressed-2.8.1.js"></script>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/ie-css3.js"></script>
<![endif]-->
<!--[if lt IE 9]>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" />
<link href="<?php bloginfo('template_url') ?>/css/<?php
if (is_page('top')) {
		echo 'index';
	} elseif(is_page('facilities')){
		echo 'facilities';
	} elseif(is_page('shopbot')){
		echo 'shopbot';
	} elseif(is_page('fablabdazaifu')){
		echo 'fablabdazaifu';
	} elseif(is_page('faq')){
		echo 'faq';
	} elseif(is_page('price')){
		echo 'price';
	} elseif(is_page('link')){
		echo 'link';
	} elseif(is_page('calendar')){
		echo 'calendar';
	} elseif(is_page('contact')){
		echo 'contact';
	} elseif(is_page('event') || 'event' == get_post_type()){
		echo 'event';
	} elseif(is_page('project') || 'project' == get_post_type()){
		echo 'project';
	} elseif(is_page('privacy')){
		echo 'privacy';
	} elseif(is_page('whatsfablab')){
		echo 'whatsfablab';
	} elseif(is_page('photogallery')){
		echo 'photogallery';
	} elseif(is_page('access')){
		echo 'access';
	} elseif(is_page('openlab')){
		echo 'openlab';
	} elseif(is_page('beginner')){
		echo 'beginner';
	} elseif(is_page('howtouse')){
		echo 'howtouse';
	} elseif(is_page('member')){
		echo 'member';
	} else{
		echo 'blog';
	}?>.css" rel="stylesheet" type="text/css" />
<?php if(is_front_page()): ?>
<style type="text/css">
.slideBgColor1{ background: <?php echo post_custom('color1'); ?>!important;}
.slideBgColor2{ background: <?php echo post_custom('color2'); ?>!important;}
.slideBgColor3{ background: <?php echo post_custom('color3'); ?>!important;}
.slideBgColor4{ background: <?php echo post_custom('color4'); ?>!important;}
.slideBgColor5{ background: <?php echo post_custom('color5'); ?>!important;}
</style>
<?php endif; ?>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:600,700,600italic,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:700,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js">{lang: 'ja'}</script>
<meta property="og:title" content="<?php if(!is_front_page()): ?><?php the_title(); ?> | <?php endif; ?>ファブラボ太宰府｜fablab dazaifu" />
<meta property="og:description" content="株式会社グッデイが運営を行うファブラボ太宰府のwebサイト<?php if(!is_front_page()): ?><?php the_title(); ?>ページ<?php endif; ?>です。イベントやワークショップ、トークショーなど様々な催しをご案内します。福岡初のfablab、ご期待ください。" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php if(is_front_page()): ?><?php bloginfo('url'); ?>/<?php else: ?><?php the_permalink(); ?><?php endif; ?>" />
<?php if (has_post_thumbnail()) :?>
<?php
$image_id = get_post_thumbnail_id();
$image_url = wp_get_attachment_image_src($image_id,'medium');
?>
<meta property="og:image" content="<?php echo $image_url[0]; ?>">
<?php else: ?>
<meta property="og:image" content="/_ico/icon.png">
<?php endif ;?>
<meta property="og:site_name" content="ファブラボ太宰府｜fablab dazaifu" />
<meta property="og:locale" content="ja_JP" />
<meta property="fb:app_id" content="1426224674311920" />
</head>
<body <?php body_class(); ?> id="<?php if(is_page('fablabdazaifu') || is_page('facilities') || is_page('contact') || is_page('project') || is_page('price')): ?>headSlide<?php elseif(is_front_page()): ?>index<?php else: ?>noImg<?php endif; ?>">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&appId=1426224674311920&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="wrapper" class="wrapper clearfix <?php if ( wp_is_mobile() ) : ?>mobile<?php else: ?>pc<?php endif; ?>">
<?php if(is_page('fablabdazaifu')): ?>
<div class="headSlider cycle-slideshow"
    data-cycle-fx=fade
    data-cycle-timeout=3000
    data-cycle-speed=1000>
	<img class="firstChild" src="<?php echo get_template_directory_uri(); ?>/img/about/img_head1.jpg" alt="ファブラボ太宰府 イメージ1" />
	<img src="<?php echo get_template_directory_uri(); ?>/img/about/img_head2.jpg" alt="ファブラボ太宰府 イメージ2" />
	<img src="<?php echo get_template_directory_uri(); ?>/img/about/img_head3.jpg" alt="ファブラボ太宰府 イメージ3" />
	<img src="<?php echo get_template_directory_uri(); ?>/img/about/img_head4.jpg" alt="ファブラボ太宰府 イメージ4" />
</div><!-- headSlider END -->
<?php endif; ?>
<?php if(is_page('facilities')): ?>
<div class="headSlider cycle-slideshow"
    data-cycle-fx=fade
    data-cycle-timeout=3000
    data-cycle-speed=1000>
	<img class="firstChild" src="<?php echo get_template_directory_uri(); ?>/img/facilities/img_head1.jpg" alt="施設の紹介 イメージ1" />
	<img src="<?php echo get_template_directory_uri(); ?>/img/facilities/img_head2.jpg" alt="施設の紹介 イメージ2" />
	<img src="<?php echo get_template_directory_uri(); ?>/img/facilities/img_head3.jpg" alt="施設の紹介 イメージ3" />
	<img src="<?php echo get_template_directory_uri(); ?>/img/facilities/img_head4.jpg" alt="施設の紹介 イメージ4" />
	<img src="<?php echo get_template_directory_uri(); ?>/img/facilities/img_head5.jpg" alt="施設の紹介 イメージ5" />
</div><!-- headSlider END -->
<?php endif; ?>
<?php if(is_page('contact')): ?>
<div class="headSlider cycle-slideshow"
    data-cycle-fx=fade
    data-cycle-timeout=2500
    data-cycle-speed=1000>
	<img class="firstChild" src="<?php echo get_template_directory_uri(); ?>/img/contact/img_head1.jpg" alt="お問い合わせ イメージ1" />
	<img src="<?php echo get_template_directory_uri(); ?>/img/contact/img_head2.jpg" alt="お問い合わせ イメージ2" />
	<img src="<?php echo get_template_directory_uri(); ?>/img/contact/img_head3.jpg" alt="お問い合わせ イメージ3" />
</div><!-- headSlider END -->
<?php endif; ?>
<?php if(is_page('project')): ?>
<div class="headSlider cycle-slideshow"
    data-cycle-fx=fade
    data-cycle-timeout=2500
    data-cycle-speed=1000>
	<img class="firstChild" src="<?php echo get_template_directory_uri(); ?>/img/project/img_head1.jpg" alt="プロジェクト イメージ1" />
	<img src="<?php echo get_template_directory_uri(); ?>/img/project/img_head2.jpg" alt="プロジェクト イメージ2" />
	<img src="<?php echo get_template_directory_uri(); ?>/img/project/img_head3.jpg" alt="プロジェクト イメージ3" />
</div><!-- headSlider END -->
<?php endif; ?>
<?php if(is_page('price')): ?>
<div class="headSlider cycle-slideshow"
    data-cycle-fx=fade
    data-cycle-timeout=2500
    data-cycle-speed=1000>
	<img class="firstChild" src="<?php echo get_template_directory_uri(); ?>/img/price/img_head1.jpg" alt="料金 イメージ1" />
	<img src="<?php echo get_template_directory_uri(); ?>/img/price/img_head2.jpg" alt="料金 イメージ1" />
</div><!-- headSlider END -->
<?php endif; ?>
<header class="clearfix">
	<?php if(is_front_page()): ?>
	<p class="headerLogo"><a href="<?php bloginfo('url'); ?>" title="ファブラボ太宰府"><img src="<?php echo get_template_directory_uri(); ?>/img/index/logo.png" alt="ファブラボ太宰府" width="240" height="84"></a></p>
	<?php else: ?>
	<p class="headerLogo"><a href="<?php bloginfo('url'); ?>" title="ファブラボ太宰府"><img src="<?php echo get_template_directory_uri(); ?>/img/share/headerlogo.png" alt="ファブラボ太宰府"></a></p>
	<?php endif; ?>
	<div class="headerR clearfix">
		<nav class="gnav">
			<ul class="clearfix">
				<li class="gnav1"><a href="<?php bloginfo('url'); ?>/whatsfablab" title="ファブラボとは"><img src="<?php echo get_template_directory_uri(); ?>/img/share/gnav1.png" alt="FABLAB DAZAIFU" width="126" height="22" /></a></li>
				<li class="gnav2">
				<a href="<?php bloginfo('url'); ?>/fablabdazaifu" title="ファブラボ太宰府とは"><img src="<?php echo get_template_directory_uri(); ?>/img/share/gnav2.png" alt="
				ファブラボ太宰府とは" widrh="180" height="22" /></a>
				<ul class="sssnav">
					<li><a href="<?php bloginfo('url'); ?>/project" title="プロジェクト"><img src="<?php echo get_template_directory_uri(); ?>/img/share/ssnav1.png" alt="プロジェクト" width="84" height="17"/></a></li>
					<li><a href="<?php bloginfo('url'); ?>/member" title="スタッフ紹介"><img src="<?php echo get_template_directory_uri(); ?>/img/share/ssnav2.png" alt="スタッフ紹介" width="84" height="17"/></a></li>
				</ul>
				</li>
				<li class="gnav3">
				<a href="<?php bloginfo('url'); ?>/howtouse" title="ご利用の流れ"><img src="<?php echo get_template_directory_uri(); ?>/img/share/gnav3.png" alt="ご利用の流れ" width="108" height="22" /></a>
				<ul class="sssnav">
					<li><a href="<?php bloginfo('url'); ?>/facilities" title="機材・設備一覧"><img src="<?php echo get_template_directory_uri(); ?>/img/share/ssnav3.png" alt="機材・設備一覧" width="98" height="17"/></a></li>
					<li><a href="<?php bloginfo('url'); ?>/price" title="料金表"><img src="<?php echo get_template_directory_uri(); ?>/img/share/ssnav4.png" alt="料金表" width="42" height="17" /></a></li>
					<li><a href="<?php bloginfo('url'); ?>/access" title="アクセス"><img src="<?php echo get_template_directory_uri(); ?>/img/share/ssnav5.png" alt="アクセス" width="61" height="17" /></a></li>
				</ul>
				</li>
				<li><a href="<?php bloginfo('url'); ?>/event" title="イベント情報"><img src="<?php echo get_template_directory_uri(); ?>/img/share/gnav4.png" alt="イベント情報" width="108" height="22" /></a></li>
				<li><a href="<?php bloginfo('url'); ?>/calendar" title="カレンダー・予約"><img src="<?php echo get_template_directory_uri(); ?>/img/share/gnav5.png" alt="カレンダー・予約" width="133" height="22" /></a></li>
				<li><a href="<?php bloginfo('url'); ?>/blog" title="ブログ"><img src="<?php echo get_template_directory_uri(); ?>/img/share/gnav6.png" alt="ブログ" width="54" height="22" /></a></li>
			</ul>
		</nav><!-- gnav END -->
	</div><!-- headerR -->
</header>
<div class="mainContents clearfix">
